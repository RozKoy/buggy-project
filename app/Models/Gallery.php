<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasUuids, SoftDeletes;
    protected $table = 'galleries';
    protected $primaryKey = 'id';
    protected $fillable = [        
        'image',
    ];
}
