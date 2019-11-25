<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->truncate();
        DB::table('categorias')->insert([
            'nombre' => 'Lavadoras',
            'descripcion' => 'Descripcion Lavadoras'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Refrigeradores',
            'descripcion' => 'Descripcion Refrigeradores'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Cocinas',
            'descripcion' => 'Descripcion Cocinas'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Televisores',
            'descripcion' => 'Descripcion Televisores'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Microondas',
            'descripcion' => 'Descripcion Microondas'
        ]);
    }
}