<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    // Table Name
    protected $table = 'quotes';
    // Primary Key
    public $primaryKey = 'id';
}
