<?php
namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Modules\Cloud\Storage\Contracts\StorageRepositoryContract;
use Plenty\Modules\Core\Data\Factories\LazyLoaderFactory;
use Plenty\Modules\Order\Models\OrderItem;
use Plenty\Modules\Order\Models\OrderItemOrderProperty;
use Plenty\Modules\Order\Models\OrderItemType;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;
use Plenty\Modules\Property\V2\Models\Property;
use Plenty\Modules\Webshop\Contracts\LocalizationRepositoryContract;

/**
 * Service for mapping between variation order properties and old properties
 */
abstract class VariationPropertyConverter 
{

	abstract public function convertOrderProperties(
		array $document
	):array;

	abstract public function convertVariationPropertyOrderItems(
		 $orderItems
	);

}