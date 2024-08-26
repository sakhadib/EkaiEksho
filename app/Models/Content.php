<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_type_id',
        'ContentTitle',
        'ContentDescription',
        'Content_link',
        'isApproved',
        'created_by',
        'FieldID',
    ];

    public function content_type()
    {
        return $this->belongsTo(ContentType::class);
    }

    public function contributor()
    {
        return $this->belongsTo(Contributor::class, 'created_by');
    }

    public function field()
    {
        return $this->belongsTo(ContentField::class, 'FieldID');
    }

    protected $table = 'contents';
    protected $primaryKey = 'id';
}
