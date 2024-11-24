<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $user=Auth::user();

        if($user->hasRole('admin')){
            $this->redirectIntended(default: route('dashboard.admin', absolute: false), navigate: true);
        }
        else if($user->hasRole('investor')){
            $this->redirectIntended(default: route('dashboard.investor', absolute: false), navigate: true);
        }
        else if($user->hasRole('pushing')){
            $this->redirectIntended(default: route('dashboard.pushing', absolute: false), navigate: true);
        } else {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
        }


    }
}; ?>

<div class="">
    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form wire:submit.prevent="login" class="space-y-4">
        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input wire:model="form.email" id="email" type="email" name="email" required autofocus autocomplete="username"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500"
                placeholder="usuario@ejemplo.com">
            @error('form.email')
                <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input wire:model="form.password" id="password" type="password" name="password" required autocomplete="current-password"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500"
                placeholder="********">
            @error('form.password')
                <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón de inicio de sesión -->
        <div class="flex items-center justify-end">
            <button type="submit"
                class="px-4 py-2 bg-teal-600 text-white rounded-lg shadow-sm hover:bg-teal-700 transition duration-300">
                Log in
            </button>
        </div>
    </form>
</div>
