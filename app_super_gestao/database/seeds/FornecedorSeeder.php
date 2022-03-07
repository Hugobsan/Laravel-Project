<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando o Objeto
        $uf_array=['AC', 'AL', 'AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];
        $fornecedor = new Fornecedor();
        $fornecedor->nome = Str::random(10);
        $fornecedor->site = 'www.'.strtolower($fornecedor->nome).'.com.br';
        $fornecedor->uf = Arr::random($uf_array);
        $fornecedor->email = 'contato@'.strtolower($fornecedor->nome).'.com.br';
        $fornecedor->save();

        /*O metodo create
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => $uf_array[rand(0,26)],
            'email' => 'contato@fornecedor200.com.br'
        ]);*/

        /*Insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf' => $uf_array[rand(0,26)],
            'email' => 'contato@fornecedor300.com.br'
        ]);*/
    }
}
