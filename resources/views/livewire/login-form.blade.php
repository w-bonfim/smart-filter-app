<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>

    <form wire:submit.prevent="login" class="space-y-4">
        <div>
            <label class="block font-medium">E-mail</label>
            <input type="email" id="email" wire:model.live="email"
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-400">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Senha</label>
            <input type="password" id="password" wire:model.live="password"
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-400">
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-between">
            <label class="inline-flex items-center">
                <input type="checkbox" wire:model="remember" class="mr-2">
                <span class="text-sm">Lembrar-me</span>
            </label>
        </div>

        <div>
            <button type="submit"
                class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition">
                Entrar
            </button>
        </div>
    </form>
</div>
