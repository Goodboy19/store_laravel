<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CategoryProductModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_category';
    public $timestamps = true;
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name', 'category_desc','category_status'];

}

