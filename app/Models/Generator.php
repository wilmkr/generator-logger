<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generator extends Model
{
    use HasFactory;

    /**
     * Get the oil change reccommendation for the generator
     */
    public function oilChangeRecommendation()
    {
        return $this->hasOne(OilChangeRecommendation::class);
    }

    /**
     * Get the oil maintance records for the generator
     */
    public function oilMaintenence()
    {
        $this->hasMany(OilMaintenance::class);
    }

    /**
     * Get the running logs for the generator
     */
    public function runningLogs()
    {
        $this->hasMany(RunningLog::class);
    }

    /**
     * Get the most recent oil maintenance performed
     */
    public function latestOilMaintenance()
    {
        $this->hasMany(OilMaintenance::class)->latestOfMany();
    }
}
