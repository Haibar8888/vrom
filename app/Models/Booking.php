<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'bookings';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'name',
        'item_id',
        'user_id',
        'start_date',
        'end_date',
        'address',
        'city',
        'zip',
        'price',
        'status',
        'payment_method',
        'payment_status',
        'payment_url',
        'total_price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
