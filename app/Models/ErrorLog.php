<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    protected $table = 'errorlog';
    protected $fillable = ['id', 'functionName','message','createdBy','createdDate','createdTime'];

}
