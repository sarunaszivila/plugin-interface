<?php
namespace Plenty\Modules\Plugin\Models;


/**
 * Model representing an installed Plugin
 */
abstract class InstalledPlugins 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$variationId;
	
public		$itemId;
	
public		$removed;
	
public		$lastUpdateChecksum;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}