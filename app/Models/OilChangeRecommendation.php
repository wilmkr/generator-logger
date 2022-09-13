<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OilChangeRecommendation extends Model
{
    use HasFactory;

    /**
     * Get the generator that the oil change recommendation is for
     */
    public function generator()
    {
        $this->belongsTo(Generator::class);
    }
}
