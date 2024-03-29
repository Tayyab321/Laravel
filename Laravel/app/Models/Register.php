<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql_second';
    protected $primaryKey = 'user_id';
    protected $table = 'user_reg';
}
