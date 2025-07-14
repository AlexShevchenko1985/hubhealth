<?php
namespace App\Manager;

use App\Base\AbstractManager;
use App\Setup\Assets;
use App\Setup\DisableEmojis;
use App\Setup\ImageSizes;
use App\Setup\ThemeSetup;

class SetupManager extends AbstractManager
{
	/**
	 * @return void
	 */
	public function execute(): void
	{
		$this->items = [
			ThemeSetup::class,
			DisableEmojis::class,
			ImageSizes::class,
            Assets::class
		];

		$this->register();
	}
}