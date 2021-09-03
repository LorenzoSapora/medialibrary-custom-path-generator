<?php
namespace Terminalsio\MedialibraryCustomPathGenerator;

use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media) : string
    {
        return $media->collection_name.'/';
    }
    public function getPathForConversions(Media $media) : string
    {
        return $this->getPath($media).'conversions/';
    }
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'/responsive-images/';
    }
    protected function getBasePath(Media $media): string
    {
        return $media->getKey();
    }

}
