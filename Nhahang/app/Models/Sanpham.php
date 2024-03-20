<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table = 'sanphams';
    protected $primaryKey = 'MASP';
    protected $fillable = ['MASP', 'TENSP', 'MALOAISP', 'DVT', 'GIA', 'MOTA', 'IMAGE'];

    // Getter và setter cho cột MASP
    public function getMASP() {
        return $this
        ->attributes['MASP'];
        }
    public function setMASP($MASP) {
        $this
        ->attributes['MASP'] = $MASP;
        }

    // Getter và setter cho cột TENSP
    public function getTENSP() {
        return $this
        ->attributes['TENSP'];
        }
    public function setTENSP($TENSP) {
        $this
        ->attributes['TENSP'] = $TENSP;
        }

    // Getter và setter cho cột MALOAISP
    public function getMALOAISP() {
        return $this
        ->attributes['MALOAISP'];
        }
    public function setMALOAISP($MALOAISP) {
        $this
        ->attributes['MALOAISP'] = $MALOAISP;
        }


    public function getDVT() {
        return $this
        ->attributes['DVT'];
        }
    public function setDVT($DVT) {
        $this
        ->attributes['DVT'] = $DVT;
        }

    public function getGIA() {
        return $this
        ->attributes['GIA'];
        }
    public function setGIA($GIA) {
        $this
        ->attributes['GIA'] = $GIA;
        }
    
    public function getMOTA() {
        return $this
        ->attributes['MOTA'];
        }
    public function setMOTA($MOTA) {
        $this
        ->attributes['MOTA'] = $MOTA;
        }
    
    public function getImage() {
        return $this
        ->attributes['IMAGE'];
        }
    public function setImage($IMAGE) {
        $this
        ->attributes['IMAGE'] = $IMAGE;
        }
}
