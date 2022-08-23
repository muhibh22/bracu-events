<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="admins";
    protected $primaryKey="email";
}
