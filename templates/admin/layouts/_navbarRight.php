<?php

/**
 * Partial layout for render right navbar
 */
?>

<div class="ml-auto">
    <div class="flex flex-row">
        <a href="#" class="px-4 text-white">
            <svg width="24" height="24" fill="currentColor">
                <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#circle' ?>" />
            </svg>
        </a>
        <a href="#" class="px-4 text-white">
            <svg width="24" height="24" fill="currentColor">
                <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#window' ?>" />
            </svg>
        </a>
    </div>
</div>