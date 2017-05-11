<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job';

    protected $fillable = [
        'id_perusahaan', 
        'judul', 
        'bidang',
        'gaji_mulai',
        'gaji_sampai',
        'level',
        'lokasi',
        'keterangan',
    ];
}
