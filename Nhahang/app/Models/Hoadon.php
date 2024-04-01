<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    protected $primaryKey = 'SOHD';
    protected $fillable = ['SOHD','NGHD','MANV','MABAN','TRIGIA'];

    public function getSOHD(){
        return $this
        ->attributes['SOHD'];
    }

    public function setSOHD($SOHD){
        $this->attributes['SOHD'] = $SOHD;
    }

    public function getNGHD(){
        return $this
        ->attributes['NGHD'];
    }

    public function setNGHD($NGHD){
        $this->attributes['NGHD'] = $NGHD;
    }

    public function getMANV(){
        return $this
        ->attributes['MANV'];
    }
    public function setMANV($MANV){
        $this->attributes['MANV'] = $MANV;
    }

    public function getMABAN(){
        return $this
        ->attributes['MABAN'];
    }

    public function setMABAN($MABAN){
        $this->attributes['MABAN'] = $MABAN;
    }

    public function getTRIGIA(){
        return $this
        ->attributes['TRIGIA'];
    }

    public function setTRIGIA($TRIGIA){
        return $this->attributes['TRIGIA'] = $TRIGIA;
    }


}
