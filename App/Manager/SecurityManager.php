<?php
namespace App\Manager;

use App\Base\AbstractManager;
use App\Security\Security;

class SecurityManager extends AbstractManager
{
	/**
	 * @return void
	 */
	public function execute(): void
	{
		$this->items = [
			Security::class,
		];

		$this->register();
	}
}