<form class="flex flex-col items-center justify-evenly w-full h-full lg:gap-4" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="w-full">
        <h1 class="font-bold">Create account</h1>
        <h2 class="text-xs opacity-70">Please fill out the form</h2>
    </div>

    <!-- Name -->
    <div class=" w-full">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class=" w-full">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class=" w-full">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class=" w-full">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <!-- Terms & Conditions -->
    <div class="block w-full">
        <label for="terms_and_conditions" class="inline-flex items-center">
            <input required id="terms_and_conditions" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="terms_and_conditions">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('I agree to the ') }} <a href="#" class="underline text-black">Terms and Conditions</a></span>
        </label>
    </div>

    <div class="flex items-center justify-center w-2/3">
        <x-primary-button class="flex items-center justify-center w-full text !bg-black !text-white py-2 px-6  font-gothic text-lg rounded-lg border !border-black lg:hover:!text-black lg:hover:!bg-white transition-colors">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>