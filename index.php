<?php
include 'db.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>
                Music
            </h1>
        </div>
    </header>


    <main>
        <?php foreach ($albums as $album) { ?>
            <div class="card">
                <div class="cover">
                    <img src=<?php echo $album['cover'] ?> alt="cover">
                </div>
                <div class="info-album">
                    <h2><?php echo $album['title'] ?></h2>
                    <h2><?php echo $album['author'] ?></h2>
                    <h2><?php echo $album['year'] ?></h2>
                    <h2><?php echo $album['genre'] ?></h2>
                </div>
            </div>
        <?php  } ?>
    </main>
    <footer>

    </footer>


</body>

</html>






<!-- <?php foreach ($albums as $album) { ?>

    <img src=<?php echo $album['cover'] ?> alt="cover">

    <h2><?php echo $album['title'] ?></h2>
    <h2><?php echo $album['author'] ?></h2>
    <h2><?php echo $album['year'] ?></h2>
    <h2><?php echo $album['genre'] ?></h2>
<?php  } ?> -->