<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nguyenlieu extends Model
{
    protected $table = 'nguyenlieus';
    protected $primaryKey = 'MANL';
    protected $fillable = ['MANL', 'TENNL', 'DVT', 'LOAI', 'MOTA', 'GIA'];

    public function getMANL() {
        return $this
        ->attributes['MANL'];
        }
    public function setMANL($MANL) {
        $this
        ->attributes['MANL'] = $MANL;
        }

    // Getter và setter cho cột TENNL
    public function getTENNL() {
        return $this
        ->attributes['TENNL'];
        }
    public function setTENNL($TENNL) {
        $this
        ->attributes['TENNL'] = $TENNL;
        }

    // Getter và setter cho cột DVT
    public function getDVT() {
        return $this
        ->attributes['DVT'];
        }
    public function setDVT($DVT) {
        $this
        ->attributes['DVT'] = $DVT;
        }

    // Getter và setter cho cột NGVL
    public function getLOAI() {
        return $this
        ->attributes['LOAI'];
        }
    public function setLOAI($LOAI) {
        $this
        ->attributes['LOAI'] = $LOAI;
        }

    public function getMOTA() {
        return $this
        ->attributes['MOTA'];
        }
    public function setMOTA($MOTA) {
        $this
        ->attributes['MOTA'] = $MOTA;
        }
    public function getGIA() {
        return $this
        ->attributes['GIA'];
        }
    public function setGIA($GIA) {
        $this
        ->attributes['GIA'] = $GIA;
        }
}
