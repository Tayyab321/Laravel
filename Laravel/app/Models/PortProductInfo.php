<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortProductInfo extends Model
{
    use HasFactory;
    protected $connection = 'mysql_second';
    protected $table = 'product_info';
    protected $primaryKey = 'ProdInfo_Id';
}
