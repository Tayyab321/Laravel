<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortCategory extends Model
{
    use HasFactory;
    protected $connection = 'mysql_second';
    protected $table = 'categories';
    protected $primaryKey = 'Cid';
}
