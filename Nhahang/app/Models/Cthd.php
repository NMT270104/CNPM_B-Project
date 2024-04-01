<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cthd extends Model
{
    protected $primaryKey = 'SOHD';
    protected $fillable = ['SOHD','MASP','SL','THANHTIEN'];

    public function getSOHD(){
        return $this
        ->attributes['SOHD'];
    }

    public function setSOHD($SOHD){
        $this->attributes['SOHD'] = $SOHD;
    }

    public function getMASP(){
        return $this
        ->attributes['MASP'];
    }

    public function setMASP($MASP){
        $this->attributes['MASP'] = $MASP;
    }

    public function getSL(){
        return $this
        ->attributes['SL'];
    }

    public function setSL($SL){
        $this->attributes['SL'] = $SL;
    }

    public function nhanvien()
    {
        return $this->belongsTo(Nhanvien::class, 'MANV', 'MANV');
    }

}
