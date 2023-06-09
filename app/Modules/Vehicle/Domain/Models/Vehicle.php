<?php

namespace App\Modules\Vehicle\Domain\Models;

use App\Modules\Part\Domain\Models\Part;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['name', 'manufacturer', 'year'];

    // Define relationships here, such as parts() for the one-to-many relationship with parts.

    public function parts() {
        return $this->hasMany(Part::class);
    }
}
