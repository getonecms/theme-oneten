<?php

declare(strict_types=1);

namespace OneTen;

use OneCMS\Base\Infrastructure\Framework\Theme\Theme as BaseTheme;

/**
 * Class Theme
 *
 * @package OneTen
 * @version 0.0.1
 */
class Theme extends BaseTheme
{
    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->setBasePath(dirname(__DIR__));
        $this->setBaseUrl($this->publishAssets());

        $this->pathMap = [
            '@App/templates' => $this->getBasePath() . '/templates'
        ];

        parent::init();
    }

    /**
     * TODO: This fundtion should move into the theme instalation. Because it should call once.
     */
    private function copyResourcesToWebDirectory(): void
    {
        $themeDir = get_alias('@webroot/theme');
        $dist = $themeDir . DIRECTORY_SEPARATOR . 'oneten';

        if (!file_exists($themeDir)) {
            mkdir($themeDir);
            symlink(dirname(__DIR__) . '/dist', $dist);
            // FileHelper::copyDirectory(dirname(__DIR__) . '/dist', $dist);
        }

        if (!file_exists($dist)) {
            symlink(dirname(__DIR__) . '/dist', $dist);
        }
    }

    /**
     * Publish assets of this theme.
     *
     * @return string
     */
    private function publishAssets(): string
    {
        $published = app()->assetManager->publish(dirname(__DIR__) . '/dist');

        return url($published[1]);
    }
}
