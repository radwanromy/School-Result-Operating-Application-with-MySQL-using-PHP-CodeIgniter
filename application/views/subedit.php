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

                <form method="post" name="frmSubEdit">

                    <div>
                        <h3>Update Subject</h3>
                    </div>

                    <div class="form-group">
                        <td>First Name</td>
                        <!-- <label for="">Subject Name</label> -->
                        <input type="text" name="txtsname" value="<?php echo $sub_detail[0]['sname']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <td>Subjective</td>
                        <input type="text" name="txtsubjective" value="<?php echo $sub_detail[0]['subjective']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Subjective Pass</label>
                        <textarea name="txtsubjective_pass" class="form-control"><?php echo $sub_detail[0]['subjective_pass']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <td>Objective</td>
                        <input type="text" name="txtobjective" value="<?php echo $sub_detail[0]['objective']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Objective Pass</label>
                        <textarea name="txtobjective_pass" class="form-control"><?php echo $sub_detail[0]['objective_pass']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <td>Practical</td>
                        <input type="text" name="txtpractical" value="<?php echo $sub_detail[0]['practical']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Practical Pass</label>
                        <textarea name="txtpractical_pass" class="form-control"><?php echo $sub_detail[0]['practical_pass']; ?></textarea>
                    </div>

                    <div class="form-group">
                    <a href="./../../" class="btn btn-primary btn-lg">Cancel</a>  &nbsp; &nbsp;
                        <input type="submit" value="Edit Subject Information" name="btnSubEdit" class="btn btn-primary btn-lg">
                    </div>

                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>