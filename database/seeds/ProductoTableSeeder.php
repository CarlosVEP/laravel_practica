<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->truncate();
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'LG',
            'precio' => '500',
            'stock' => '20'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 2,
            'nombre' => 'LG',
            'precio' => '1800',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 3,
            'nombre' => 'Alvic',
            'precio' => '600',
            'stock' => '10'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 4,
            'nombre' => 'Sony 32',
            'precio' => '400',
            'stock' => '20'
        ]);
        DB::table('productos')->insert([
            'id_categoria' => 1,
            'nombre' => 'Daewo',
            'precio' => '180',
            'stock' => '30'
        ]);       
    }
}