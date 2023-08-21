<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasUuids;

    protected $table = "projects";
    protected $primaryKey = "id";
    protected $guarded = ['created_at', "updated_at"];

    // Handle UUID
    protected $keyType = 'string';
    public $incrementing = false;
}
