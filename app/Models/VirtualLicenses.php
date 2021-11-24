<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualLicenses extends Model
{
    use HasFactory;
    protected $fillable = ["name", "lastName", "document", "program", "photo"];
}
