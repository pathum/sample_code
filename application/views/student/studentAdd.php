
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('student/add'); ?>
<table>
    <tr>
        <td><label for="title">Name</label></td>
        <td><input type="input" name="name" size="50" value="" /></td>
    </tr>
    <tr>
        <td><label for="title">Description</label></td>
        <td><textarea name="description" rows="4" cols="40"></textarea></td>
    </tr>
    <tr>
        <td><label for="title">Age</label></td>
        <td><input type="number" name="age" size="50" value="" /></td>
    </tr>
    <tr>
        <td><label for="title">Contact No</label></td>
        <td><input type="tel" name="contactNo" size="50" value="" /></td>
    </tr>
    <tr>
        <td><label for="title">Class</label></td>
        <td><select class="form-control" name="classID">
                <?php foreach($classes as $class){ ?>
                    <option value="<?php echo $class['class_id']; ?>"><?php echo $class['class_name']; ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="title">Gender</label></td>
        <td>
            <select class="form-control" name="gender">
              <option value="1">Male</option>
              <option value="0">Female</option>
            </select>
        </td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="ADD" /></td>
    </tr>
</table>
</form>