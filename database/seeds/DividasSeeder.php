<?php

use Illuminate\Database\Seeder;
use App\Dividas;

class DividasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dividas = [
            ['descricao' => 'Carro', 'valor' => 1000.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 1],
            ['descricao' => 'teste', 'valor' => 20.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 2],
            ['descricao' => 'bicicleta', 'valor' => 40.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 3],
            ['descricao' => 'energia', 'valor' => 10.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 4],
            ['descricao' => 'agua', 'valor' => 30.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 1],
            ['descricao' => 'telefone', 'valor' => 20.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 1],
            ['descricao' => 'teste', 'valor' => 32.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 1],
            ['descricao' => 'internet', 'valor' => 100.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 2],
            ['descricao' => 'moveis', 'valor' => 25.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 1],
            ['descricao' => 'piso', 'valor' => 58.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 3],
            ['descricao' => 'pia', 'valor' => 4.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 1],
            ['descricao' => 'mesa', 'valor' => 8.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 4],
            ['descricao' => 'cadeira', 'valor' => 2.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 2],
            ['descricao' => 'porta', 'valor' => 6.99, 'data_vencimento'=>'2020-02-17', 'devedor_id'=> 1],

        ];

        Dividas::insert($dividas);
    }
}
