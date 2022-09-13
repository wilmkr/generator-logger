<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunningLog extends Model
{
    use HasFactory;

    /**
     * Get the generator that the running log is for
     */
    public function generator()
    {
        $this->belongsTo(Generator::class);
    }
}
