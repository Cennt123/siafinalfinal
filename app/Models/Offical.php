<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Offical extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'position',
        'name',
        'description',
        'email',
        'phone_number',
    ];


}

