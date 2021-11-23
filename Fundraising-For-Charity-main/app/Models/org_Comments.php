<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class org_Comments extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'commentId';
    public $timestamps = false;
}
