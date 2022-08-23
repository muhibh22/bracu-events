<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="participants";
    protected $primaryKey="perticipant";
}
