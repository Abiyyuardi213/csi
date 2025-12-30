<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Employee extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'nik',
        'name',
        'position',
        'department',
        'phone',
        'date_of_birth',
        'join_date',
        'is_active',
        'user_id',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'join_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
