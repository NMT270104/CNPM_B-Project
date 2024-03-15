<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nguyenlieu extends Model
{
    protected $table = 'nguyenlieus';
    protected $primaryKey = 'MANL';
    protected $fillable = ['MANL', 'TENNL', 'DVT', 'LOAI', 'MOTA', 'GIA'];

    public function getMANLAttribute($value)
    {
        return strtoupper($value);
    }

    public function setMANLAttribute($value)
    {
        $this->attributes['MANL'] = strtolower($value);
    }

    public function getTENNLAttribute($value)
    {
        return strtoupper($value);
    }

    public function setTENNLAttribute($value)
    {
        $this->attributes['TENNL'] = strtolower($value);
    }

    public function getDVTAttribute($value)
    {
        return strtoupper($value);
    }

    public function setDVTAttribute($value)
    {
        $this->attributes['DVT'] = strtolower($value);
    }

    public function getMOTAAttribute($value)
    {
        return strtoupper($value);
    }

    public function setMOTAAttribute($value)
    {
        $this->attributes['MOTA'] = strtolower($value);
    }

    public function getLOAIAttribute($value)
    {
        return strtoupper($value);
    }

    public function setLOAIAttribute($value)
    {
        $this->attributes['LOAI'] = strtolower($value);
    }

    public function congthucs()
    {
        return $this->hasMany('App\Congthuc', 'MANL', 'MANL');
    }
}
