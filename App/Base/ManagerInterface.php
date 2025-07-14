<?php
namespace App\Base;

interface ManagerInterface
{
	/**
	 * @return void
	 */
	public function execute(): void;

	/**
	 * @return void
	 */
	public function register(): void;
}