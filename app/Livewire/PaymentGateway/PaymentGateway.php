<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Stripe\Stripe;
use MercadoPago\SDK;
use App\Models\Payment;

class PaymentGateway extends Component
{
    public $amount;
    public $selectedMethod;
    public $qrCode = null;
    public $stripeError;
    public $mpLink = null;

    protected $listeners = ['processStripePayment'];

    public function render()
    {
        return view('livewire.payment-gateway');
    }

    public function selectMethod($method)
    {
        $this->selectedMethod = $method;
    }

    public function initPayment()
    {
        if ($this->selectedMethod === 'modo') {
            $this->generateModoQR();
        } elseif ($this->selectedMethod === 'stripe') {
            $this->emit('initStripe');
        } elseif ($this->selectedMethod === 'mercadopago') {
            $this->initMercadoPago();
        }
    }

    protected function generateModoQR()
    {
        // Ejemplo: API ficticia de Modo (adaptar a API real)
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.modo.api_key')
        ])->post('https://api.modo.com.ar/qr', [
            'amount' => $this->amount,
            'currency' => 'ARS'
        ]);

        $this->qrCode = $response->json()['qr_data'];
    }

    public function processStripePayment($token)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $charge = \Stripe\Charge::create([
                'amount' => $this->amount * 100,
                'currency' => 'ars',
                'source' => $token,
                'description' => 'Pago internacional',
            ]);

            Payment::create([
                'method' => 'stripe',
                'amount' => $this->amount,
                'transaction_id' => $charge->id,
                'status' => 'completed'
            ]);

            return redirect()->route('payment.success');
        } catch (\Exception $e) {
            $this->stripeError = $e->getMessage();
        }
    }

    protected function initMercadoPago()
    {
        SDK::setAccessToken(config('services.mercadopago.access_token'));

        $preference = new \MercadoPago\Preference();
        $item = new \MercadoPago\Item();
        $item->title = 'Compra';
        $item->quantity = 1;
        $item->unit_price = $this->amount;
        $preference->items = [$item];
        $preference->back_urls = [
            'success' => route('payment.success'),
            'failure' => route('payment.failure'),
        ];
        $preference->save();

        $this->mpLink = $preference->init_point;
    }
}