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
                <form method="post" name="frmSubAdd" action="">
                    <h3>Add Subject</h3>

                    <!-- <div class="form-group">
                        <label for="">Subject Code</label>
                        <input type="text" class="form-control" name="txtScode">
                    </div> -->

                    <div class="form-group">
                        <label for="">Subject Name</label>
                        <input type="text" class="form-control" name="txtSname">
                    </div>

                    <div class="form-group">
                        <label for="">Subjective</label>
                        <input type="text" class="form-control" name="txtSubjective">
                    </div>

                    <div class="form-group">
                        <label for="">Subjective Pass Mark</label>
                        <input type="text" class="form-control" name="txtSubjectivePass">
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
                    <a href="./../../" class="btn btn-primary btn-lg">Cancel</a>  &nbsp; &nbsp;
                        <input type="submit" value="Add Subject Information" name="btnsubadd" class="btn btn-primary btn-lg">
                    </div>

                </form>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>