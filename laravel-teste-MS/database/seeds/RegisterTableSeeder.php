<?php

use Illuminate\Database\Seeder;
Use App\Register;

class RegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++) {
            $register = new Register();

            $register->nome_completo = "Fulano Sobrenome $i";

            $register->save();

        }
    }
}
