<?php

use Illuminate\Database\Seeder;
use Symfony\Component\HttpKernel\Client;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome'  =>  'Maria da Silva',
            'email' => 'mariasilva1830@gmail.com',
            'telefone' => '1144445555',
            'data_de_nascimento'   => '1989-07-01',
            'endereco'=> 'Rua dos Santos, 25',
            'complemento'=> 'casa',
            'bairro'   => 'Centro',
            'cep'   => '01500-000',
       ]);
       DB::table('clientes')->insert([
            'nome'  =>  'Luiza de Oliveira',
            'email' => 'luluzinha@gmail.com',
            'telefone' => '1155554444',
            'data_de_nascimento'   => '1980-05-21',
            'endereco'=> 'Rua das Oliveiras, 450',
            'complemento'=> 'Apto 121',
            'bairro'   => 'Centro',
            'cep'   => '01520-000',
    ]);
        DB::table('clientes')->insert([
            'nome'  =>  'José dos Santos',
            'email' => 'josesantos@gmail.com',
            'telefone' => '1133334444',
            'data_de_nascimento'   => '1975-09-08',
            'endereco'=> 'Rua dos Testes, 1250',
            'complemento'=> 'Apto 25',
            'bairro'   => 'Centro',
            'cep'   => '01540-000',
    ]);
        DB::table('clientes')->insert([
            'nome'  =>  'Antonio Pereira',
            'email' => 'antoniop@gmail.com',
            'telefone' => '1122225555',
            'data_de_nascimento'   => '1971-03-25',
            'endereco'=> 'Rua dos Pereiras, 120',
            'complemento'=> 'Casa',
            'bairro'   => 'Centro',
            'cep'   => '01550-000',
    ]);
        DB::table('clientes')->insert([
            'nome'  =>  'Fernando Abirosvaldo',
            'email' => 'fabiro@gmail.com',
            'telefone' => '1123456788',
            'data_de_nascimento'   => '1989-06-08',
            'endereco'=> 'Rua dos Jacintos, 980',
            'complemento'=> 'Apto 71',
            'bairro'   => 'Centro',
            'cep'   => '01560-000',
    ]);
    }
}
