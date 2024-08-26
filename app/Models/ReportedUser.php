<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedUser extends Model
{
    use HasFactory;

    protected $fillable = ['reporter_id', 'reported_id', 'reason', 'description', 'is_resolved'];

    protected $table = 'reported_users';
    protected $primaryKey = 'id';
}
