<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Work extends Model
{
    use HasFactory;

    const image_path = 'public/images/works';

    protected $guarded = ['id'];

    public function getImageAttribute()
    {
        return Storage::url($this->image_path);
    }
}
