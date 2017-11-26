<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Residencia extends Eloquent
{
    protected $collection = 'residencia';
}
