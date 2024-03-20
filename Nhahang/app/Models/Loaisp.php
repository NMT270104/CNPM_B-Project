<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaisp extends Model
{
    protected $table = 'loaisps';
    protected $primaryKey = 'MALOAISP';
    protected $fillable = ['MALOAISP', 'TENLOAISP'];

    // Getter và setter cho cột MASP
    public function getMALOAISP() {
        return $this
        ->attributes['MALOAISP'];
        }
    public function setMALOAISP($MALOAISP) {
        $this
        ->attributes['MALOAISP'] = $MALOAISP;
        }

    // Getter và setter cho cột TENLOAISP
    public function getTENLOAISP() {
        return $this
        ->attributes['TENLOAISP'];
        }
    public function setTENLOAISP($TENLOAISP) {
        $this
        ->attributes['TENLOAISP'] = $TENLOAISP;
        }


    //QUAN HỆ 1 NHIỀU VỚI BẢN SAN PHẨM
    public function sanphams()
    {
        return $this->hasMany(Sanpham::class, 'MALOAISP', 'MALOAISP');
    }
}
