<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header text-info">
                <h3> Class list &nbsp;<?php echo anchor('schoolclass/add/','add new',array('class'=>'btn btn-success')); ?>
                </h3> </div>
            <table class="table table-striped table-bordered" id="table">
                <thead><tr>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Location</th>
                    <th>Monitor</th>
                    <th>&nbsp; </th>
                </tr></thead><tbody>
                <?php
                if(count($classes)){
                    foreach($classes as $class){
                       // print_r($class);die();
                        echo "<tr>";
                        echo "<td>".$class['class_name']."</td>";
                        echo "<td>".$class['grade_name']."</td>";
                        echo "<td>".$class['location']."</td>";
                        echo "<td>".$class['student_name']."</td>";
                        echo "<td>". anchor('schoolclass/delete/'.$class['class_id'],'<span class="glyphicon glyphicon-trash"',array('class'=>'danger','onclick'=>"return confirm('Are you sure want to delete this grade?')")) ."</td>";
                        echo "</tr>";
                    }
                }
                ?>
                </tbody></table>

        </div>
    </div>
</div>
</div>