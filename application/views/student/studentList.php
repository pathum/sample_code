<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header text-info">
                <h3> Student list &nbsp;<?php echo anchor('student/add/','add new',array('class'=>'btn btn-success')); ?>
                </h3> </div>
            <table class="table table-striped table-bordered" id="table">
                <thead><tr>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Class</th>
                    <th>Description</th>
                    <th>Age</th>
                    <th>Contact No</th>
                    <th>Gender</th>
                    <th>&nbsp; </th>
                </tr></thead><tbody>
                <?php
                if(count($students)){
                    foreach($students as $student){
                        echo "<tr>";
                        echo "<td>".$student['student_name']."</td>";
                        echo "<td>".$student['grade_name']."</td>";
                        echo "<td>".$student['class_name']."</td>";
                        echo "<td>".$student['description']."</td>";
                        echo "<td>".$student['age']."</td>";
                        echo "<td>".$student['contact_no']."</td>";
                        if($student['gender']==1){
                            echo "<td>Male</td>";
                        } else {
                            echo "<td>Female</td>";
                        }
                        echo "<td>". anchor('student/delete/'.$student['std_id'],'<span class="glyphicon glyphicon-trash"',array('class'=>'danger','onclick'=>"return confirm('Are you sure want to delete this grade?')")) ."</td>";
                        echo "</tr>";
                    }
                }
                ?>
                </tbody></table>

        </div>
    </div>
</div>
</div>