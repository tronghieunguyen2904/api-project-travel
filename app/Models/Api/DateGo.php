<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Api\Tour;
use App\Models\Api\Order;

class DateGo extends Model
{
    use HasFactory;
    protected $table = 'date_go';//nếu tên table là books -> không cần
    protected $primaryKey ='id';//Nếu khóa là id -> không cần
    // protected $keyType = 'string';//kiểu khóa chính int -> không cần
    public $incrementing = false;//Khóa chính tự động tăng -> kg cần
    public $timestamps = false;//Nếu có 2 cột: created_at, updated_at-> kg cần

    protected $fillable = [
        'id',
        'id_tour',
        'date',
        'month',
        'id_guide',
        'seats',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class,"id_tour","id_tour");
    }
    public function order()
    {
        return $this->hasMany(Order::class,"id_date","id");
    }
}
