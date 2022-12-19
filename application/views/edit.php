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

                <form method="post" name="frmEdit">

                    <div>
                        <h3>Update User</h3>
                    </div>

                    <div class="form-group">
                        <td>First Name</td>
                        <label for="">First Name</label>
                        <input type="text" name="txtFname" value="<?php echo $register_detail[0]['first_name']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <td>Last Name</td>
                        <input type="text" name="txtLname" value="<?php echo $register_detail[0]['last_name']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <textarea name="txtAddress" class="form-control"><?php echo $register_detail[0]['address']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="txtEmail" value="<?php echo $register_detail[0]['email']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" name="txtMobile" value="<?php echo $register_detail[0]['mobile']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                    <a href="./../../" class="btn btn-primary btn-lg">Cancel</a>  &nbsp; &nbsp;
                        <input type="submit" value="Edit Now" name="btnEdit" class="btn btn-primary btn-lg">
                    </div>

                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>