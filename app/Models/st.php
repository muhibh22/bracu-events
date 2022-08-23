<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="st";
    protected $primaryKey="type";
    public $incrementing = false;
}
