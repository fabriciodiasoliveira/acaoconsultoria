<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RandomData extends Model
{
    use HasFactory;
    private string $randomData = 'https://random-data-api.com/api/v2/users?size=100';
    public function getRandomData(): string {
        return $this->randomData;
    }


}
