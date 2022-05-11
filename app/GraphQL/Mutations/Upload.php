<?php

namespace App\GraphQL\Mutations;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class Upload
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
         /** @var \Illuminate\Http\UploadedFile $file */
         $file = $args['file'];

         Storage::put(Image::getPathOfImage(null, null, $file));

         $image = new Image();
         $image->name = $file->getFilename();
         $image->hash = $file->hashName();

         $image->save();

         return $image;
    }
}
