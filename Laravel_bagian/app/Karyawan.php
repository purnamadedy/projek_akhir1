<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'jabatan_id','id');
    }

    public function status(){
        return $this->belongsTo(Status::class, 'status_id','id');
    }

    public function pendidikan(){
        return $this->belongsTo(Pendidikan::class, 'pendidikan_id','id');
    }

}

