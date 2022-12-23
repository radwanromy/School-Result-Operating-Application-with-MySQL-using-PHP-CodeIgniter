<html>

<head>
    <title>School Result Operating Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-3"></div> -->
            <!-- <div class="col-md-6"> -->

            <form method="post" name="frmAcaEdit">

                <div align="center">
                    <h3>Result Sheet</h3>
                    <h4><?php echo $result_detail[0]['stdexam']; ?></h4>
                    <!-- <label><?php echo $result_detail[0]['stdyear']; ?></label>
                        <label><?php echo $result_detail[0]['stdclass']; ?></label>
                        <label><?php echo $result_detail[0]['stdsection']; ?></label> -->

                </div>

                <div class="form-group" align="center">
                    <td>Academic Year:</td>
                    <label><?php echo $result_detail[0]['stdyear']; ?></label>
                    <!-- <input type="text" name="txtayear" value="<?php echo $result_detail[0]['stdyear']; ?>" class="form-control"> -->
                </div>
                <div class="form-group" align="center">
                    <td>Class:</td>
                    <label><?php echo $result_detail[0]['stdclass']; ?></label>
                    <!-- <input type="text" name="txtaclass" value="<?php echo $excon_detail[0]['stdclass']; ?>" class="form-control"> -->
                </div>
                <div class="form-group" align="center">
                    <td>Section:</td>

                    <label><?php echo $result_detail[0]['stdsection']; ?></label>
                    <!-- <textarea name="txtasection" class="form-control"><?php echo $excon_detail[0]['asection']; ?></textarea> -->
                </div>

                <div class="form-group" align="center">
                    <td>Group:</td>
                    <label><?php echo $result_detail[0]['stdgroup']; ?></label>
                </div>

                <table width="100%">
                    <tr>
                        <td>
                            Group:<label><?php echo $result_detail[0]['stdgroup']; ?></label> &nbsp; &nbsp;
                        </td>
                        <td>
                            Name of Student: <label><?php

                                                    echo $result_detail[0]['stdname']; ?></label> &nbsp; &nbsp;
                        </td>
                        <td>

                            Total Mark: <label><?php
                                                count(['tmark']);
                                                $a = 0;
                                                for ($x = 0; $x < count($result_detail); $x++) {
                                                    $a += $result_detail[$x]['tmark'];
                                                }
                                                echo $a;
                                                ?> </label> &nbsp; &nbsp;

                        </td>
                    </tr>

                    <tr>
                        <td>
                            Section: <label><?php
                                            echo $result_detail[0]['stdsection']; ?></label> &nbsp; &nbsp;
                        </td>
                        <td>
                            Roll: <label><?php
                                            echo $result_detail[0]['roll']; ?></label> &nbsp; &nbsp;
                        </td>
                        <td>
                            Student ID: <label><?php
                                                echo $result_detail[0]['stdid']; ?></label> &nbsp; &nbsp;
                        </td>
                    </tr>
                </table>

                <table border="1px" align="center" width="100%">
                    <tr align="center">
                        <td>
                            SL No
                        </td>
                        <td>
                            Subjects &nbsp; &nbsp; &nbsp;
                        </td>
                        <td>
                            Subjective Mark
                        </td>
                        <td>
                            Objective Mark
                        </td>
                        <td>
                            Practical Mark
                        </td>
                        <td>
                            Total Mark
                        </td>
                        <td>
                            Achieved
                        </td>
                        <td>
                            Grade
                        </td>



                    </tr>
                    <tr align="center">
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        echo $x + 1 . "<br>";
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        echo $result_detail[$x]['stdsub'] . "<br>";
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['subjective']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        echo $result_detail[$x]['subjective'] . "<br>";
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['objective']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        echo $result_detail[$x]['objective'] . "<br>";
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['practical']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        echo $result_detail[$x]['practical'] . "<br>";
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        echo 100 . "<br>";
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        echo $result_detail[$x]['tmark'] . "<br>";
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['tmark'] >= 80) {
                                            echo "A+" . "<br>";
                                        } else if ($result_detail[$x]['tmark'] >= 70) {
                                            echo "A" . "<br>";
                                        } else if ($result_detail[$x]['tmark'] >= 60) {
                                            echo "A-" . "<br>";
                                        } else if ($result_detail[$x]['tmark'] >= 50) {
                                            echo "B" . "<br>";
                                        } else if ($result_detail[$x]['tmark'] >= 40) {
                                            echo "C" . "<br>";
                                        } else if ($result_detail[$x]['tmark'] >= 33) {
                                            echo "D" . "<br>";
                                        } else {
                                            echo "F" . "<br>";
                                        }
                                        // echo $result_detail[$x]['tmark'] . "<br>";
                                    }
                                    ?> </label>
                        </td>
                    </tr>

                </table>


            </form>
            <div class="col-md-3"></div>
            <!-- </div> -->
        </div>
    </div>
</body>

</html>