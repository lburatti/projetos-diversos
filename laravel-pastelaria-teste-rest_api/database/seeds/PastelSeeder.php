<?php

use Illuminate\Database\Seeder;

class PastelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasteis')->insert([
            'nome'  =>  'Pastel de Carne',
            'preco' => '5.00',
            'foto' => '../public/img/pastel_carne.jpeg'
        ]);
        DB::table('pasteis')->insert([
            'nome'  =>  'Pastel de Queijo',
            'preco' => '4.50',
            'foto' => '../public/img/pastel_queijo.jpeg'
        ]);
        DB::table('pasteis')->insert([
            'nome'  =>  'Pastel de Frango',
            'preco' => '5.00',
            'foto' => '../public/img/pastel_frango.jpeg'
        ]);
        DB::table('pasteis')->insert([
            'nome'  =>  'Pastel de Frango com Catupiry',
            'preco' => '5.50',
            'foto' => '../public/img/pastel_frango_catupiry.jpeg'
        ]);
        DB::table('pasteis')->insert([
            'nome'  =>  'Pastel de Pizza',
            'preco' => '5.00',
            'foto' => '../public/img/pastel_pizza.jpeg'
        ]);
    }
}
