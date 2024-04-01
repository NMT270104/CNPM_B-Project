<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    protected $primaryKey = 'MANV';
    protected $fillable = ['MANV', 'NHOM_ID', 'HOTEN', 'SDT', 'NGVL', 'MATKHAU', 'CHUCVU'];
    public function getMANV() {
        return $this
        ->attributes['MANV'];
        }
    public function setMANV($MANV) {
        $this
        ->attributes['MANV'] = $MANV;
        }

    // Getter và setter cho cột HOTEN
    public function getHOTEN() {
        return $this
        ->attributes['HOTEN'];
        }
    public function setHOTEN($HOTEN) {
        $this
        ->attributes['HOTEN'] = $HOTEN;
        }

    // Getter và setter cho cột SDT
    public function getSDT() {
        return $this
        ->attributes['SDT'];
        }
    public function setSDT($SDT) {
        $this
        ->attributes['SDT'] = $SDT;
        }

    // Getter và setter cho cột NGVL
    public function getCreatedAt() {
        return $this
        ->attributes['created_at'];
        }
    public function setCreatedAt($createdAt) {
        $this
        ->attributes['created_at'] = $createdAt;
        }

    public function getCHUCVU() {
        return $this
        ->attributes['CHUCVU'];
        }
    public function setCHUCVU($CHUCVU) {
        $this
        ->attributes['CHUCVU'] = $CHUCVU;
        }
}

