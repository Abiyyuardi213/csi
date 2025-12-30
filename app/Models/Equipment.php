<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Equipment extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'unit_code',
        'model',
        'type',
        'capacity',
        'status',
        'serial_number',
    ];
}
