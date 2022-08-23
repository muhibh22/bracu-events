<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oca extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="oca";
    protected $primaryKey="oca_mail";
}
