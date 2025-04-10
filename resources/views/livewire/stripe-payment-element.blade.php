<!-- resources/views/livewire/stripe-payment-element.blade.php -->
<div>
    <div id="stripe-card-element" class="p-2 border rounded"></div>
    <button 
        id="stripe-submit" 
        class="mt-2 bg-blue-500 text-white px-4 py-2 rounded"
    >
        Pagar {{ $amount }} ARS
    </button>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:load', function() {
        const stripe = Stripe('{{ config("services.stripe.key") }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card', {
            style: { base: { fontSize: '16px' } }
        });
        cardElement.mount('#stripe-card-element');

        document.getElementById('stripe-submit').addEventListener('click', async () => {
            const { error, paymentMethod } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
            });

            if (error) {
                console.error(error);
            } else {
                Livewire.emit('processStripePayment', paymentMethod.id);
            }
        });
    });
</script>
@endpush