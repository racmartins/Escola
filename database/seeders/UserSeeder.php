<?php

// database/seeders/UserSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Criar 10 usuários comuns
        factory(User::class, 10)->create();

        // Criar um administrador com acesso total
        User::create([
            'name' => 'Admin Total',
            'email' => 'admintotal@example.com',
            // Outros campos necessários, como senha
            'role' => 'admin_total',
        ]);

        // Criar um administrador com acesso parcial
        User::create([
            'name' => 'Admin Parcial',
            'email' => 'adminparcial@example.com',
            // Outros campos necessários, como senha
            'role' => 'admin_parcial',
        ]);
    }
}
