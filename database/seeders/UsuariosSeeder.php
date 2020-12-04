<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin=User::create([
            'name'=> 'Sergio admin',
            'email'=>'sergio@gmail.com',
            'password'=> Hash::make('admin'),
            'fullaccess' => 'True',
            'codigo'=> 'codigo_admin'
        ]);
        $user1=User::create([
            'name'=>'Paco User',
            'email'=>'paco@gmail.com',
            'password'=> Hash::make('usuario'),
            'fullaccess'=>'False',
            'codigo'=>'codigo_usuario'
        ]);
    }
}
