<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CI Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style type="text/css">
        body {
            /* font-family: 'Roboto', sans-serif; */
        }

        tr:nth-child(even) {
  background-color: #D6EEEE;
}
    </style>
</head>

<body style="background-color: #E0FFFF;">

    <div class="container">

        <h1>Search For Result</h1>
        <br>
        <?php echo form_open("register/searchUser", ['class' => 'form-inline']); ?>
        <div class="form-group">
            <input style="display:none;" type="text" class="form-control" id="searchuser" name="search" placeholder="Type a here">
        </div>
        <button style="display:none;" type="submit" name="searchBtn" class="btn btn-primary submit">Search</button>
        <button style="display:none;" class="btn btn-default more" href="<?php echo site_url('register') ?>">Refresh</button>
        <?php echo form_close(); ?>
        <?php echo '<h3 style="color: #26324E;">' . $message . '</h3>'; ?>
        <hr>
        <div class="row">
            <!-- <div class="col-lg-12"> -->
            <div class="table-responsive table-bordered">
                <table class="table">
                    <tr align="center">
                      
                            <h2 align="center"> Total Result Found <?php
                                                    count(['tmark']);
                                                    $a = count($records);
                                                    echo $a;
                                                    ?> </h2>
                       
                    </tr>

                    <tr>
                        <th>Student ID</th>
                        <th>Roll</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <!-- <th>stdsub</th>  -->
                        <th>Total Marks</th>
                        <th>Grade Sheet</th>

                    </tr>

                    <?php if (count($records)) : ?>

                        <?php foreach ($records as $row) : ?>

                            <tr>
                                <td><?php echo $row->stdid; ?></td>
                                <td><?php echo $row->roll; ?></td>
                                <td><?php echo $row->stdname; ?></td>
                                <td><?php echo $row->stdclass; ?></td>
                                <td><?php echo $row->stdsection; ?></td>
                                <!-- <td><?php echo $row->stdsub; ?></td>
                                <td><?php
                                    echo $row->subjective + $row->objective + $row->practical; ?></td>
                                <td><?php
                                    if ($row->stdsub == 'Bangla 1' && ($row->subjective + $row->objective + $row->practical) >= 80) {
                                        echo "A";
                                    } else if ($row->stdsub == 'Bangla 1' && ($row->subjective + $row->objective + $row->practical) >= 70 && ($row->subjective + $row->objective + $row->practical) <= 79) {
                                        echo "B";
                                    } else if ($row->stdsub == 'Bangla 1' && ($row->subjective + $row->objective + $row->practical) >= 70 && ($row->subjective + $row->objective + $row->practical) <= 79) {
                                        echo "B";
                                    } else if (($row->subjective + $row->objective + $row->practical) >= 80) {
                                        echo "A";
                                    } else if (($row->subjective + $row->objective + $row->practical) >= 70 && ($row->subjective + $row->objective + $row->practical) <= 79) {
                                        echo "B";
                                    } else if (($row->subjective + $row->objective + $row->practical) >= 60 && ($row->subjective + $row->objective + $row->practical) <= 69) {
                                        echo "C";
                                    } else if (($row->subjective + $row->objective + $row->practical) >= 50 && ($row->subjective + $row->objective + $row->practical) <= 59) {
                                        echo "D";
                                    } else {
                                        echo "F";
                                    }
                                    ?></td> -->
                                <td>

                                    <label><?php
                                            count(['tmark']);
                                            $a = 0;

                                            for ($x = 0; $x < count($result_detail); $x++) {
                                                if ($result_detail[$x]['stdid'] == $row->stdid) {
                                                    $a += $result_detail[$x]['tmark'];
                                                }
                                            }
                                            echo $a;
                                            ?> </label> &nbsp; &nbsp;

                                </td>
                                <!-- <td><a href="#"><button type='submit' class='btn btn-primary'>Print Result Card</button></a></td> -->
                                <!-- <td><a href="#"><button type='submit' class='btn btn-danger'>Delete</button></a></td> -->
                                <td><a href="<?php echo site_url('register/result/'); ?><?php echo $row->stdid; ?>" class="btn btn-primary btn-lg">Print Result Card</a>


                                <?php endforeach; ?>

                            <?php else : ?>
                                <center>
                                    <p style="margin: 20px;">No users registered</p>
                                </center>
                            <?php endif ?>


                </table>
            </div>
            <br>
            <?php echo $link ?>
            <!-- </div> -->
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>