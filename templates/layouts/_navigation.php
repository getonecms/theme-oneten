<?php

/**
 * Partial layout for navigation
 */
?>

<ul class="flex flex-row list-none">
    <li>
        <a class="flex items-center px-4" href="<?= home_url() ?>">
            <svg class="w-6 h-6" width="24" height="24" fill="currentColor">
                <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#house-fill' ?>" />
            </svg>
            <span class="ml-2">Home</span>
        </a>
    </li>
    <li>
        <a class="flex items-center px-4" href="<?= administration_url() ?>">
            <svg class="w-6 h-6" width="24" height="24" fill="currentColor">
                <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#sliders' ?>" />
            </svg>
            <span class="ml-2">Administration</span>
        </a>
    </li>
</ul>