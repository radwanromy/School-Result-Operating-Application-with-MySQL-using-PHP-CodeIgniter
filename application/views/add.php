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
                <form method="post" name="frmAdd" action="">
                    <h3>Add User</h3>

                    <div class="form-group">
                        <label for="">Student ID</label>
                        <input type="text" class="form-control" name="txtStudentid">
                    </div>

                    <div class="form-group">
                        <label for="">Roll</label>
                        <input type="text" class="form-control" name="txtRoll">
                    </div>

                    <div class="form-group">
                        <label for="">Student Name</label>
                        <input type="text" class="form-control" name="txtSname">
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="txtAddress">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="txtEmail">
                    </div>

                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" class="form-control" name="txtMobile">
                    </div>


                    <div class="form-group">
                        <a href="./../../" class="btn btn-primary btn-lg">Cancel</a> &nbsp; &nbsp;
                        <input type="submit" value="Add Student" name="btnadd" class="btn btn-primary btn-lg">
                    </div>

                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>