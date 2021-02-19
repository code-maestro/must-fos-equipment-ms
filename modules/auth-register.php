<?php
    include '../database/db_module.php';
    include '../authentication/signup.php';

    $fname = "";
    $lname = "";
    $email = "";
    $phone = "";
    $gender = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $signup = new Signup();
            $result = $signup->evaluate($_POST);

            if ($result != "") {
                
                echo $result;
            }else {
                header("Location: login.php");
                die;
            }

            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone_number'];
            $gender = $_POST['gender'];
            
        }
    
?>

<!DOCTYPE html>
<html lang="en">

<!-- auth-register.html  Tue, 07 Jan 2020 03:39:47 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Register &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">

<!-- Template CSS -->
<link rel="stylesheet" href="../assets/css/style.min.css">
<link rel="stylesheet" href="../assets/css/components.min.css">
</head>

<body class="layout-4">

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="http://puffintheme.com/craft/codiepie/dist/assets/img/CodiePie-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="first_name">First Name</label>
                                        <input value="<?php echo $fname ?>" id="first_name" type="text" class="form-control" name="first_name" autofocus required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Last Name</label>
                                        <input value="<?php echo $lname ?>"id="last_name" type="text" class="form-control" name="last_name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input value="<?php echo $email ?>" id="email" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password-confirm" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="phone_number">Phone Number</label>
                                        <input value="<?php echo $phone ?>" id="phone_number" type="text" class="form-control" name="phone_number" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Gender</label>
                                        <select class="form-control selectric" name="gender">
                                            <option> <?php echo $gender ?> Select a Gender </option>
                                            <option>MALE</option>
                                            <option>FEMALE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                    <label>Department</label>
                                        <select class="form-control selectric" name="department_name">
                                            <option id="biology"> Biology </option>
                                            <option id="chemistry"> Chemistry </option>
                                            <option id="physics"> Physics </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Role</label>
                                        <select class="form-control selectric" name="roles">
                                            <option>Head of Department</option>
                                            <option>Technician</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        &copy; must fos 2021
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<!-- General JS Scripts -->
<script src="../assets/bundles/lib.vendor.bundle.js"></script>
<script src="../js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="../assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="../js/page/auth-register.js"></script>

<!-- Template JS File -->
<script src="../js/scripts.js"></script>
<script src="../js/custom.js"></script>
</body>

<!-- auth-register.html  Tue, 07 Jan 2020 03:39:48 GMT -->
</html>