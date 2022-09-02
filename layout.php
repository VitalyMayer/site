<?php
require_once(ROOT . '/header.php');
require_once(ROOT . '/navigation.php');
?>

<main>
    <?php foreach ($posts as $heading => $post): ?>
        <article>
            <h2><?php echo $heading; ?></h2>
            <p><?php echo $post; ?></p>
            <hr>
        </article>
    <?php endforeach; ?>
</main>

<?php require_once(ROOT . '/footer.php'); ?>