<?php
namespace App\Manager;

use App\Base\AbstractManager;
use App\CustomPostTypes\Treatment;


class PostTypesManager extends AbstractManager
{

	/**
	 * @return void
	 */
	public function execute(): void
	{
		$this->items = [
            Treatment::class,
		];

		add_action('init', [$this, 'register']);
	}
}