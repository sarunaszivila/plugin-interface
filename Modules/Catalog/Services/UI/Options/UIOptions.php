<?php
namespace Plenty\Modules\Catalog\Services\UI\Options;

use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Services\UI\Options\Validators\OptionValidator;
use stdClass;

/**
 * UI Options container
 */
abstract class UIOptions 
{

	abstract public function add(
	);

	abstract public function toArray(
	);

}