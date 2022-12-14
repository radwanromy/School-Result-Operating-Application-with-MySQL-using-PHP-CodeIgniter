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
                        <td>Subject Name</td>
                        <input type="text" name="txtayear" value="<?php echo $aca_detail[0]['ayear']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <td>Subjective</td>
                        <input type="text" name="txtaclass" value="<?php echo $aca_detail[0]['aclass']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Subjective Pass</label>
                        <textarea name="txtasection" class="form-control"><?php echo $aca_detail[0]['asection']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <td>Objective</td>
                        <input type="text" name="txtaexam" value="<?php echo $aca_detail[0]['aexam']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Objective Pass</label>
                        <textarea name="txtagroup" class="form-control"><?php echo $aca_detail[0]['agroup']; ?></textarea>
                    </div>

                    <div class="form-group">
                    <a href="./../../" class="btn btn-primary btn-lg">Cancel</a>  &nbsp; &nbsp;
                        <input type="submit" value="Edit Academic Information" name="btnAcaEdit" class="btn btn-primary btn-lg">
                    </div>

                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>