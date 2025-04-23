<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestApiModel extends Model
{
    protected $table="_rest_api";
    protected $primarykey="id";
    protected $fillbale=["name", "email", "age"];
}
