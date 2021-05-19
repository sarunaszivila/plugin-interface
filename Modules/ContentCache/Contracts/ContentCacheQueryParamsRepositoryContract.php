<?php
namespace Plenty\Modules\ContentCache\Contracts;


/**
 * Interface for registering request query parameters which should be handled by the content cache
 */
interface ContentCacheQueryParamsRepositoryContract 
{

	public function registerExcluded(
		array $queryParams
	);

	public function registerIncluded(
		array $queryParams
	);

}