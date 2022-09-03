<?php
require_once(ROOT . '/views/header.php');
require_once(ROOT . '/views/navigation.php');
?>

<main>
        <article>
            <h2><?php echo $post->getTitle(); ?></h2>
            <p><?php  echo $post->getContent(); ?></p>
            <a href="/update/<?php  echo $post->getID(); ?>">Update</a><br><br>            
            <hr>
        </article>
</main>

<?php require_once(ROOT . '/views/footer.php'); ?>