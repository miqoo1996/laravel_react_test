<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementItem extends Model
{
    use HasFactory;

    protected $visible = [
        'name', 'status'
    ];

    protected $fillable = [
        'name', 'status'
    ];
}
