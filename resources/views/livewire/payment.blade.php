<div class="bg-gradient-to-br from-white to-red-500 h-screen w-full flex items-center justify-center">
    <div class="bg-white bg-opacity-90 rounded-lg p-10 shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-5 text-center">Payment Form</h2>

        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="mb-4">
                <label for="cardholder_name" class="block text-sm font-medium text-gray-700">Cardholder Name</label>
                <input type="text" id="cardholder_name" wire:model="cardholder_name" placeholder="John Doe"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-pink-500 focus:border-pink-500">
                @error('cardholder_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="card_number" class="block text-sm font-medium text-gray-700">Card Number</label>
                <input type="text" id="card_number" wire:model="card_number" placeholder="1234 5678 9012 3456" maxlength="16"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-pink-500 focus:border-pink-500">
                @error('card_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="expiry_date" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                <input type="text" id="expiry_date" wire:model="expiry_date" placeholder="12/23"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-pink-500 focus:border-pink-500">
                @error('expiry_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                <input type="password" id="cvv" wire:model="cvv" placeholder="123" maxlength="3"
                       class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-pink-500 focus:border-pink-500">
                @error('cvv') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mt-6">
                <button type="submit" class="w-full bg-red-500 text-white font-medium p-2 rounded-md hover:bg-red-600">
                    Pay Now
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('card_number').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 16) {
            value = value.slice(0, 16);
        }
        e.target.value = value;
    });

    document.getElementById('cvv').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 3) {
            value = value.slice(0, 3);
        }
        e.target.value = value;
    });

    document.getElementById('expiry_date').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 4) {
            value = value.slice(0, 4);
        }
        if (value.length > 2) {
            value = value.slice(0, 2) + '/' + value.slice(2);
        } else if (value.length === 2) {
            value += '/';
        }
        e.target.value = value;
    });
</script>
