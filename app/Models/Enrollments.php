<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollments extends Model
{
    use HasFactory;
    protected $fillable = ["enrollmentid","semester","state","userid","programid"];
}
