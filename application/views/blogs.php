<h2><?php echo $title; ?></h2>

<?php foreach ($blogs as $blog_item): ?>

    <h3><?php echo $blog_item['title']; ?></h3>
    <div class="main">
        <?php echo $blog_item['content']; ?>
    </div>

<?php endforeach; ?>