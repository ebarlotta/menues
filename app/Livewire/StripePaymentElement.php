<?php

namespace App\Livewire;

use Livewire\Component;

class StripePaymentElement extends Component
{
    public $amount;
    
    public function mount($amount) {
        $this->amount = $amount;
    }

    public function render() {
        return view('livewire.stripe-payment-element');
    }
}
