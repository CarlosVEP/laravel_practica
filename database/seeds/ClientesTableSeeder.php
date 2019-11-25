<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->truncate();

        DB::table('clientes')->insert([
            'nombre' => 'Marco',
            'apellido' => 'Bascope',
            'direccion' => 'Av. Aroma y Lanza',
            'fecha_nacimiento' => '1975-10-18',
            'telefono' => '79678459',
            'email' => 'marco_bascope@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Jeanine',
            'apellido' => 'Áñez',
            'direccion' => 'Av. América y Pando',
            'fecha_nacimiento' => '1967-06-13',
            'telefono' => '60978456',
            'email' => 'jeanine_anez@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Álvaro',
            'apellido' => 'García Linera',
            'direccion' => 'Calle México',
            'fecha_nacimiento' => '1962-10-19',
            'telefono' => '70789456',
            'email' => 'alvaro_linera@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Carlos',
            'apellido' => 'Mesa Gisbert',
            'direccion' => 'Av. Circunvalación',
            'fecha_nacimiento' => '1953-08-12',
            'telefono' => '70712458',
            'email' => 'carlos_mesa@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Evo',
            'apellido' => 'Morales Ayma',
            'direccion' => 'Calle México',
            'fecha_nacimiento' => '1959-10-26',
            'telefono' => '79778124',
            'email' => 'evo_morales@gmail.com'
        ]);
    }
}
