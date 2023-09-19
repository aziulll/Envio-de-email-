<section>

    <x-create-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'create-new-user')">
        {{_('Novo')}}
    </x-create-button>

    <x-modal name="create-new-user" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post"  action="{{ route('register') }}" class="p-6">
            @csrf
            @method('post')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Deseja criar um novo usuário?') }}
            </h2>
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-create-button class="ml-3 ">
                    {{ __('Criar Usuário') }}
                </x-create-button>
            </div>
        </form>
    </x-modal>

</section>