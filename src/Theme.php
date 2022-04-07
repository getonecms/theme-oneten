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
        $this->setBaseUrl(dirname(__DIR__));

        $this->pathMap = [
            '@App/templates' => $this->getBasePath() . '/templates'
        ];

        parent::init();
    }
}
