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

<body style=" background-color: #E0FFFF;  " >



    <div class="container">
        <div class="row">
            <!-- <div class="col-md-3"></div> -->
            <!-- <div class="col-md-6"> -->

            <form method="post" name="frmAcaEdit">
                <table>
                    <tr>
                        <td width=43%>

                        </td>
                        <td width=33%>

                        

                            <div align="center">
                                <h3>Result Sheet</h3>
                                <h4><?php echo $result_detail[0]['stdexam']; ?></h4>
                                <!-- <label><?php echo $result_detail[0]['stdyear']; ?></label>
                        <label><?php echo $result_detail[0]['stdclass']; ?></label>
                        <label><?php echo $result_detail[0]['stdsection']; ?></label> -->

                            </div>

                            <div class="form-group" align="center">
                                <label>Academic Year:</label>
                                <label><?php echo $result_detail[0]['stdyear']; ?></label>
                                <!-- <input type="text" name="txtayear" value="<?php echo $result_detail[0]['stdyear']; ?>" class="form-control"> -->
                            </div>
                            <div class="form-group" align="center">
                                <label>Class:</label>
                                <label><?php echo $result_detail[0]['stdclass']; ?></label>
                                <!-- <input type="text" name="txtaclass" value="<?php echo $excon_detail[0]['stdclass']; ?>" class="form-control"> -->
                            </div>
                            <div class="form-group" align="center">
                                <label>Section:</label>

                                <label><?php echo $result_detail[0]['stdsection']; ?></label>
                                <!-- <textarea name="txtasection" class="form-control"><?php echo $excon_detail[0]['asection']; ?></textarea> -->
                            </div>

                            <div class="form-group" align="center">
                                <label>Group:</label>
                                <label><?php echo $result_detail[0]['stdgroup']; ?></label>
                            </div>
                            <div  class="form-group" align="center">


                               <label> GPA: &nbsp; </label><label><?php
                                                    count(['tmark']);
                                                    $a = 0;
                                                    $t = 0;
                                                    for ($x = 0; $x < count($result_detail); $x++) {
                                                        $a += $result_detail[$x]['tmark'];
                                                    }
                                                    // echo $a;
                                                    // echo " / ";

                                                    for ($x = 0; $x < count($result_detail); $x++) {
                                                        $t += 100;
                                                    }
                                                    // echo $t;
                                                    $g=$a/$t;

                                                    if($g>=.80){
                                                        echo "A+" ;
                                                        echo "(5.00)" ;
                                                    }
                                                    elseif($g>=.70){
                                                        echo "A";
                                                        echo "(4.00)" ;
                                                    }
                                                    elseif($g>=.60){
                                                        echo "A-";
                                                        echo "(3.50)" ;
                                                    }
                                                    elseif($g>=.50){
                                                        echo "B";
                                                        echo "(3.00)" ;
                                                    }
                                                    elseif($g>=.40){
                                                        echo "C";
                                                        echo "(2.00)" ;
                                                    }
                                                    elseif($g>=.33){
                                                        echo "D";
                                                        echo "(1.00)" ;

                                                    }
                                                    else{
                                                        echo "F";
                                                        echo "(0.00)" ;
                                                    }


                                                    
                                                    ?> </label> &nbsp; &nbsp;


                            </div>
                        </td>
                        <td width=33%>
                            <div style=" position: absolute; top: 10px; right: 20px;
                            ">


                                <table border="1.5px" style="color: gray;">
                                    <tr style="background-color: #69d2fe;  color:black;">
                                        <th style="align-content: center;">Letter Grade</th>
                                        <th style="align-content: center;">Class Interval </th>
                                        <th style="align-content: center;">Point</th>
                                    </tr>
                                    <tr align="center">
                                        <td>A+</td>
                                        <td>80-100</td>
                                        <td>5.00</td>
                                    </tr>
                                    <tr align="center">
                                        <td>A</td>
                                        <td>70-79</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr align="center">
                                        <td>A-</td>
                                        <td>60-69</td>
                                        <td>3.50</td>
                                    </tr>
                                    <tr align="center">
                                        <td>B</td>
                                        <td>50-59</td>
                                        <td>3.00</td>
                                    </tr>
                                    <tr align="center">
                                        <td>C</td>
                                        <td>40-49</td>
                                        <td>2.00</td>
                                    </tr>
                                    <tr align="center">
                                        <td>D</td>
                                        <td>33-39</td>
                                        <td>1.00</td>
                                    </tr>
                                    <tr align="center">
                                        <td>F</td>
                                        <td>0-32</td>
                                        <td>0.00</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
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
                                                $t = 0;
                                                for ($x = 0; $x < count($result_detail); $x++) {
                                                    $a += $result_detail[$x]['tmark'];
                                                }
                                                echo $a;
                                                echo " / ";

                                                for ($x = 0; $x < count($result_detail); $x++) {
                                                    $t += 100;
                                                }
                                                echo $t;
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
                <br>
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
                        <td>
                            GPA
                        </td>



                    </tr>

                    <tr align="center">
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            echo $x + 1 . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            echo $result_detail[$x]['stdsub'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['subjective']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            echo $result_detail[$x]['subjective'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['objective']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            echo $result_detail[$x]['objective'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['practical']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            echo $result_detail[$x]['practical'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            $a += 100;
                                        }
                                    }
                                    echo $a . "<br>";
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            $a += $result_detail[$x]['tmark'];
                                        }
                                    }
                                    echo $a . "<br>";
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;

                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
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
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;

                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2") {
                                            if ($result_detail[$x]['tmark'] >= 80) {
                                                echo 5.00 . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 70) {
                                                echo 4.00 . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 60) {
                                                echo 3.50 . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 50) {
                                                echo 3.00 . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 40) {
                                                echo 2.00 . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 33) {
                                                echo 1.00 . "<br>";
                                            } else {
                                                echo 0 . "<br>";
                                            }
                                        }
                                    }
                                    ?> </label>
                        </td>
                    </tr>

                    <tr align="center">
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            echo $x + 1 . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            echo $result_detail[$x]['stdsub'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['subjective']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            echo $result_detail[$x]['subjective'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['objective']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            echo $result_detail[$x]['objective'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['practical']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            echo $result_detail[$x]['practical'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            $a += 100;
                                        }
                                    }
                                    echo $a . "<br>";
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            $a += $result_detail[$x]['tmark'];
                                        }
                                    }
                                    echo $a . "<br>";

                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;

                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            $a += $result_detail[$x]['tmark'];
                                        }
                                    }
                                    if ($a >= 160) {
                                        echo "A+" . "<br>";
                                    } else if ($a >= 140) {
                                        echo "A" . "<br>";
                                    } else if ($a >= 120) {
                                        echo "A-" . "<br>";
                                    } else if ($a >= 100) {
                                        echo "B" . "<br>";
                                    } else if ($a >= 80) {
                                        echo "C" . "<br>";
                                    } else if ($$a >= 66) {
                                        echo "D" . "<br>";
                                    } else {
                                        echo "F" . "<br>";
                                    }

                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;

                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                            $a += $result_detail[$x]['tmark'];
                                        }
                                    }
                                    if ($a >= 160) {
                                        echo 5.00 . "<br>";
                                    } else if ($a >= 140) {
                                        echo 4.00 . "<br>";
                                    } else if ($a >= 120) {
                                        echo 3.50 . "<br>";
                                    } else if ($a >= 100) {
                                        echo 3.00 . "<br>";
                                    } else if ($a >= 80) {
                                        echo 2.00 . "<br>";
                                    } else if ($$a >= 66) {
                                        echo 1.00 . "<br>";
                                    } else {
                                        echo 0.00 . "<br>";
                                    }

                                    ?> </label>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            echo $x + 1 . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['stdsub']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            echo $result_detail[$x]['stdsub'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['subjective']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            echo $result_detail[$x]['subjective'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['objective']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            echo $result_detail[$x]['objective'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['practical']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            echo $result_detail[$x]['practical'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            echo 100 . "<br>";
                                        }
                                    }

                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            echo $result_detail[$x]['tmark'] . "<br>";
                                        }
                                    }
                                    ?> </label>
                        </td>
                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x  < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
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
                                        }
                                    }
                                    ?> </label>
                        </td>

                        <td>
                            <label><?php
                                    count(['tmark']);
                                    $a = 0;
                                    for ($x = 0; $x < count($result_detail); $x++) {
                                        if ($result_detail[$x]['stdsub'] == "Bangla 1" || $result_detail[$x]['stdsub'] == "Bangla 2" || $result_detail[$x]['stdsub'] == "English 1" || $result_detail[$x]['stdsub'] == "English 2") {
                                        } else {
                                            if ($result_detail[$x]['tmark'] >= 80) {
                                                echo "5.00" . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 70) {
                                                echo "4.00" . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 60) {
                                                echo "3.50" . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 50) {
                                                echo "3.00" . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 40) {
                                                echo "2.00" . "<br>";
                                            } else if ($result_detail[$x]['tmark'] >= 33) {
                                                echo "1.00" . "<br>";
                                            } else {
                                                echo "0.00" . "<br>";
                                            }
                                        }
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