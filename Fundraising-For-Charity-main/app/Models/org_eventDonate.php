<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class org_eventDonate extends Model
{
    protected $table = 'eventdonations';
    protected $primaryKey = 'eventDonationId';
    public $timestamps = false;
}
