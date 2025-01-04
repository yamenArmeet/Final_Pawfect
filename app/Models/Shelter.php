<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    /** @use HasFactory<\Database\Factories\ShelterFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
    public function donations()
    {
        return $this->hasMany(Donation::class,);
    }
}
