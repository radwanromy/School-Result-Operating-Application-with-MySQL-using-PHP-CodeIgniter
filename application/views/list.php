<html>

<head>
    <title>codeigniter Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <h2>List of Registered users</h2>
                <table class="table">
                    <tr>
                        <td colspan="5" align="right"><a href="<?php echo site_url('register/add'); ?>">Add</a></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
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