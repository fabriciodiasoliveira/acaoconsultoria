<?php

namespace App\Http\Repository;

use App\Models\Pessoa;

class PessoaRepository extends Pessoa
{
    protected $hidden = [
        'id',
    ];
    public function getAllPessoas()
    {
        return Pessoa::query()->select('*')->get();
    }
    public function remove($id){
        Pessoa::where('id', $id)->delete();
    }
    public function getPessoa($id)
    {
        return Pessoa::query()->select('*')->where('id','=', $id)->first();
    }
    public function updateWingoutModel($id, Array $options)
    {
        Pessoa::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        Pessoa::query()->insert($options);
    }
}
