<?php
namespace App\Setup;

use App\Base\TaskInterface;

class ImageSizes implements TaskInterface
{
	/**
	 * @return void
	 */
	public function do(): void
	{
        # Example of image sizes:
        add_image_size('hd-size', 1920, 1080, ['center', 'center']);

        //register MimeTypes
        add_filter('upload_mimes', [$this, 'registerMimeTypes']);
	}

    public function registerMimeTypes($mimes): array
    {
        $mimes['svg'] = 'image/svg+xml';

        return $mimes;
    }
}