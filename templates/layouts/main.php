<?php

/* @var $content string */
?>

<?php view()->beginPage() ?>
<!doctype html>
<html lang="<?= app()->language ?>">

<head>
    <meta charset="<?= app()->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= app()->name ?></title>

    <link href="<?= view()->theme->baseUrl . '/css/site.css' ?>" rel="stylesheet">

    <?php view()->registerCsrfMetaTags() ?>
    <?php view()->head() ?>
</head>

<body>
    <?php view()->beginBody() ?>

    <header class="fixed flex justify-center left-4 right-4 z-50" id="header">
        <nav class="flex flex-1 items-center justify-between bg-transparent w-full h-16">
            <div>
                <a href="#" class="flex items-center px-4 font-bold text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                    <span class="ml-2"><?= app()->name ?></span>
                </a>
            </div>

            <div class="flex flex-grow justify-end items-center">
                <?= view()->render('_navigation') ?>
            </div>
        </nav>
    </header>

    <?= $content ?>

    <script defer src="<?= view()->theme->baseUrl . '/js/site.js' ?>"></script>

    <?php view()->endBody() ?>
</body>

</html>
<?php view()->endPage() ?>