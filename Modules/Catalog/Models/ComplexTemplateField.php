<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * A complex template field is used for Mappings with predefined valid values. The user has to choose a valid value and then provide a condition, which determines in which cases this value will be sent.
 */
abstract class ComplexTemplateField 
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