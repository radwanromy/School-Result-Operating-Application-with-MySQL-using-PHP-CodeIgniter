<html>

<head>
    <title>School Result Operating Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        tr:nth-child(even) {
  background-color: #D6EEEE;
}
        </style>
</head>

<body style="background-color: #E0FFFF;">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form method="post" name="frmAcaEdit">

                    <div>
                        <h3>Update Academic Information</h3>
                    </div>

                    <div class="form-group">
                        <td>Academic Year</td>
                        <input type="text" name="txtayear" value="<?php echo $excon_detail[0]['ayear']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <td>Class</td>
                        <input type="text" name="txtaclass" value="<?php echo $excon_detail[0]['aclass']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Section</label>
                        <textarea name="txtasection" class="form-control"><?php echo $excon_detail[0]['asection']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <td>Exam Type</td>
                        <input type="text" name="txtaexam" value="<?php echo $excon_detail[0]['aexam']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Class Group</label>
                        <textarea name="txtagroup" class="form-control"><?php echo $excon_detail[0]['agroup']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <!-- <td></td> -->
                        <label for="">Course Name</label>
                        <!-- <label for="">Subject Name</label> -->
                        <input type="text" name="txtSname" value="<?php echo $excon_detail[0]['sname']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Subjective</label>
                        <input type="text" name="txtSubjective" value="<?php echo $excon_detail[0]['subjective']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Subjective Pass</label>
                        <textarea name="txtSubjectivePass" class="form-control"><?php echo $excon_detail[0]['subjective_pass']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <td>Objective</td>
                        <input type="text" name="txtObjective" value="<?php echo $excon_detail[0]['objective']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Objective Pass</label>
                        <textarea name="txtObjectivePass" class="form-control"><?php echo $excon_detail[0]['objective_pass']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <td>Practical</td>
                        <input type="text" name="txtPractical" value="<?php echo $excon_detail[0]['practical']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Practical Pass</label>
                        <textarea name="txtPracticalPass" class="form-control"><?php echo $excon_detail[0]['practical_pass']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Exam Mark</label>
                        <textarea name="txtexmark" class="form-control"><?php echo $excon_detail[0]['exmark']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <td>Attendance</td>
                        <input type="text" name="txtatten" value="<?php echo $excon_detail[0]['atten']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <textarea name="txtstatus" class="form-control"><?php echo $excon_detail[0]['status']; ?></textarea>
                    </div>

                    <div class="form-group">
                    <a href="./../../" class="btn btn-primary btn-lg">Cancel</a>  &nbsp; &nbsp;
                        <input type="submit" value="Edit Academic Information" name="btnExconEdit" class="btn btn-primary btn-lg">
                    </div>

                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>