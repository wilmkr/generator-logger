<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OilMaintenance extends Model
{
    use HasFactory;

    /**
     * Get the generator that the oil maintenance is for
     */
    public function generator()
    {
        $this->belongsTo(Generator::class);
    }
}
