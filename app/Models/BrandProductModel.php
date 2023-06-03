<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandProductModel extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'tbl_brand_product';
    public $timestamps = true;
    protected $primaryKey = 'brand_id';
    protected $fillable = ['brand_name', 'brand_desc','brand_status'];
}
