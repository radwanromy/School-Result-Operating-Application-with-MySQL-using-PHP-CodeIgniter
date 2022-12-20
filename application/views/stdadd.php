<html>

<head>
    <title>School Result Operating Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <!-- <div class="col-md-6"> -->
            <form method="post" name="frmStdAdd" action="">
                <h3>Add Students Result</h3>
                <table>
                    <tr>
                        <td rowspan="4"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="">Academic Year</label>
                                <select class="form-control" name="txtstdyear">
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
                        </td>
                        <td>

                            <div class="form-group">
                                <label for="">Exam Type</label>
                                <select class="form-control" name="txtstdexam">
                                <option value="Half Yearly Exam">Half Yearly Exam</option>
                                    <option value="Final Yearly Exam">Final Yearly Exam</option>
                                    <option value="Unit Test">Unit Test</option>
                                    <option value="Monthly Exam">Monthly Exam</option>
                                   
                                </select>
                            </div>

                        </td>
                        <td>

                            <div class="form-group">
                                <label for="">Course Name</label>
                                <select class="form-control" name="txtstdsub">
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
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="">Class</label>
                                <select class="form-control" name="txtstdclass">
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
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="">Section</label>
                                <select class="form-control" name="txtstdsection">
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
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="">Group</label>
                                <select class="form-control" name="txtstdgroup">
                                    <option value="Science">Science</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Commerce">Commerce</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr >
                        <td rowspan="4" colspan="6">
                            <div class="form-group">
                                <label for="">Student ID</label>
                                <input type="text" class="form-control" name="txtstdid">
                            </div>

                            <div class="form-group">
                                <label for="">Roll</label>
                                <input type="text" class="form-control" name="txtroll">
                            </div>

                            <div class="form-group">
                                <label for="">Student Name</label>
                                <input type="text" class="form-control" name="txtstdname">
                            </div>

                            <div class="form-group">
                                <label for="">Total Marks</label>
                                <input type="text" class="form-control" name="txttmarks">
                            </div>

                            <div class="form-group">
                                <label for="">Subjective</label>
                                <input type="text" class="form-control" name="txtsubjective">
                            </div>

                            <div class="form-group">
                                <label for="">Objective</label>
                                <input type="text" class="form-control" name="txtobjective">
                            </div>


                            <div class="form-group">
                                <label for="">Practical</label>
                                <input type="text" class="form-control" name="txtpractical">
                            </div>


                            <div class="form-group">
                                <a href="./../../" class="btn btn-primary btn-lg">Cancel</a> &nbsp; &nbsp;
                                <input type="submit" value="Add Student Result" name="btnstdadd" class="btn btn-primary btn-lg">
                            </div>
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