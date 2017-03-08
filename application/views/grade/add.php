
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('grade/add'); ?>
<table>
    <tr>
        <td><label for="title">Name</label></td>
        <td><input type="input" name="name" size="50" value="" /></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="ADD" /></td>
    </tr>
</table>
</form>