<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class org_users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    public $timestamps = false;
}
