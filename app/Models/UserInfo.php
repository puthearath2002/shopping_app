<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable =[
        'costomer_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
    ];
}
