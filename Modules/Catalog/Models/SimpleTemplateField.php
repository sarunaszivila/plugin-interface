<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * A simple template field is used to fill a specific key through a data source which is defined by the user.
 */
abstract class SimpleTemplateField 
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