<?php
namespace Plenty\Modules\Catalog\Services\Collections;


/**
 * LazyCollection wrapper with limited access. Only specific methods are allowed.
 */
abstract class CatalogLazyCollection 
{

	const MAX_CHUNK_SIZE = 500;

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}