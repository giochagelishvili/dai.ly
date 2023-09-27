<x-guest-layout>
    <div class="flex flex-col items-center justify-evenly w-screen h-screen bg-black">
        <div class="flex flex-col items-center gap-4 text-white text-center p-6">
            <div>
                <h1 class="font-gothic text-3xl">Nice to meet you!</h1>
                <h3 class="text-xs mt-2">Sign up and let's get started!</h3>
            </div>

            <div class="flex items-center justify-center gap-1 w-fit bg-white p-1 rounded-full">
                <button id="sign-in-btn" class="bg-black px-8 py-1 rounded-full text-sm font-bold form-button transition-all">Sign In</button>
                <button id="sign-up-btn" class="text-black px-8 py-1 rounded-full text-sm font-bold form-button transition-all">Sign Up</button>
            </div>
        </div>
        <div class="form-div bg-white flex-1 w-full flex items-center justify-center p-8">
            <div id="registration-form" class="w-full h-full hidden">
                @include('auth.register')
            </div>
            
            <div id="login-form" class="w-full h-full">
                @include('auth.login')
            </div>
        </div>
        {{-- @include('auth.login')
        @include('auth.register') --}}
    </div>
</x-guest-layout>