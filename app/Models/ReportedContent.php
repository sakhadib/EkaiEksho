<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedContent extends Model
{
    use HasFactory;

    protected $fillable = ['contributor_id', 'content_id', 'reason', 'description', 'is_resolved'];

    protected $table = 'reported_contents';
    protected $primaryKey = 'id';
}
