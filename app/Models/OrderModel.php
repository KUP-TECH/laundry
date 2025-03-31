<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'order_id';

    public $timestamps = false;
    protected $fillable = [
        'name',
        'contactno',
        'weight',
        'payable',
        'status',
        'order_date',
    ];
}
