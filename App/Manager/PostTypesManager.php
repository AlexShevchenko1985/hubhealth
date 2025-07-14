<?php
namespace App\Manager;

use App\Base\AbstractManager;
use App\CustomPostTypes\Career;
use App\CustomPostTypes\Review;
use App\CustomPostTypes\Team;

class PostTypesManager extends AbstractManager
{

	/**
	 * @return void
	 */
	public function execute(): void
	{
		$this->items = [
//			Team::class,
//            Career::class,
//            Review::class,
		];

		add_action('init', [$this, 'register']);
	}
}