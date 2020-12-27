<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div style="height:200px"></div>
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            Student Name
                        </th>
                        <th>
                            Day1
                        </th>
                        <th>
                            Day2
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($Students as $key => $value) { ?>

                        <tr>
                            <td>
                                <?php echo $value['name'] ?>
                             </td>
                        <?php

                                $attendance = $value['attendance'];


                                    $checkin1 = $attendance[0]['check_in'];
                                    $checkout1 = $attendance[0]['check_out'];

                                    $checkin2 = $attendance[1]['check_in'];
                                    $checkout2 = $attendance[1]['check_out'];

                                $checksubin1 = intval(substr($checkin1, -5, 2));
                                $checksubout1 = intval(substr($checkout1, -5, 2));
                                $checksubin2 = intval(substr($checkin2, -5, 2));
                                $checksubout2 = intval(substr($checkout2, -5, 2));

                                $calc1 = $checksubout1 - $checksubin1 ;
                                $calc2 = $checksubout2 - $checksubin2 ;
                                ?>

                        <td  class="<?php if ($calc1 <= 8 ) {
                            echo "danger";
                         }else {
                             echo "success";
                         }  ?>" >
                            <?php echo $calc1 ?>
                        </td >

                        <td  class="<?php if ($calc2 <= 8 ) {
                            echo "danger";
                         }else {
                             echo "success";
                         }  ?>">
                            <?php echo $calc2 ?>
                        </td>


                    </tr>




<?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div style="height:200px"></div>
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            Student Name
                        </th>
                        <th>
                            Project 1
                        </th>
                        <th>
                            Project 2
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($Students as $key => $value) { ?>

                        <tr>
                            <td>
                                <?php echo $value['name'] ?>
                             </td>
                        <?php

                                $projects = $value['projects'];


                                    $projectname = $projects[0]['project_name'];
                                    $projectcheck = $projects[0]['is_completed'];

                                    $projectname1 = $projects[1]['project_name'];
                                    $projectcheck1 = $projects[1]['is_completed'];
                                ?>

                                <?php

                                if ($projectcheck == 0 ){
                                    $check = 'Not Completed';
                                } elseif ($projectcheck == 1) {
                                    $check = 'Completed';
                                }

                                    ?>


                                <?php

                                if ($projectcheck1 == 0 ){
                                    $check1 = 'Not Completed';
                                } elseif ($projectcheck1 == 1) {
                                    $check1 = 'Completed';
                                }

                                    ?>




                        <td  class="<?php if ($projectcheck == 0 ) {
                            echo "danger";
                         }else {
                             echo "success";
                         }  ?>">
                            <?php echo $check ?>
                        </td>



                        <td  class="<?php if ($projectcheck1 == 0 ) {
                            echo "danger";
                         }else {
                             echo "success";
                         }  ?>">
                            <?php echo $check1 ?>
                        </td>
                    </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
