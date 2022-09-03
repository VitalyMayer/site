<?php
require_once(ROOT . '/views/header.php');
require_once(ROOT . '/views/navigation.php');
?>

<main>
    <?php foreach ($posts as $id => $post): ?>
        <article>
            <h2><?php echo $post->getTitle(); ?></h2>
            <p><?php  echo $post->getContent(); ?><a href="/post/<?php echo $post->getID(); ?>">Read more</a></p>
            <hr>
        </article>
    <?php endforeach; ?>
</main>

<?php require_once(ROOT . '/views/footer.php'); ?>