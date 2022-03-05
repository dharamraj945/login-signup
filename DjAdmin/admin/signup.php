<script src="../jquery.js"></script>

<?php include '../connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Sign Up | AdminKit Demo</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<style>
    .display_bloack {
        display: block;
    }

    .alert_danger {
        border: 1px solid #eb7d7d;
        text-align: center;
        background-color: #eb7d7d;
        margin-top: 0px;
        display: none;

    }

    .alert_sucess {
        border: 1px solid #3af33f;
        text-align: center;
        background-color: #3af33f;
        margin-top: 0px;
        display: none;


    }

    .danger h1,
    h2 {
        color: white;
    }

    .cross {
        cursor: pointer;
        float: right;
        justify-content: center;


    }
</style>

<body>

    <div class="alert_danger">

        <div class="danger">

            <h1>
                <h2 id="sethtml">Please Enter Your name</h2> <span><svg class="cross" id="cross" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x align-middle me-2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></span>
            </h1>
        </div>

    </div>
    <div class="alert_sucess">

        <div class="danger">

            <h1 id="">Registration Sucessfull Login To Continue<span><svg class="cross" id="cross_sucess" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x align-middle me-2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></span></h1>
        </div>

    </div>
    <!-- PHP CODE  -->

    <?php






    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $companyname = $_POST['company'];
        $mobilenumber = $_POST['mobileno'];
        $emailid = $_POST['email'];
        $password = $_POST['password'];

        $select_query = "SELECT * FROM `signuplogin` WHERE `Mobileno`='$_POST[mobileno]' OR `emailid`='$_POST[email]'  ";
        $result_select = $conn->query($select_query);
        if ($result_select) {

            if (mysqli_num_rows($result_select) > 0) {
                $result_fetch = mysqli_fetch_assoc($result_select);
                if ($result_fetch['Mobileno'] == $mobilenumber) {

                    echo "<script>
                                 $(document).ready(function(){
                                
                                    $('#sethtml').html('<h2>Mobile No Already Exist</h2>')
            
                                $('.alert_danger').show(function(){
                                   $('#cross').click(function(){
                                         $('.alert_danger').hide(500);});});});</script>
                                         <script>loaction.href='signup.php';</script>
                                         ";
                } else {
                    echo "<script>
                    $(document).ready(function(){
                   
                       $('#sethtml').html('<h2>Email Id Already Exist</h2>')

                   $('.alert_danger').show(function(){
                      $('#cross').click(function(){
                            $('.alert_danger').hide(500);});});});</script>";
                }
            } else {


                if ($name != "") {


                    if ($companyname != "") {

                        if ($mobilenumber != "") {


                            if ($emailid != "") {

                                if ($password != "") {


                                    $query = " INSERT INTO `signuplogin`(`name`, `companyname`, `Mobileno`, `emailid`, `password` ) VALUES ('$name','$companyname','$mobilenumber','$emailid','$password')";
                                    if ($result = $conn->query($query) == true) {
                                        echo "<script>
                                    $(document).ready(function(){
                                        $('.alert_sucess').show(function(){
                                        $('#cross_sucess').click(function(){
                                    $('.alert_sucess').hide(500);});});});</script>";
                                    };
                                } else {
                                    echo "<script>
                                        $(document).ready(function(){
                        
                                    $('#sethtml').html('<h2>Please Set Your Password</h2>')
                        
                                            $('.alert_danger').show(function(){
                                              $('#cross').click(function(){
                                         $('.alert_danger').hide(500);});});});</script>";
                                }
                            } else {
                                echo "<script>
                                $(document).ready(function(){
                
                                $('#sethtml').html('<h2>Please  Enter Your  Mail ID</h2>')
                
                                    $('.alert_danger').show(function(){
                                      $('#cross').click(function(){
                                 $('.alert_danger').hide(500);});});});</script>";
                            }
                        } else {
                            echo "<script>
                                 $(document).ready(function(){
                                
                                    $('#sethtml').html('<h2>Please Enter Mobile Number</h2>')
            
                                $('.alert_danger').show(function(){
                                   $('#cross').click(function(){
                                         $('.alert_danger').hide(500);});});});</script>";
                        }
                    } else {
                        echo "<script>
                            $(document).ready(function(){
        
                        $('#sethtml').html('<h2>Please Enter Company Name</h2>')
        
                                $('.alert_danger').show(function(){
                                $('#cross').click(function(){
                            $('.alert_danger').hide(500);});});});</script>
                            
                            ";
                    }
                } else {
                    echo "<script>
                        $(document).ready(function(){
                            $('.alert_danger').show(function(){
                            $('#cross').click(function(){
                        $('.alert_danger').hide(500);});});});</script>";
                }
            }
        }
    }


















    ?>


    <!-- PHP CODE  -->





    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Get started</h1>
                            <p class="lead">
                                Start creating the best possible user experience for you customers.
                            <p><a href="index.php">Already Have a Account Signin</a></p>
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="#" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Company</label>
                                            <input class="form-control form-control-lg" type="text" name="company" placeholder="Enter your company name" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <input class="form-control form-control-lg" type="text" name="mobileno" placeholder="Enter your Number" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
                                        </div>
                                        <div class="text-center mt-3">

                                            <input type="submit" class="btn btn-lg btn-primary" value="Sign up" name="submit">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html>