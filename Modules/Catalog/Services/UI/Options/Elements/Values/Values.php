<?php
namespace Plenty\Modules\Catalog\Services\UI\Options\Elements\Values;

use Plenty\Modules\Catalog\Contracts\UI\UIValueContract;
use Plenty\Modules\Catalog\Contracts\UI\UIValuesContract;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\Values\Validators\ValueValidator;

/**
 * UI Option values container
 */
abstract class Values 
{

	abstract public function add(
		 $value
	);

	abstract public function toArray(
	);

}