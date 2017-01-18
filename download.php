<?php
if (empty($_GET)) {
    echo "Nothing to download?";
    header("index.php");
    die();
}

$down=$_GET['down'];

?>


<?php

if ($down === "riko-contagious.zip") {

    ?>
    <html>
        <head>
            <meta http-equiv="refresh" content="0;url=<?php echo $down; ?>">
        </head>
        <body>
            <?php
            $filePath = 'contagious1.txt';

            // If file exists, read current count from it, otherwise, initialize it to 0
            $count = file_exists($filePath) ? file_get_contents($filePath) : 430;

            // Increment the count and overwrite the file, writing the new value
            file_put_contents($filePath, ++$count);

            // Display current download count
//            echo "Downloads:" . $count;
//            header("Location: index.php");

            ?>
        </body>
    </html>
    <?php
} elseif ($down === "riko-contagious2.zip") {
    ?>
    <html>
        <head>
            <meta http-equiv="refresh" content="0;url=<?php echo $down; ?>">
        </head>
        <body>
            <?php
            $filePath = 'contagious2.txt';

            // If file exists, read current count from it, otherwise, initialize it to 0
            $count2 = file_exists($filePath) ? file_get_contents($filePath) : 895;

            // Increment the count and overwrite the file, writing the new value
            file_put_contents($filePath, ++$count2);

            // Display current download count
//            echo "Downloads:" . $count2;
//
//            header("Location: index.php");
            ?>
        </body>
    </html>
<?php
} elseif ($down === "RIKO+POWER.zip") {
    ?>
    <html>
        <head>
            <meta http-equiv="refresh" content="0;url=<?php echo $down; ?>">
        </head>
        <body>
            <?php
            $filePath = 'rikopower.txt';

            // If file exists, read current count from it, otherwise, initialize it to 0
            $count2 = file_exists($filePath) ? file_get_contents($filePath) : 895;

            // Increment the count and overwrite the file, writing the new value
            file_put_contents($filePath, ++$count2);

            // Display current download count
//            echo "Downloads:" . $count2;
//
//            header("Location: index.php");
            ?>
        </body>
    </html>
<?php
}
