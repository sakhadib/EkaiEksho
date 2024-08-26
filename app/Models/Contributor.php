<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'name',
        'password',
        'bio',
        'avatar',
        'location',
        'institute',
        'website',
        'twitter',
        'facebook',
        'linkedin',
        'github',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $table = 'contributors';
    protected $primaryKey = 'id';

}
