<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banan extends Model
{
    protected $table = 'banans';
    protected $primaryKey = 'MABAN';
    protected $fillable = ['MABAN', 'SOBAN', 'TRANGTHAI', 'SONGUOI'];

    public function getMABAN() {
        return $this
        ->attributes['MABAN'];
        }
    public function setMABAN($MABAN) {
        $this
        ->attributes['MABAN'] = $MABAN;
        }

    // Getter và setter cho cột SOBAN
    public function getSOBAN() {
        return $this
        ->attributes['SOBAN'];
        }
    public function setSOBAN($SOBAN) {
        $this
        ->attributes['SOBAN'] = $SOBAN;
        }

    // Getter và setter cho cột TRANGTHAI
    public function getTRANGTHAI() {
        return $this
        ->attributes['TRANGTHAI'];
        }
    public function setTRANGTHAI($TRANGTHAI) {
        $this
        ->attributes['TRANGTHAI'] = $TRANGTHAI;
        }

    // Getter và setter cho cột NGVL
    public function getSONGUOI() {
        return $this
        ->attributes['SONGUOI'];
        }
    public function setSONGUOI($SONGUOI) {
        $this
        ->attributes['SONGUOI'] = $SONGUOI;
        }


}
