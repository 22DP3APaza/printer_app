<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ink extends Model
{
    use HasFactory;

    protected $table = 'Inks';

    protected $fillable = [
        "Colour",
        "Volume",
        "Empty"

    ];
}
