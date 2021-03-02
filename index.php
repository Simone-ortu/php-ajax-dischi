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
        <h1>
            Music
        </h1>
    </header>


    <main>
        <div class="card">
            <?php foreach ($albums as $album) { ?>

                <img src=<?php echo $album['cover'] ?> alt="cover">

                <h2><?php echo $album['title'] ?></h2>
                <h2><?php echo $album['author'] ?></h2>
                <h2><?php echo $album['year'] ?></h2>
                <h2><?php echo $album['genre'] ?></h2>
            <?php  } ?>
        </div>
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