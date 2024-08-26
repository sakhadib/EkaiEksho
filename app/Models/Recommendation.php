<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = ['contributor_id', 'content_id', 'is_recommended'];

    protected $table = 'recommendations';
    protected $primaryKey = 'id';
}
