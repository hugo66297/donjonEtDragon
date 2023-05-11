<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" class="space-y-6" action="{{ route('register') }}">
            @csrf
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-input
                    id="name"
                    type="text"
                    name="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="">
                <x-input-label for="email" :value="__('Email')" />
                <x-input
                    id="email"
                    type="email"
                    name="email"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="">
                <x-input-label for="password" :value="__('Password')" />
                <x-input
                    id="password"
                    type="password"
                    name="password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Confirm Password -->
            <div class="">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <x-primary-button class="w-full justify-center">
                Enregistrer
            </x-primary-button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-500">
            Déjà inscrit ?
            <a href="{{route('login')}}" class="font-semibold leading-6 text-red-600 hover:text-red-500">
                Connecte toi
            </a>
        </p>
    </x-auth-card>
</x-guest-layout>
