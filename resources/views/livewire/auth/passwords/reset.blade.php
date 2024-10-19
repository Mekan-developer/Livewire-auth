<div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center relative">
    <div class="w-full max-w-md">
        <div class="bg-white dark:bg-gray-800 rounded-md shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">Reset Password</h2>
            <form wire:submit.prevent="resetPassword">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input type="email" wire:model="email" id="email" readonly
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">New Password</label>
                    <input type="password" wire:model="password" id="password"
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <input type="password" wire:model="password_confirmation" id="password_confirmation"
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white dark:bg-blue-500 dark:hover:bg-blue-600 font-bold py-2 px-4 rounded-md">
                    Reset Password
                </button>

                @if (session()->has('status'))
                    <div class="mt-4 text-green-500">{{ session('status') }}</div>
                @endif

                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </form>
        </div>

        <div class="text-center mt-6 text-gray-600 dark:text-gray-400">
            Remembered your password? <a href="{{ route('login') }}" class="text-blue-600 dark:text-blue-300 hover:underline">Login</a>
        </div>
    </div>
</div>