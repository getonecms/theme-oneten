<?php

/**
 * The admin layout.
 *
 * @var $content string
 */
?>

<?php view()->beginPage() ?>
<!doctype html>
<html lang="<?= app()->language ?>">

<head>
    <meta charset="<?= app()->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= app()->name ?></title>

    <link href="<?= view()->theme->baseUrl . '/css/admin.css' ?>" rel="stylesheet">

    <?php view()->registerCsrfMetaTags() ?>
    <?php view()->head() ?>
</head>

<body class="relative h-full max-h-screen bg-white text-secondary-600">
    <?php view()->beginBody() ?>

    <header x-data="{ primaryMenuOpen: false }" class="sticky flex top-1 flex-wrap justify-start rounded-md shadow-md m-2 xl:m-5 z-50" id="header">
        <nav class="flex flex-wrap items-center justify-between bg-primary-500 w-full h-16 px-1 rounded-md z-20
                ring-1 ring-primary-600 shadow">
            <div>
                <a href="#" class="flex items-center px-4 text-white font-bold text-lg">
                    <svg class="w-8 h-8" width="32" height="32" fill="currentColor">
                        <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#app' ?>" />
                    </svg>
                    <span class="ml-2"><?= app()->name ?></span>
                </a>
            </div>

            <div class="flex flex-grow justify-start items-center">
                <?= view()->render('_navbarLeft') ?>

                <?= view()->render('_navbarRight') ?>
            </div>
        </nav>

        <?= view()->render('_primaryMenu') ?>
    </header>

    <main class="flex flex-wrap justify-start m-2 xl:m-5" id="main">
        <aside class="fixed w-28 xl:w-48 bg-white text-secondary-600 rounded-md shadow-md overflow-y-auto z-0" id="sidebar">
            <?php if (isset(view()->blocks['sidebarNav'])) : ?>
                <nav class="flex flex-col p-5">
                    <?= view()->blocks['sidebarNav']; ?>
                </nav>
            <?php endif; ?>
        </aside>

        <div class="w-full ml-32 xl:ml-56 min-h-full" id="content">
            <?= $content ?>
        </div>
    </main>

    <script defer src="<?= view()->theme->baseUrl . '/js/admin.js' ?>"></script>

    <?php view()->endBody() ?>
</body>

</html>
<?php view()->endPage() ?>