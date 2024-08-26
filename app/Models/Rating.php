<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['contributor_id', 'content_id', 'rating'];

    protected $table = 'ratings';
    protected $primaryKey = 'id';
}
