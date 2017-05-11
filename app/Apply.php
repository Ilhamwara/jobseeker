<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'apply';

    protected $fillable = [
        'id_perusahaan', 
        'id_job', 
        'id_user',
        'cv',
    ];
}
