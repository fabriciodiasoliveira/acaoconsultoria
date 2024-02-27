<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\PessoaRepository;
class PessoaController extends Controller
{
    private $model;
    public function __construct() {
        $this->model = new PessoaRepository();
    }

    public function index()
    {
        $pessoas = $this->model->getAllPessoas();
        return view('pessoas.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        $option = $request->except('_token');
        $this->model->store($option);
        return redirect()->route('pessoas')->with('success', 'Uma Pessoa inserida.');
    }

    public function show(int $id)
    
    {
        //
    }

    public function edit(int $id)
    {
        //
        $pessoa = $this->model->getPessoa($id);
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(Request $request, int $id)
    {
        $options = $request->except('_token', '_method');
        $this->model->updateWingoutModel($id, $options);
        return redirect()->route('pessoas')->with('success', 'Uma Pessoa alterada.');
    }

    public function destroy(int $id)
    {
        $this->model->remove($id);
        return redirect()->route('pessoas')->with('success', 'Uma Pessoa eliminada.');
    }
}
