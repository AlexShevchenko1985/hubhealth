<?php
namespace App\Manager;

use App\Base\AbstractManager;
use App\Acf\ThemeOptionPage;

class AcfManager extends AbstractManager
{
	/**
	 * @return void
	 */
	public function execute(): void
	{
		$this->items = [
            ThemeOptionPage::class,
		];

		add_action('acf/init', [$this, 'register']);
	}
}
