<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeriesContent extends Model
{
    use HasFactory;

    protected $fillable = ['series_id', 'content_id', 'order'];

    protected $table = 'series_contents';
    protected $primaryKey = 'id';
}
