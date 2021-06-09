<?php
namespace Plenty\Modules\Catalog\Models\Filters;


/**
 * A catalog UI filter selection value represents an available filter option in the UI.
 */
abstract class CatalogUiFilterSelectionValue 
{

	abstract public function getCaption(
	):string;

	abstract public function getValue(
	);

}