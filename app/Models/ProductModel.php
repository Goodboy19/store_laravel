<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tbl_product';
    public $timestamps = true;
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_id','brand_id','product_name','category_id','product_desc','product_status','product_image'];
}
