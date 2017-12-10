<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('blog/edit'); ?>
    <input type="hidden" name="id" value="<?php echo $blog['id'] ?>" />
    <label for="title">Title</label>
    <input type="input" name="title" value="<?php echo $blog['title'] ?>"/><br />

    <label for="content">Content</label>
    <textarea name="content" ><?php echo $blog['content'] ?></textarea><br />

    <input type="submit" name="submit" value="save" />

</form>