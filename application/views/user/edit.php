<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/edit'); ?>
    <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />

    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $user['name'] ?>"/><br />

    <label for="mail">Mail</label>
    <input type="text" name="mail" value="<?php echo $user['mail'] ?>"/><br />

    <label for="pwd">Old Password</label>
    <input type="password" name="pwd" /><br />

    <label for="pwd">New Password</label>
    <input type="password" name="pwd" /><br />

    <input type="submit" name="submit" value="save" />

</form>