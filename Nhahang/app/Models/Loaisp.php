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
    public function getMALOAISPAttribute($value)
    {
        return strtoupper($value);
    }

    public function setMALOAISPAttribute($value)
    {
        $this->attributes['MASP'] = strtolower($value);
    }

    public function getTENLOAISPAttribute($value)
    {
        return strtoupper($value);
    }

    public function setTENLOAISPAttribute($value)
    {
        $this->attributes['TENLOAISP'] = strtolower($value);
    }
    

    public function sanphams()
    {
        return $this->hasMany('App\Sanpham', 'MALOAISP', 'MALOAISP');
    }
}
