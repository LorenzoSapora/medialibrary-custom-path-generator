<?php
namespace Terminalsio\MedialibraryCustomPathGenerator;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

class CustomPathGenerator
{
    public function getPath(Media $media) : string
    {
        return $media->collection_name.'/';
    }
    public function getPathForConversions(Media $media) : string
    {
        return $this->getPath($media).'c/';
    }
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'/cri/';
    }
}
