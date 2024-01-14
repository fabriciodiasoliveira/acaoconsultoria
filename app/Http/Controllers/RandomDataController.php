<?php

namespace App\Http\Controllers;

use App\Models\RandomData;
use Illuminate\Http\Request;

class RandomDataController extends Controller
{
    private RandomData $model;
    
    public function __construct() {
        $this->model = new RandomData();
    }

    
    public function index()
    {
        $randomData = $this->model->getRandomData();
        return view('welcome', compact('randomData'));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function show(RandomData $randomData)
    {
    }
    public function edit(RandomData $randomData)
    {
    }
    public function update(Request $request, RandomData $randomData)
    {
    }
    public function destroy(RandomData $randomData)
    {
    }
}
