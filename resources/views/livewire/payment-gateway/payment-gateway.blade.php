<div>
    <div class="space-y-4">
        <h3 class="text-lg font-medium">Selecciona método de pago</h3>

        <!-- Modo (QR) -->
        <div 
            @click="selectMethod('modo')" 
            :class="{ 'border-blue-500': selectedMethod === 'modo' }"
            class="p-4 border rounded-lg cursor-pointer"
        >
            <div class="flex items-center">
                <input type="radio" checked="{{ $selectedMethod === 'modo' }}">
                <img src="{{ asset('images/modo-logo.png') }}" class="h-8 ml-2">
                <span class="ml-2">Pago con QR (0% comisión)</span>
            </div>
            @if($qrCode)
                <div class="mt-4 p-4 bg-white">
                    <img src="data:image/png;base64,{{ $qrCode }}" class="mx-auto h-32">
                    <p class="text-sm text-center mt-2">Escanea este código con la app de Modo</p>
                </div>
            @endif
        </div>

        <!-- Stripe (Tarjetas Internacionales) -->
        <div 
            @click="selectMethod('stripe')" 
            :class="{ 'border-blue-500': selectedMethod === 'stripe' }"
            class="p-4 border rounded-lg cursor-pointer"
        >
            <div class="flex items-center">
                <input type="radio" checked="{{ $selectedMethod === 'stripe' }}">
                <img src="{{ asset('images/stripe-logo.png') }}" class="h-8 ml-2">
                <span class="ml-2">Tarjeta internacional (2.9% + $3.50 ARS)</span>
            </div>
            
            @if($selectedMethod === 'stripe')
                <div class="mt-4" x-data>
                    @livewire('stripe-payment-element', ['amount' => $amount], key('stripe-'.$amount))
                </div>
                @if($stripeError)
                    <div class="text-red-500 mt-2">{{ $stripeError }}</div>
                @endif
            @endif
        </div>

        <!-- Mercado Pago -->
        <div 
            @click="selectMethod('mercadopago')" 
            :class="{ 'border-blue-500': selectedMethod === 'mercadopago' }"
            class="p-4 border rounded-lg cursor-pointer"
        >
            <div class="flex items-center">
                <input type="radio" checked="{{ $selectedMethod === 'mercadopago' }}">
                <img src="{{ asset('images/mercadopago-logo.png') }}" class="h-8 ml-2">
                <span class="ml-2">Tarjeta local/efectivo (4.99% + $21 ARS)</span>
            </div>
            @if($mpLink)
                <a href="{{ $mpLink }}" class="mt-4 block w-full bg-blue-500 text-white py-2 px-4 rounded text-center">
                    Pagar con Mercado Pago
                </a>
            @endif
        </div>

        <button 
            @click="initPayment" 
            :disabled="!selectedMethod"
            class="w-full bg-green-500 text-white py-2 px-4 rounded disabled:bg-gray-300"
        >
            Confirmar Pago
        </button>
    </div>

    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            Livewire.on('initStripe', () => {
                const stripe = Stripe('{{ config("services.stripe.key") }}');
                // Implementar Stripe Elements aquí
            });
        </script>
    @endpush
</div>