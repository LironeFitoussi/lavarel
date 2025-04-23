    <?php
    require __DIR__ . '/vendor/autoload.php';

    use Cocur\Slugify\Slugify;
    $slugify = new Slugify();
    // echo $slugify->slugify("this is some text that i  want to use today");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>
            <?= "This is a PHP page" ?>
        </h1>
        <p>
            <?= $slugify->slugify("this is some text that i  want to use today") ?>
        </p>
    </body>

    </html>