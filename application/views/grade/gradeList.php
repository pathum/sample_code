<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header text-info">
                <h3> Grade list &nbsp;<?php echo anchor('grade/add/','add new',array('class'=>'btn btn-success')); ?>
                </h3> </div>
            <table class="table table-striped table-bordered" id="table">
                <thead><tr>
                    <th>Name</th>
                    <th>&nbsp; </th>
                </tr></thead><tbody>
                <?php
                if(count($grades)){
                    foreach($grades as $grade){
                        echo "<tr>";
                        echo "<td>".$grade['grade_name']."</td>";
                        echo "<td>". anchor('grade/delete/'.$grade['grade_id'],'<span class="glyphicon glyphicon-trash"',array('class'=>'danger','onclick'=>"return confirm('Are you sure want to delete this grade?')")) ."</td>";
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>

        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                if(count($classList)){
                    foreach($classList as $list){
                        echo "<ul class='list-group'><h3>". $list['gradeName']."</h3>";
                        if(count($list['classList'])) {
                            foreach ($list['classList'] as $class) {
                                echo "<li class='list-group-item'>" . $class['class_name'] . "</li>";
                            }
                        }else{
                            echo "<ul class='list-group-item'>No class</ul>";
                        }
                        echo '</ul><br>';
                    }
                }
                ?>
            </div>
        </div>

    </div>


</div>
