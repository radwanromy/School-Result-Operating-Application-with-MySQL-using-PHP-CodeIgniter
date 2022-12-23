<html>

<head>
    <title>School Result Operating Application</title>
    <!-- <link rel="stylesheet" href="../../style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body style="padding: 10px;">


    <!-- <div style="border: 2px solid gray;">
        <a href="<?php echo site_url('search/search_data'); ?>">Add</a>
    </div> -->
    <div  style="border: 2px solid gray;">
        <h2  >Exam Configuration Related Information</h2>
        <table class="table" style="padding-left: 200px;" >
            <tr>

                <!-- <td colspan="5" align="right"><a href="<?php echo site_url('register/add'); ?>">Add</a></td> -->
                <td colspan="0" align="right"><a href="<?php echo site_url('register/stdadd'); ?>">Result Submission</a></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td colspan="16" align="right"><a href="<?php echo site_url('register/exconadd'); ?>">New Exam Configuration</a> &nbsp; &nbsp;&nbsp; &nbsp;</td>
            </tr>
            <tr>
                <td>Academic Year</td>
                <td>Class</td>
                <td>Section</td>
                <td>Exam Type</td>
                <td>Class Group</td>
                <td>Course Name</td>
                <td>Subjective</td>
                <td>Subjective Pass Mark</td>
                <td>Objective</td>
                <td>Objective Pass Mark</td>
                <td>Practical</td>
                <td>Practical Pass Mark</td>
                <td>Exam Marks</td>
                <td>Attendance</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            <?php
            foreach ($excon_detail as $excon) {
            ?>
                <tr>
                    <td><?php echo $excon['ayear']; ?></td>
                    <td><?php echo $excon['aclass']; ?></td>
                    <td><?php echo $excon['asection']; ?></td>
                    <td><?php echo $excon['aexam']; ?></td>
                    <td><?php echo $excon['agroup']; ?></td>
                    <td><?php echo $excon['sname']; ?></td>
                    <td><?php echo $excon['subjective']; ?></td>
                    <td><?php echo $excon['subjective_pass']; ?></td>
                    <td><?php echo $excon['objective']; ?></td>
                    <td><?php echo $excon['objective_pass']; ?></td>
                    <td><?php echo $excon['practical']; ?></td>
                    <td><?php echo $excon['practical_pass']; ?></td>
                    <td><?php echo $excon['exmark']; ?></td>
                    <td><?php echo $excon['atten']; ?></td>
                    <td><?php echo $excon['status']; ?></td>
                    <td><a href="<?php echo site_url('register/exconedit/'); ?><?php echo $excon['exconid']; ?>">Edit</a>
                        <a href="<?php echo site_url('register/deleteexcon/'); ?><?php echo $excon['exconid']; ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <!-- <div class="col-md-8"> -->

            <h2>Subject Related Information</h2>
            <table class="table">
                <tr>
                    <td></td>
                    <td>
                    <td></td>
                    </td>
                    <!-- <td colspan="5" align="right"><a href="<?php echo site_url('register/add'); ?>">Add</a></td> -->
                    <td colspan="5" align="right"><a href="<?php echo site_url('register/subadd'); ?>">Subject Add</a></td>
                </tr>
                <tr>
                    <td>Subject Name</td>
                    <td>Subjective</td>
                    <td>Subjective Pass Mark</td>
                    <td>Objective</td>
                    <td>Objective Pass Mark</td>
                    <td>Practical</td>
                    <td>Practical</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach ($sub_detail as $sub) {
                ?>
                    <tr>
                        <td><?php echo $sub['sname']; ?></td>
                        <td><?php echo $sub['subjective']; ?></td>
                        <td><?php echo $sub['subjective_pass']; ?></td>
                        <td><?php echo $sub['objective']; ?></td>
                        <td><?php echo $sub['objective_pass']; ?></td>
                        <td><?php echo $sub['practical']; ?></td>
                        <td><?php echo $sub['practical_pass']; ?></td>
                        <td><a href="<?php echo site_url('register/subedit/'); ?><?php echo $sub['scode']; ?>">Edit</a>
                            <a href="<?php echo site_url('register/deletesub/'); ?><?php echo $sub['scode']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>

            <h2>Amacdemic Years Related Information</h2>
            <table class="table">
                <tr>
                    <td></td>
                    <!-- <td colspan="5" align="right"><a href="<?php echo site_url('register/add'); ?>">Add</a></td> -->
                    <td colspan="5" align="right"><a href="<?php echo site_url('register/acaadd'); ?>">Acamdemic Info Add</a></td>
                </tr>
                <tr>
                    <td>Academic Year</td>
                    <td>Class</td>
                    <td>Section</td>
                    <td>Exam Type</td>
                    <td>Class Group</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach ($aca_detail as $aca) {
                ?>
                    <tr>
                        <td><?php echo $aca['ayear']; ?></td>
                        <td><?php echo $aca['aclass']; ?></td>
                        <td><?php echo $aca['asection']; ?></td>
                        <td><?php echo $aca['aexam']; ?></td>
                        <td><?php echo $aca['agroup']; ?></td>
                        <td><a href="<?php echo site_url('register/acaedit/'); ?><?php echo $aca['acode']; ?>">Edit</a>
                            <a href="<?php echo site_url('register/deleteaca/'); ?><?php echo $aca['acode']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>

            <h2>Students Information</h2>
            <table class="table">
                <tr>
                    <td>
                    <td></td>
                    </td>
                    <td colspan="5" align="right"><a href="<?php echo site_url('register/add'); ?>">Add Student</a></td>
                    <!-- <td colspan="5" align="right"><a href="<?php echo site_url('register/subadd'); ?>">Subject Add</a></td> -->
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td>Roll</td>
                    <td>Student Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Mobile</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach ($register_detail as $rg) {
                ?>
                    <tr>
                        <td><?php echo $rg['studentid']; ?></td>
                        <td><?php echo $rg['stdroll']; ?></td>
                        <td><?php echo $rg['sname']; ?></td>
                        <td><?php echo $rg['email']; ?></td>
                        <td><?php echo $rg['address']; ?></td>
                        <td><?php echo $rg['mobile']; ?></td>
                        <td><a href="<?php echo site_url('register/edit/'); ?><?php echo $rg['id']; ?>">Edit</a>
                            <a href="<?php echo site_url('register/delete/'); ?><?php echo $rg['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>


            <!-- </div> -->
            <div class="col-md-2"></div>
        </div>
    </div>



</body>

</html>