<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'TypeName',
        'TypeDescription',
        'TypeIcon',
        'TypeColor',
        'TypeSlug',
        'TypeStatus',
        'TypeVisibility',
        'TypeOrder',
    ];

    protected $table = 'content_types';
    protected $primaryKey = 'id';
}
