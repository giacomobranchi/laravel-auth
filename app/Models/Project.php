<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;


class project extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'cover_image', 'content'];

    // CHECK IF ALREADY EXISTS WHEN ADDING ENTRIES
    public function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
