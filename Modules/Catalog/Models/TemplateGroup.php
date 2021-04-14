<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * A TemplateGroup represents a portlet in the catalog UI. Each container field will be displayed in the same portlet. The order of the fields depends on the order they were added into the group.
 */
abstract class TemplateGroup 
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