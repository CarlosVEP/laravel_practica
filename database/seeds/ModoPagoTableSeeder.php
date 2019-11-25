<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ModoPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modo_pagos')->truncate();
        DB::table('modo_pagos')->insert([
            'nombre' => 'Cheque',
            'descripcion' => 'Pago con cheque'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Crédito',
            'descripcion' => 'Pago a crédito'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Depósito',
            'descripcion' => 'Pago via depósito bancario'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Transferencia',
            'descripcion' => 'Pago vía transferencia'
        ]);
        DB::table('modo_pagos')->insert([
            'nombre' => 'Contado',
            'descripcion' => 'Pago al contado'
        ]);
       
    }
}