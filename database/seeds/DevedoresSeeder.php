<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Devedores;

class DevedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devedores = [
            ['nome' => 'Tiago teste', 'doc' => '321156456546', 'data_nascimento'=>'1986-10-02'],
            ['nome' => 'honorio teste', 'doc' => '13354456465','data_nascimento'=>'1986-10-02'],
            ['nome' => 'luiz teste', 'doc' => '4546512211212','data_nascimento'=>'1986-10-02'],
            ['nome' => 'Jess teste', 'doc' => '2123121211','data_nascimento'=>'1986-10-02'],
            ['nome' => 'Marcos teste', 'doc' => '2123121211','data_nascimento'=>'1986-10-02'],
            ['nome' => 'Carlos tess teste', 'doc' => '2123121211','data_nascimento'=>'1986-10-02'],
            ['nome' => 'maria teste', 'doc' => '2123121211','data_nascimento'=>'1986-10-02'],
            ['nome' => 'Joana teste', 'doc' => '2123121211','data_nascimento'=>'1986-10-02'],
            ['nome' => 'Jessica teste', 'doc' => '2123121211','data_nascimento'=>'1986-10-02'],
        ];
        Devedores::insert($devedores);
    }
}
