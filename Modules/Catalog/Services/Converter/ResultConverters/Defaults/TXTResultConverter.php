<?php
namespace Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults;

use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Plenty\Modules\Catalog\Contracts\CatalogResultConverterContract;
use Plenty\Modules\Catalog\Models\CatalogExportResult;
use Plenty\Modules\Catalog\Services\Collections\CatalogLazyCollection;
use Plenty\Modules\Catalog\Services\FileHandlers\ResourceHandler;

/**
 * Default TXT Result converter
 */
abstract class TXTResultConverter 
{

	const CHUNK_SIZE = 50;

	const MIME_TYPE = 'text/plain';

	const FILE_EXTENSION = 'txt';

	abstract public function toDownload(
		 $resourceHandler
	);

	abstract public function toMarketplace(
	);

	/**
	 * When you don't know what you have but you know what you want
You give it almost anything and you hope
Hope dies last
	 */
	abstract public function from(
		 $data
	):BaseResultConverter;

	abstract public function fromArray(
		 $data
	);

	abstract public function fromCollection(
		 $collection
	);

	abstract public function fromCatalogLazyCollection(
		 $catalogLazyCollection
	);

	abstract public function fromCatalogExportResult(
		 $exportResult
	);

	abstract public function fromRawJSONLFile(
		 $sourceFile
	);

	abstract public function getChunkSize(
	);

	abstract public function getMIME(
	);

	abstract public function getSourceCollection(
	);

	abstract public function setSettings(
		 $settings = []
	);

	abstract public function addData(
		 $data
	);

	abstract public function getConvertedResult(
	);

	abstract public function clear(
	);

	abstract public function getType(
	);

}