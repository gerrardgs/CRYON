<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="flex w-full justify-center mb-3">
            <h1 class="text-4xl font-extrabold bg-gradient-to-r from-[#7C6CFB] from-10% to-[#28B8FF] to-100% text-transparent bg-clip-text">Forgot Password</h1>
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>

            <div class="pt-5 mt-6 border-t border-slate-200">
            <div class="text-sm text-black">
                {{ __('Back To ') }} <a class="font-medium text-indigo-700 hover:text-indigo-900"
                    href="{{ route('login') }}">{{ __('Login Page') }}</a>
            </div>
        </div>
        </form>
    </x-authentication-card>
</x-guest-layout>