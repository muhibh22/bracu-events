<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clubs extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="clubs";
    protected $primaryKey="code";
}
