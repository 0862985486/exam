<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trasaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 't_id';
    protected $fillable = ['t_id','bank_id','transaction','channel','amount',];
}
