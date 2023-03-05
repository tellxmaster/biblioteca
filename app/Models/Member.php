<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = ['name', 'email', 'address', 'phone', 'membership_number', 'membership_start_date', 'membership_expiry_date'];

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
