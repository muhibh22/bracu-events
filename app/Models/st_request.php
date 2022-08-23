<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st_request extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="st_requests";
    protected $primaryKey="st_id";
}
