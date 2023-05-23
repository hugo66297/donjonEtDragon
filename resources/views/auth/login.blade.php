<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo class="w-20 h-20 fill-current"></x-application-logo>
        </x-slot>

        <form method="POST" class="space-y-6" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Pseudo</label>
                <div class="mt-2">
                    <x-input
                        id="pseudo"
                        name="name"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
                </div>
                <div class="mt-2">
                    <x-input
                        id="password"
                        name="password"
                        type="password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2"></x-input-error>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="block">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="text-sm">
                    <a
                        href="{{ route('password.request') }}"
                        class="font-semibold text-red-600 hover:text-red-500"
                    >
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>

            <x-primary-button class="w-full justify-center">
                {{ __('Log in') }}
            </x-primary-button>
        </form>
        <p class="mt-6 text-center text-sm text-gray-500">
            Pas encore membre ?
            <a href="{{route('register')}}" class="font-semibold leading-6 text-red-600 hover:text-red-500">
                Inscris-toi ici
            </a>
        </p>
    </x-auth-card>
</x-guest-layout>
