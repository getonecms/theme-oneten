<?php

declare(strict_types=1);

namespace OneTen;

use yii\web\AssetBundle;

/**
 * Class Asset
 *
 * @package OneTen
 * @version 0.0.1
 */
class Asset extends AssetBundle
{
    public $css = [
        'css/app.css'
    ];

    public $js = [
        'js/app.js'
    ];

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->sourcePath = dirname(__DIR__) . '/dist';
    }
}
