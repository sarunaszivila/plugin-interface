<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * A CatalogMappingValue represents a single available option in the catalog UI.
 */
abstract class CatalogMappingValue 
{

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}