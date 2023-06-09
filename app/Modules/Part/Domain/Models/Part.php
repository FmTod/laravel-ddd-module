<?php


namespace App\Modules\Part\Domain\Models;

use App\Modules\Vehicle\Domain\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = ['name', 'price', 'vehicle_id', 'description'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
