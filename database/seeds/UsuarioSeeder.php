<?php

use Illuminate\Database\Seeder;
use App\Usuarios;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
          'name' => 'pascual',
          'mail' => 'apascual123@gmail.com',
          'password' => 'pascual',
        ]);
    }
}
