<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_request extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="room_requests";
    protected $primaryKey="request_id";
}
