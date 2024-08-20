<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisitModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "visits";
    protected $fillable = [
        "name",
        "email",
        "latitude",
        "longitude",
    ];

    protected $hidden =[
        "deleted_at"
    ];
}
