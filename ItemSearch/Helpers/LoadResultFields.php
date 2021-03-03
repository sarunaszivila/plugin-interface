<?php

namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Modules\Plugin\Annotations\PluginTrait;
use Plenty\Plugin\Data\Contracts\Resources;
use Plenty\Plugin\Log\LoggerFactory;

/**
 * Trait LoadResultFields
 *
 * @package Plenty\Modules\Webshop\ItemSearch\Helpers
 * @PluginTrait(description="Load contents of result field template files.")
 * @since 0.4.0
 */
trait LoadResultFields
{
    /**
     * Load the file content from a result field template.
     *
     * @param string $fullTemplateName The path of the template to load contents from.
     *
     * @return array
     * @throws \Exception
     * @since 0.4.0
     */
    private function loadResultFields($fullTemplateName): array
    {
        return self::loadStaticResultFields($fullTemplateName);
    }

    /**
     * Load the file content from a result field template.
     *
     * @param string $fullTemplateName The path of the template to load contents from.
     * @return array
     * @throws \Exception
     * @since 0.4.2
     */
    private static function loadStaticResultFields($fullTemplateName): array
    {
        /** @var Resources $resource */
        $resource = pluginApp(Resources::class);

        $resourcePath = explode('::', $fullTemplateName);
        $resourceName = $resourcePath[0] . '::views/' . str_replace('.', '/', $resourcePath[1]);

        if ($resource->exists($resourceName . '.fields')) {
            $data = $resource->load($resourceName . '.fields')->getData();

            if ($data) return $data;

            // Hotfix: Return global wildcard if json file contains invalid content to avoid white pages + Log the error.
            pluginApp(LoggerFactory::class)->getLogger($resourcePath[0], 'loadStaticResultFields')->error('Could not load .fields.json file. Fallback used.', ['template' => $fullTemplateName] );

            return ['*'];
        }

        return [];
    }
}
