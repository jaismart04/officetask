<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MyTask</title>
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="">
    <!-- loader-->
    <!--<link href="skin/login/css/pace.min.css" rel="stylesheet" />-->
    <!--<script src="skin/login/js/pace.min.js"></script>-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="login/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="login/css/app.css" />
    <link href="plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="css/pace.min.css" rel="stylesheet" />
    <script src="js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/icons.css" />
    <!-- App CSS -->

    <link rel="icon" href="http://localhost/mywork/images/favicon-32x32.png" type="image/png" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/dark-sidebar.css" />
    <link rel="stylesheet" href="css/dark-theme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />


    <style>
    .red {
        outline: 1px solid red;
    }

    .blue {
        outline: 1px solid blue;
    }
    </style>


</head>

<body class="bg-login">


    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-12">

                                <div class="card-body p-md-5">
                                    <div class="text-center">
                                        <div>

                                        </div>

                                        <img src="" width="200" alt="">
                                        <h3 class="mt-4 font-weight-bold">Welcome</h3>
                                    </div>


                                    <div class="login-separater text-center"> <span> LOGIN</span>
                                        <hr />
                                    </div>

                                    <?php //dd(session()->all());
                                    ?>

                                    <form method="post" action="{{url('login-post')}}">
                                        @csrf

                                        <div class="form-group mt-4">
                                            <label>email</label>
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder="Enter your Email" required />
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                            <p id="errorEmail"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <input type="password" id="password" name="password"
                                                    class="form-control" placeholder="Enter your Password" />
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                                <div class="input-group-append" id="button-addon4">
                                                    <button type="button" onclick="myFunction()" class="btn btn-info"><i
                                                            class="lni lni-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <p id="errorPassword"></p>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col">
                                                <div class="custom-control custom-switch">
                                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                                </div>
                                            </div>


                                        </div>


                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" id="" class="btn btn-primary btn-block">Login</button>
                                            <button type="submit" id="" class="btn btn-primary"><i
                                                    class="lni lni-arrow-right"></i>
                                            </button>
                                        </div>
                                        <?php //echo form_close(); 
                                        ?>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end wrapper -->
</body>
<!-- end wrapper -->


<script>
function myFunction() {
    var x = document.getElementById("ipassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

<script>
// /*
// let validEmail = false;
// let validPassword = false;

// function validationCheckForEmail(email) {
//     if (email.length > 0) {
//         validEmail = true;
//         document.getElementById('iusername').style.borderColor = "blue";
//         document.getElementById('errorEmail').innerHTML = ""
//     } else {
//         validEmail = false;
//         document.getElementById('iusername').style.borderColor = "red";
//         document.getElementById('errorEmail').style.color = "red";
//         document.getElementById('errorEmail').innerHTML = "Required Username"
//     }
//     validInput();
// }

// function validationCheckForPassword(password) {
//     if (password.length > 0) {
//         validPassword = true;
//         document.getElementById('ipassword').style.borderColor = "blue";
//         document.getElementById('errorPassword').innerHTML = ""
//     } else {
//         validPassword = false;
//         document.getElementById('ipassword').style.borderColor = "red";
//         document.getElementById('errorPassword').style.color = "red";
//         document.getElementById('errorPassword').innerHTML = "Required Password"
//     }
//     validInput();
// }

// function validInput() {
//     if (validEmail && validPassword) {
//         document.getElementById("loginButton").disabled = false;
//         document.getElementById("locinIcon").disabled = false;
//     } else {
//         document.getElementById("loginButton").disabled = true;
//         document.getElementById("locinIcon").disabled = true;
//     }
// }*/
</script>

</html>