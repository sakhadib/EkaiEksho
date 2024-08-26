<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentField extends Model
{
    use HasFactory;

    protected $fillable = [
        'FieldName',
        'FieldDescription',
        'FieldType',
        'FieldIcon',
        'FieldColor',
        'FieldSlug',
        'FieldStatus',
        'FieldVisibility',
        'FieldOrder',
    ];

    protected $table = 'content_fields';
    protected $primaryKey = 'id';
}
