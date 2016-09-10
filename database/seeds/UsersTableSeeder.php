<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([
            'cedula' => '21303043',
            'nombre' => 'EDINSON',
            'apellido' => 'FIGUEROA',
            'telefono' => '04160389440',
            'direccion' => 'BALDOSERA',
        ]);

        DB::table('users')->insert([
            'email' => 'edinjson@gmail.com',
            'password' => bcrypt('123456'),
            'id_persona' => '1',
        ]);
    }
}
