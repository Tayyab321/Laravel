<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortCart extends Model
{
    use HasFactory;
    protected $connection = 'mysql_second';
    protected $table = 'cart';
    protected $primaryKey = 'Cart_id';
}
