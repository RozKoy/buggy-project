<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuggyPackage extends Model
{
    use HasUuids, SoftDeletes;
    protected $table = 'buggy_packages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'image',
        'spec',
        'description',
        'type',
        'price',
    ];
}
