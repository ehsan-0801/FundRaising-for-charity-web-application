<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarChart extends Model{

    public $label = "";
    public $y = null;

    function __construct($label, $y) {
        $this->label = $label;
        $this->y = $y;
    }
}
