<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employees';
    protected $fillable=['emp_id','firstname','lastname','education','position','salary',
    'contact_number'];

}
