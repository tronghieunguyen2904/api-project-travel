<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Api\Tour;

class Location extends Model
{
    use HasFactory;
    protected $table = 'location';//nếu tên table là books -> không cần
    protected $primaryKey ='id_location';//Nếu khóa là id -> không cần
    protected $keyType = 'string';//kiểu khóa chính int -> không cần
    public $incrementing = false;//Khóa chính tự động tăng -> kg cần
    public $timestamps = false;//Nếu có 2 cột: created_at, updated_at-> kg cần


    
}
