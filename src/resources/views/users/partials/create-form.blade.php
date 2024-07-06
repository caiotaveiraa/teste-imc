<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Cadastrar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Criação de um novo usuário no sistema.") }}
        </p>
    </header>

    <form
        method="post"
        action="{{ route('users.store') }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('post')

        <div class="space-y-2">
            <x-form.label
                for="name"
                :value="__('Nome')"
            />

            <x-form.input
                id="name"
                name="name"
                type="text"
                class="block w-full"
                required
                autofocus
                autocomplete="name"
            />

            <x-form.error :messages="$errors->get('name')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="email"
                :value="__('E-mail')"
            />

            <x-form.input
                id="email"
                name="email"
                type="email"
                class="block w-full"
                required
                autocomplete="email"
            />

            <x-form.error :messages="$errors->get('email')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="phone"
                :value="__('Telefone')"
            />

            <x-form.input
                id="phone"
                name="phone"
                type="number"
                class="block w-full"
                required
                autocomplete="phone"
            />

            <x-form.error :messages="$errors->get('phone')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="weight"
                :value="__('Peso (kg)')"
            />

            <x-form.input
                id="weight"
                name="weight"
                type="number"
                class="block w-full"
                required
                autocomplete="weight"
            />

            <x-form.error :messages="$errors->get('weight')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="height"
                :value="__('Altura (cm)')"
            />

            <x-form.input
                id="height"
                name="height"
                type="number"
                class="block w-full"
                required
                autocomplete="height"
            />

            <x-form.error :messages="$errors->get('height')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="message"
                :value="__('Mensagem')"
            />

            <x-form.input
                id="message"
                name="message"
                type="text"
                class="block w-full"
                required
                autocomplete="message"
            />

            <x-form.error :messages="$errors->get('message')" />
        </div>

        <div class="flex items-center gap-4">
            <x-button>
                {{ __('Salvar') }}
            </x-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >
                    {{ __('Sucesso!.') }}
                </p>
            @endif
        </div>
    </form>
</section>
