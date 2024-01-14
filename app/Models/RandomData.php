<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class RandomData extends Model
{
    use HasFactory;
    private string $api = 'https://random-data-api.com/api/v2/users?size=100';
    public function getDados() : array{
        $response = Http::get($this->api);
        $dados = json_decode($response);
        return $dados;
    }


}
