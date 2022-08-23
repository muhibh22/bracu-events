<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="rooms";
    protected $primaryKey="room_name";
    public $incrementing = false;
}
