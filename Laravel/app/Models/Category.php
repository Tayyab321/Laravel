<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'Category';
    protected $primaryKey = 'Cid';

    public function setCatNameAttribute($value){
        $this->attributes['cat_Name'] = ucwords($value);
    }

    public function getUpdatedAtAttribute($value){
        $res = date("d-M-Y",strtotime($value));
        return $res;
    }

}
