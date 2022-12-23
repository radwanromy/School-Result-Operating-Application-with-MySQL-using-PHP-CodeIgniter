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
                <form method="post" name="frmExconAdd" action="">

                    <h3>Add Exam Configuration Details</h3>

                    <div class="form-group">
                        <label for="">Academic Year</label>
                        <!-- <input type="text" class="form-control" name="txtayear"> -->
                        <select class="form-control" name="txtayear">
                            <option value="2022(Jan)-2022(Dec)">2022(Jan)-2022(Dec)</option>
                            <option value="2021(Jan)-2021(Dec)">2021(Jan)-2021(Dec)</option>
                            <option value="2020(Jan)-2020(Dec)">2020(Jan)-2020(Dec)</option>
                            <option value="2019(Jan)-2019(Dec)">2019(Jan)-2019(Dec)</option>
                            <option value="2018(Jan)-2018(Dec)">2018(Jan)-2018(Dec)</option>
                            <option value="2017(Jan)-2017(Dec)">2017(Jan)-2017(Dec)</option>
                            <option value="2016(Jan)-2016(Dec)">2016(Jan)-2016(Dec)</option>
                            <option value="2015(Jan)-2015(Dec)">2015(Jan)-2015(Dec)</option>
                            <option value="2014(Jan)-2014(Dec)">2014(Jan)-2014(Dec)</option>
                            <option value="2013(Jan)-2013(Dec)">2013(Jan)-2013(Dec)</option>
                            <option value="2012(Jan)-2012(Dec)">2012(Jan)-2012(Dec)</option>
                            <option value="2011(Jan)-2011(Dec)">2011(Jan)-2011(Dec)</option>
                            <option value="2010(Jan)-2010(Dec)">2010(Jan)-2010(Dec)</option>
                            <option value="2009(Jan)-2009(Dec)">2009(Jan)-2009(Dec)</option>
                            <option value="2008(Jan)-2008(Dec)">2008(Jan)-2008(Dec)</option>
                            <option value="2007(Jan)-2007(Dec)">2007(Jan)-2007(Dec)</option>
                            <option value="2006(Jan)-2006(Dec)">2006(Jan)-2006(Dec)</option>
                            <option value="2005(Jan)-2005(Dec)">2005(Jan)-2005(Dec)</option>
                            <option value="2004(Jan)-2004(Dec)">2004(Jan)-2004(Dec)</option>
                            <option value="2003(Jan)-2003(Dec)">2003(Jan)-2003(Dec)</option>
                            <option value="2002(Jan)-2002(Dec)">2002(Jan)-2002(Dec)</option>
                            <option value="2001(Jan)-2001(Dec)">2001(Jan)-2001(Dec)</option>
                            <option value="2000(Jan)-2000(Dec)">2000(Jan)-2000(Dec)</option>
                        </select>


                    </div>

                    <div class="form-group">
                        <label for="">Class</label>
                        <!-- <input type="text" class="form-control" name="txtaclass"> -->
                        <select class="form-control" name="txtaclass">
                            <option value="XII">XII</option>
                            <option value="XI">XI</option>
                            <option value="X">X</option>
                            <option value="IX">IX</option>
                            <option value="VIII">VIII</option>
                            <option value="VII">VII</option>
                            <option value="VI">VI</option>
                            <option value="V">V</option>
                            <option value="IV">IV</option>
                            <option value="III">III</option>
                            <option value="II">II</option>
                            <option value="I">I</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Section</label>
                        <!-- <input type="text" class="form-control" name="txtasection"> -->
                        <select class="form-control" name="txtasection">
                            <option value="A-Science">A-Science</option>
                            <option value="B-Science">B-Science</option>
                            <option value="C-Science">C-Science</option>
                            <option value="A-Arts">A-Arts</option>
                            <option value="B-Arts">B-Arts</option>
                            <option value="C-Arts">C-Arts</option>
                            <option value="A-Commerce">A-Commerce</option>
                            <option value="B-Commerce">B-Commerce</option>
                            <option value="C-Commerce">C-Commerce</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Exam Type</label>
                        <!-- <input type="text" class="form-control" name="txtaexam"> -->
                        <select class="form-control" name="txtaexam">
                            <option value="Unit Test">Unit Test</option>
                            <option value="Monthly Exam">Monthly Exam</option>
                            <option value="Half Yearly Exam">Half Yearly Exam</option>
                            <option value="Final Yearly Exam">Final Yearly Exam</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Class Group</label>
                        <!-- <input type="text" class="form-control" name="txtagroup"> -->
                        <select class="form-control" name="txtagroup">
                            <option value="Science">Science</option>
                            <option value="Arts">Arts</option>
                            <option value="Commerce">Commerce</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Subject Name</label>
                        <!-- <input type="text" class="form-control" name="txtSname"> -->
                        <select class="form-control" name="txtSname">
                            <option value="Bangla 1">Bangla 1</option>
                            <option value="Bangla 2">Bangla 2</option>
                            <option value="English 1">English 1</option>
                            <option value="English 2">English 2</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Physics 1">Physics 1</option>
                            <option value="Physics 2">Physics 2</option>
                            <option value="Chemistry 1">Chemistry 1</option>
                            <option value="Chemistry 2">Chemistry 2</option>
                            <option value="Biology 1">Biology 1</option>
                            <option value="Biology 2">Biology 2</option>
                            <option value="Higher Math">Higher Math</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Economics">Economics</option>
                            <option value="ICT">ICT</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Geography">Geography</option>
                            <option value="History">History</option>
                            <option value="Islamic History">Islamic History</option>
                            <option value="Islamic Studies">Islamic Studies</option>
                            <option value="Philosophy">Philosophy</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Home Economics">Home Economics</option>
                            <option value="Fine Arts">Fine Arts</option>
                            <option value="Physical Education">Physical Education</option>
                            <option value="Music">Music</option>
                            <option value="Dance">Dance</option>
                            <option value="Drawing">Drawing</option>
                            <option value="Health & Physical Education">Health & Physical Education</option>
                            <option value="Physical Education & Health">Physical Education & Health</option>

                        </select>
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
                                    <input type="text" class="form-control" name="txtSubjective">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="txtSubjectivePass">
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    Objective
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="txtObjective">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="txtObjectivePass">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Practical
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="txtPractical">
                                </td>
                                <td>
                                    Pass Marks
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="txtPracticalPass">
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
                    <!-- <div class="form-group">
                        <label for="">Subjective</label>
                        <input type="text" id="smark" class="form-control" name="txtSubjective">     
                    </div>

                    <div class="form-group">
                        <label for="">Subjective Pass Mark</label>
                      <input type="text" class="form-control" name="txtSubjectivePass" >
                    </div>

                    <div class="form-group">
                        <label for="">Objective</label>
                        <input type="text" class="form-control" name="txtObjective">
                    </div>

                    <div class="form-group">
                        <label for="">Objective Pass Mark</label>
                        <input type="text" class="form-control" name="txtObjectivePass">
                    </div>

                    <div class="form-group">
                        <label for="">Practical</label>
                        <input type="text" class="form-control" name="txtPractical">
                    </div>

                    <div class="form-group">
                        <label for="">Practical Pass Mark</label>
                        <input type="text" class="form-control" name="txtPracticalPass">
                    </div>

                    <div class="form-group">
                        <label for="">Exam Mark</label>
                        <input type="text" name="txtexmark" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Attendance</label>
                        <input type="text" name="txtatten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="txtstatus" class="form-control">
                    </div> -->
                    <div class="form-group">
                        <!-- <td colspan="5" align="right"><a href="<?php echo site_url('register/add'); ?>">Add</a></td> -->
                        <!-- <input type="button" value="Cancel"  class="btn btn-primary btn-lg"> -->
                        <a href="./../../" class="btn btn-primary btn-lg">Cancel</a>  &nbsp; &nbsp;
                        <input type="submit" value="Add Exam Configuration Details" name="btnaddexcon" class="btn btn-primary btn-lg">
                    </div>


                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>