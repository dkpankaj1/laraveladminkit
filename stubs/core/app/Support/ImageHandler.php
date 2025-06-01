<?php

namespace App\Support;

use Spatie\Image\Image;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class ImageHandler
{
    protected $folder;
    protected $folderName;

    public function __construct(string $folderName)
    {
        $this->folderName = $folderName;
        $this->folder = public_path('upload/' . $folderName);
    }

    public function upload(UploadedFile $file, ?int $width = null, ?int $height = null): ?string
    {
        if (!$file->isValid()) {
            return null;
        }

        try {
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $path = 'upload/' . $this->folderName . '/' . $filename;
            $fullPath = public_path($path);

            $imageManager = Image::useImageDriver('gd');

            $file->move($this->folder, $filename);

            $image = $imageManager->loadFile($fullPath);

            if ($height !== null) {
                $image->height($height);
            }

            if ($width !== null) {
                $image->width($width);
            }

            $image->save();

            return $path;
        } catch (\Exception) {
            return null;
        }
    }

    public function delete(string $path): bool
    {
        $fullPath = public_path($path);
        return file_exists($fullPath) && unlink($fullPath);
    }
}