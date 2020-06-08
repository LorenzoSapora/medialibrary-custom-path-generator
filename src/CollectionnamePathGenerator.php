<?php
namespace Terminalsio\MedialibraryCustomPathGenerator;

use Spatie\MediaLibrary\Support\PathGenerator;
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
// <?php

// namespace Spatie\MediaLibrary\Support\PathGenerator;

// use Spatie\MediaLibrary\MediaCollections\Models\Media;

// class DefaultPathGenerator implements PathGenerator
// {
//     /*
//      * Get the path for the given media, relative to the root storage path.
//      */
//     public function getPath(Media $media): string
//     {
//         return $this->getBasePath($media).'/';
//     }

//     /*
//      * Get the path for conversions of the given media, relative to the root storage path.
//      */
//     public function getPathForConversions(Media $media): string
//     {
//         return $this->getBasePath($media).'/conversions/';
//     }

//     /*
//      * Get the path for responsive images of the given media, relative to the root storage path.
//      */
//     public function getPathForResponsiveImages(Media $media): string
//     {
//         return $this->getBasePath($media).'/responsive-images/';
//     }

//     /*
//      * Get a unique base path for the given media.
//      */
//     protected function getBasePath(Media $media): string
//     {
//         return $media->getKey();
//     }
// }
