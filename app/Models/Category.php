<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ "name","slug","description","parent_id","created_at","updated_at","deleted_at" ];
}
