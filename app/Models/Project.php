<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['types_id', 'title', 'content', 'slug', 'image', 'language'];

    public function types()
    {
        return $this->belongsTo(Types::class);
    }
}
