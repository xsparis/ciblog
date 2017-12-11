<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/create'); ?>

    <label for="name">Name</label>
    <input type="text" name="name" /><br />

    <label for="mail">Mail</label>
    <input type="text" name="mail" /><br />

    <label for="pwd">Password</label>
    <input type="password" name="pwd" /><br />

    <input type="submit" name="submit" value="Create user" />

</form>