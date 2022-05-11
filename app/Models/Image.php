<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected static function getPathOfImage($filename = null, $user_id = null)
    {
        $patch = null;
        if(null != $user_id) {
            $patch = $user_id . '/';
        }

        return 'uploads/'. $patch . $filename;
    }

    public function getUrlAttribute()
    {
        

        return Asset($this->getPathOfImage($this->hash, $this->user_id));
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
