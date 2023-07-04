<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckOutModel extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;
    protected $table = 'tbl_customer';
    public $timestamps = true;
    protected $primaryKey = 'customer_id';
    protected $fillable = ['customer_id','customer_name','customer_email','customer_password','customer_phone'];
}
