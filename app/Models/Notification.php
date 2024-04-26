<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Notification extends Model
{
    use HasFactory;

    const FILE_PATH = "public/files/notifications";

    protected $table = 'notifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'user_id'
    ];

    public function getFileAttribute()
    {
        return Storage::url($this->file_path);
    }
}