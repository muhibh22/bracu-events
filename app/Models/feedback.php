<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="feedback";
    protected $primaryKey="feedback_id";
}
