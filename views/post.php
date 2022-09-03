<?php
require_once(ROOT . '/views/header.php');
require_once(ROOT . '/views/navigation.php');
?>

<main>
        <article>
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['content']; ?></p>
            <hr>
        </article>
</main>

<?php require_once(ROOT . '/views/footer.php'); ?>