<div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white dark:bg-gray-800 rounded-md shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">Login</h2>
            <form wire:submit.prevent="login">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input type="email" wire:model="email" id="email"
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <input type="password" wire:model="password" id="password"
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" class="h-4 w-4 text-blue-600 dark:text-blue-300">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900 dark:text-gray-400">Remember Me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 dark:text-blue-300 hover:underline">Forgot Password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white dark:bg-blue-500 dark:hover:bg-blue-600 font-bold py-2 px-4 rounded-md">
                    Login
                </button>

                @if (session()->has('error'))
                    <div class="mt-4 text-red-500">{{ session('error') }}</div>
                @endif
            </form>
        </div>

        <div class="text-center mt-6 text-gray-600 dark:text-gray-400">
            Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 dark:text-blue-300 hover:underline" wire:navigate>Register</a>
        </div>
    </div>
</div>
