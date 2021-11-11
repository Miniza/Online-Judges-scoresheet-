<?php include('inc/header.php'); ?>
      <div class="container">
        <?php require_once 'process.php';?>
        <div class="row justify-content-center">
            <form action="process.php" method="post">
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <header style="color:white">
                                <b>Nkathuto Edupropeller Online Score sheet</b>
                            </header>
                            <img class="img-nkathuto" src="img/nkathuto.png" alt="Nkathuto Logo">
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Date
                                </label>
                                <input type="date" name="date" class="form-control" required>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Judges Name
                                </label>
                                <input type="text" name="jname"  class="form-control" placeholder="Enter Judges Name" required><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Judges Surname
                                </label>
                                <input type="text" name="jsurname"  class="form-control" placeholder="Enter Judges surname" required>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Qualification
                                </label>
                                <input type="text"  name="jqual" class="form-control" placeholder="Enter your qualification" required><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                            <label style="color:white">
                                <h5>Email Address
                            </label>
                            <input type="email" name="jemail" class="form-control" placeholder="Enter your Email Address" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Students Name
                                </label>
                                <input type="text" name="sname"  class="form-control" placeholder="Enter Students Name" required><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Students Surname
                                </label>
                                <input type="text" name="ssurname"  class="form-control" placeholder="Enter Students surname" required><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Students Grade
                                </label>
                                <input type="Number" name="sgrade" class="form-control" min="8" max="11" required><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>School Name
                                </label>
                                <input type="text" name="sschool"  class="form-control" placeholder="Enter Schools name" required><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <label style="color:white">
                                <h5>Students Gender
                            </label>
                            <br>
                            <input type="radio" id="male" name="sgender"  value="male">Male
                            <br>
                            <input type="radio" id="female" name="sgender"  value="female">Female
                            <br>
                            <input type="radio" id="other"  name="sgender"  value="other">Other
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Project Number
                                </label>
                                <input type="number" name="numberpro" class="form-control" id="numberpro" min="0" max="350" required>
                            </div>
                        </div>
                    </div>
                </div>
                <p style="color:red">Please rate the students below out of 5</p>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Does the student have a well written detailed abstract or powerpoint presentation
                                </label>
                                <br>
                                <input type="number" name="arating"   min="0" max="5"required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Did the student conduct proper scientific research
                                </label>
                                <br>
                                <input type="number" name="rrating"  min="0" max="5"required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Does the student use STEM to solve a Problem
                                </label>
                                <br>
                                <input type="number" name="srating"   min="0" max="5"required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Does the student have an innovative idea
                                </label>
                                <br>
                                <input type="number" name="irating"   min="0" max="5"required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Is the student aware of the limitations of their project
                                </label>
                                <br>
                                <input type="number" name="lrating"  min="0" max="5"required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>Does the student have a prototype or a drawing of the project
                                </label>
                                <br>
                                <input type="number" name="prating"  min="0" max="5"required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jumbotron'>
                    <div class="col-sm-12 center">
                        <div class="text-center">
                            <div class="form-group">
                                <label style="color:white">
                                    <h5>What is overall mark you can give the student
                                </label>
                                <br>
                                <input type="number" name="orating"   min="0" max="5"required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
                <hr>
                <a href="nextpage.php">
                    RESULTS>>
                </a>
                    <style>
                        body
                        {
                            background-image:url('img/judge.jpeg');
                        }
                    </style>
            </form>
            </div>
      </div>
<?php include('inc/footer.php'); ?>

