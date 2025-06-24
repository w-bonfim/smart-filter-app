<?php

namespace Tests\Feature\Livewire;

use App\Livewire\LoginForm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Livewire\Livewire;

class LoginFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_credentials()
    {
        $user = User::factory()->create([
            'email' => 'wellington@lmfrotas.com',
            'password' => bcrypt('admin123'),
        ]);

        Livewire::test(LoginForm::class)
            ->set('email', 'wellington@lmfrotas.com')
            ->set('password', 'admin123')
            ->call('login')
            ->assertRedirect('/produtos');
    }
}
