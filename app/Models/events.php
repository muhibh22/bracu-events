<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="events";
    protected $primaryKey="event_id";
}
