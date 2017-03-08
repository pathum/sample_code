
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('schoolclass/add'); ?>
<table>
    <tr>
        <td><label for="title">Name</label></td>
        <td><input type="input" name="name" size="50" value="" /></td>
    </tr>
    <tr>
        <td><label for="title">Location</label></td>
        <td><input type="input" name="location" size="50" value="" /></td>
    </tr>
    <tr>
        <td><label for="title">Grade</label></td>
        <td><select class="form-control" name="gradeID">
                <?php foreach($grades as $grade){ ?>
                    <option value="<?php echo $grade['grade_id']; ?>"><?php echo $grade['grade_name']; ?></option>';
                <?php } ?>
            </select></td>
    </tr>
    <tr>
        <td><label for="title">Monitor</label></td>
        <td><select class="form-control" name="monitor">
                <?php foreach($students as $student){ ?>
                    <option value="<?php echo $student['std_id']; ?>"><?php echo $student['student_name']; ?></option>
                <?php } ?>
            </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="ADD" /></td>
    </tr>
</table>
</form>