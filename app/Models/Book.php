<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['title', 'author', 'ISBN', 'publisher', 'edition', 'category_id', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
