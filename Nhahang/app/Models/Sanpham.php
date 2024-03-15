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
    public function getMaSpAttribute($value)
    {
        return strtoupper($value);
    }

    public function setMaSpAttribute($value)
    {
        $this->attributes['MASP'] = strtolower($value);
    }
    


    public function loaisp()
    {
        return $this->belongsTo('App\Models\Loaisp', 'MALOAISP', 'MALOAISP');
    }

    public function congthucs()
    {
        return $this->hasMany('App\Models\Congthuc', 'MASP', 'MASP');
    }
}
