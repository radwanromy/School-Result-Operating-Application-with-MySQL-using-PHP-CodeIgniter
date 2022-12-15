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
                <form method="post" name="frmExconAdd" action="">


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
                                    <select name="ayear" size="1" style="width:100%; height:30px;  border-radius: 5px; ">
                                        <option value="0" disabled>Please select an item</option>
                                        <?php for ($i = 0; $i < count($aca_details); $i++) { ?>
                                            <option <?= $aca_details[$i]['ayear'] ?> value=" <?= $aca_details[$i]['ayear'] ?>" class="form-control" name="txtayear"><?= $aca_details[$i]['ayear'] ?> </option>
                                        <?php } ?>

                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Class :
                                </td>
                                <td>
                                    <select name="aclass" size="1" style="width:100%; height:30px;  border-radius: 5px; ">
                                        <option value="0" disabled>Please select an item</option>
                                        <?php for ($i = 0; $i < count($aca_detail); $i++) { ?>
                                            <option <?= $aca_detail[$i]['aclass'] ?> value=" <?= $aca_detail[$i]['aclass'] ?>" class="form-control" name="txtaclass"><?= $aca_detail[$i]['aclass'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Section :
                                </td>
                                <td>
                                    <select name="asection" size="1" style="width:100%; height:30px;  border-radius: 5px; ">
                                        <option value="0" disabled>Please select an item</option>
                                        <?php for ($i = 0; $i < count($aca_detail); $i++) { ?>
                                            <option <?= $aca_detail[$i]['asection'] ?> value=" <?= $aca_detail[$i]['asection'] ?>" class="form-control" name="txtasection"><?= $aca_detail[$i]['asection'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Exam Type :
                                </td>
                                <td>
                                    <select name="aexam" size="1" style="width:100%; height:30px;  border-radius: 5px; ">
                                        <option value="0" disabled>Please select an item</option>
                                        <?php for ($i = 0; $i < count($aca_detail); $i++) { ?>
                                            <option <?= $aca_detail[$i]['aexam'] ?> value=" <?= $aca_detail[$i]['aexam'] ?>" class="form-control" name="txtaexam"><?= $aca_detail[$i]['aexam'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input type="text" name="txtFname" value="<?php echo $aca_detail[0]['aexam']; ?>" class="form-control"> -->
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Class Group :
                                </td>
                                <td>
                                    <select name="agroup" size="1" style="width:100%; height:30px;  border-radius: 5px; ">
                                        <option value="0" disabled>Please select an item</option>
                                        <?php for ($i = 0; $i < count($aca_detail); $i++) { ?>
                                            <option <?= $aca_detail[$i]['agroup'] ?> value=" <?= $aca_detail[$i]['agroup'] ?>" class="form-control" name="txtagroup"><?= $aca_detail[$i]['agroup'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input type="text" name="txtFname" value="<?php echo $aca_detail[0]['agroup']; ?>" class="form-control"> -->
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Course Name :
                                </td>
                                <td>
                                    <select name="sname" size="1" style="width:100%; height:30px;  border-radius: 5px; ">
                                        <option value="0" disabled>Please select an item</option>
                                        <?php for ($i = 0; $i < count($sub_detail); $i++) { ?>
                                            <option width="100%" <?= $sub_detail[$i]['sname'] ?> value=" <?= $sub_detail[$i]['sname'] ?>" class="form-control" name="txtsname"><?= $sub_detail[$i]['sname'] ?></option>
                                        <?php } ?>
                                    </select>
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
                                    <input type="text" value="<?php echo $sub_detail[0]['subjective']; ?>" class="form-control" name="txtSubjective">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $sub_detail[0]['subjective_pass']; ?>" class="form-control" name="txtSubjectivePass">
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    Objective
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $sub_detail[0]['objective']; ?>" class="form-control" name="txtObjective">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $sub_detail[0]['objective_pass']; ?>" class="form-control" name="txtObjectivePass">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Practical
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $sub_detail[0]['practical']; ?>" class="form-control" name="txtPractical">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $sub_detail[0]['practical_pass']; ?>" class="form-control" name="txtPracticalPass">
                                    <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Exam Marks:
                                </td>
                                <td>
                                    <input value="100.00" class="form-control" name="txtexmark">
                            </tr>

                            <tr>
                                <td>
                                    Attendance:
                                </td>
                                <td>
                                    <input type="checkbox" class="form-control" name="txtatten" checked>
                            </tr>

                            <tr>
                                <td>
                                    Status:
                                </td>
                                <td>
                                    <input type="checkbox" class="form-control" name="txtstatus" checked>
                            </tr>
                        </table>
                    </div>

                    <div class="form-group">
                        <table>
                            <tr>
                                <td>
                                    <!-- <input type="button" value="Cancel" name="btnadd" class="btn btn-primary btn-lg"> -->
                                </td>
                                <td>
                                    <input type="submit" value="Save" name="btnaddexcon" class="btn btn-primary btn-lg">
                            </tr>
                        </table>

                    </div>



                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    </table>

</body>

</html>