<main>
        <?php foreach ($albums as $album) { ?>
            <div class="card">
                <div class="cover">
                    <img src=<?php echo $album['cover'] ?> alt="cover">
                </div>
                <div class="info-album">
                    <h4><?php echo $album['title'] ?></h4>
                    <h6><?php echo $album['author'] ?></h6>
                    <span><?php echo $album['year'] ?></span>
                    <span><?php echo $album['genre'] ?></span>
                </div>
            </div>
        <?php  } ?>
    </main>