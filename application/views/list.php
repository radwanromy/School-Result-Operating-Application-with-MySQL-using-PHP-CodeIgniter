<html>

<head>
    <title>School Result Operating Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" name="frmExam">

                    <div>
                        <h3>Exam Configuration</h3>
                    </div>

                    <div class="form-group">
                        <table>
                            <tr>
                                <td>
                                    Academic Year :
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $aca_detail[0]['ayear']; ?>" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Class :
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $aca_detail[0]['aclass']; ?>" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Section :
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $aca_detail[0]['asection']; ?>" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Exam Type :
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $aca_detail[0]['aexam']; ?>" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Class Group :
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $aca_detail[0]['agroup']; ?>" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Course Name :
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $sub_detail[0]['sname']; ?>" class="form-control">
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="form-group">
                        <table>
                            <tr>
                                <td rowspan="4">
                                    Marks Configuration
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    Subjective
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $sub_detail[0]['subjective']; ?>" class="form-control">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $sub_detail[0]['subjective_pass']; ?>" class="form-control">
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    Objective
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $sub_detail[0]['objective']; ?>" class="form-control">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $sub_detail[0]['objective_pass']; ?>" class="form-control">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Practical
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $sub_detail[0]['practical']; ?>" class="form-control">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" name="txtFname" value="<?php echo $sub_detail[0]['practical_pass']; ?>" class="form-control">
                                    <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Exam Marks:
                                </td>
                                <td>
                                    <input value="100.00">
                            </tr>

                            <tr>
                                <td>
                                    Attendance:
                                </td>
                                <td>
                                    <input type="checkbox">
                            </tr>

                            <tr>
                                <td>
                                    Status:
                                </td>
                                <td>
                                    <input type="checkbox">
                            </tr>
                        </table>
                    </div>

                    <div class="form-group">
                        <table>
                            <tr>
                                <td>
                                    <input type="button" value="Cancel" name="btnadd" class="btn btn-primary btn-lg">
                                </td>
                                <td>
                                    <input type="submit" value="Save" name="btnadd" class="btn btn-primary btn-lg">
                            </tr>
                        </table>

                    </div>

                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    </table>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

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
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>Address</td>
                        <td>Mobile</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    foreach ($register_detail as $rg) {
                    ?>
                        <tr>
                            <td><?php echo $rg['first_name']; ?></td>
                            <td><?php echo $rg['last_name']; ?></td>
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
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>