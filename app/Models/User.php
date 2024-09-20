<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'created_by');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class, 'created_by');
    }

    public function yachts()
    {
        return $this->hasMany(Yacht::class, 'created_by');
    }

    public function carRentals()
    {
        return $this->hasMany(CarRental::class, 'created_by');
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class, 'created_by');
    }

    public function thingsToDo()
    {
        return $this->hasMany(ThingsToDo::class, 'created_by');
    }
}
