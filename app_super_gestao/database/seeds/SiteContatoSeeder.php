<?php

use Illuminate\Database\Seeder;
use App\SiteContato;
use Illuminate\Support\Str;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $contato = new SiteContato();
        $contato -> nome = str::random(10);
        $contato -> telefone = '('.rand(10, 99).') 9'.rand(10000000, 99999999);
        $contato -> email = strtolower($contato->nome).'@gmail.com';
        $contato -> motivo_contato = rand(0, 9);
        $contato -> mensagem = str::random(30);
        $contato -> save();*/

        factory(SiteContato::class, 100)->create();
    }
}
