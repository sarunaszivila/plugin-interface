<?php
namespace Plenty\Modules\Catalog\Services\UI\Assignments;

use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Services\UI\Options\UIOptions;

/**
 * Assignments container
 */
abstract class Assignments 
{

	abstract public function add(
	);

	abstract public function toArray(
	);

}