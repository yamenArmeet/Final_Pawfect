<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    /** @use HasFactory<\Database\Factories\DonationFactory> */
    use HasFactory;

    protected $fillable = [
        'amounet',
        'user_id',
        'shelter_id',
    ];



    public function Donation_by()
    {
        return $this->belongsTo(User::class);
    }
    public function shelters()
    {
        return $this->belongsTo(Shelter::class);
    }
}
