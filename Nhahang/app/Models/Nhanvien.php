<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    protected $table = 'nhanviens';
    protected $primaryKey = 'MANV';
    protected $fillable = ['MANV', 'NHOM_ID', 'HOTEN', 'SDT', 'NGVL', 'MATKHAU', 'CHUCVU'];

    // Getter và setter cho cột NHOM_ID
    public function getNhomIdAttribute($value)
    {
        return strtoupper($value);
    }

    public function setNhomIdAttribute($value)
    {
        $this->attributes['NHOM_ID'] = strtolower($value);
    }

    // Getter và setter cho cột HOTEN
    public function getHotenAttribute($value)
    {
        return ucfirst($value); // Chuyển đổi giá trị HOTEN thành chữ in hoa cho mỗi từ
    }

    public function setHotenAttribute($value)
    {
        $this->attributes['HOTEN'] = strtolower($value); // Chuyển đổi giá trị HOTEN thành chữ in thường trước khi lưu vào cơ sở dữ liệu
    }

    // Getter và setter cho cột SDT
    public function getSdtAttribute($value)
    {
        return preg_replace('/[^0-9]/', '', $value); // Loại bỏ các ký tự không phải số trong SDT
    }

    public function setSdtAttribute($value)
    {
        $this->attributes['SDT'] = $value; // Không cần chuyển đổi giá trị SDT trước khi lưu vào cơ sở dữ liệu
    }

    // Getter và setter cho cột NGVL
    public function getNgvlAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value)); // Chuyển đổi giá trị NGVL thành định dạng ngày giờ
    }

    public function setNgvlAttribute($value)
    {
        $this->attributes['NGVL'] = $value; // Không cần chuyển đổi giá trị NGVL trước khi lưu vào cơ sở dữ liệu
    }

    // Getter và setter cho cột MATKHAU (mã hóa mật khẩu trước khi lưu)
    public function getMatkhauAttribute($value)
    {
        return bcrypt($value); // Mã hóa mật khẩu trước khi trả về
    }

    public function setMatkhauAttribute($value)
    {
        $this->attributes['MATKHAU'] = bcrypt($value); // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
    }

    public function getChucvuAttribute($value)
    {
        return ucfirst($value); // Chuyển đổi giá trị CHUCVU thành chữ in hoa cho chữ cái đầu tiên
    }

    public function setChucvuAttribute($value)
    {
        $this->attributes['CHUCVU'] = strtolower($value); // Chuyển đổi giá trị CHUCVU thành chữ in thường trước khi lưu vào cơ sở dữ liệu
    }
}
// Lấy tất cả nhân viên và thông tin nhóm quyền của họ
$nhanviens = Nhanvien::with('nhomquyen')->get();

// Lấy thông tin nhóm quyền của một nhân viên cụ thể
$nhanvien = Nhanvien::find(1);
$nhomquyen = $nhanvien->nhomquyen;
