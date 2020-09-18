<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded = [];

    // 'id' => $this->faker->randomDigit,
    //         'type' => $this->faker->realText(20),
    //         'size' => $this->faker->word,
    //         'price' => $this->faker->randomFloat
}
