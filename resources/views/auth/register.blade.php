<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" value="Telefone" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                placeholder="(83) 99999-9999" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Birth_date -->
        <div class="mt-4">
            <x-input-label for="birth_date" value="Data de Nascimento" />
            <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')"
                required />
            <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>

        <!-- Function -->
        <div class="mt-4">
            <x-input-label for="function" value="Função" />
            <select id="function" name="function"
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                required>
                <option value="" disabled selected>Selecione sua função</option>
                <option value="violão">Violão</option>
                <option value="teclado">Teclado</option>
                <option value="contra-baixo">Contra-baixo</option>
                <option value="guitarra">Guitarra</option>
                <option value="bateria">Bateria</option>
                <option value="vocalista">Vocalista</option>
                <option value="mídia">Mídia</option>
            </select>
            <x-input-error :messages="$errors->get('function')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script src="https://unpkg.com/imask"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.getElementById('phone');

        if (phoneInput) {
            const maskOptions = {
                mask: [{
                        mask: '(00) 0000-0000'
                    },
                    {
                        mask: '(00) 00000-0000'
                    }
                ]
            };

            // Aplica a máscara ao input
            IMask(phoneInput, maskOptions);
        }
    });
</script>
