<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'phone_number',
        'email',
        'street',
        'address_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address() {
        return $this->belongsTo(Address::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function categoryfilters() {
        return $this->belongsToMany(CategoryFilter::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function openinghours() {
        return $this->hasMany(OpeningHour::class);
    }
}
