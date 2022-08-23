<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="images";
    protected $primaryKey="image_id";
}
