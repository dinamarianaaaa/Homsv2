<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style_4.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <strong><?php echo validation_errors(); ?></strong>
                        <h4 align="center" style="color: red"><?php echo $err_message;?></h4>
                        <form method="POST" class="register-form" id="register-form" action="<?php echo base_url('register'); ?>">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required="" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-smartphone-android"></i></label>
                                <input type="number" name="phone_number" id="phone_number" placeholder="Your Phone Number" required="" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required=""  onkeyup="checkPass()" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required="" onkeyup="checkPass()" />
                            </div>
                            <!-- <br> -->
                                <span id="confirmMessage" class="confirmMessage"></span>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url(); ?>/assets/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="./login" class="signup-image-link">I am already member</a>
                    </div>
                    
                </div>
            </div>
            
        </section>

        <!-- JS -->
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
        <script type="text/javascript">
            function checkPass() {

                var get_elem = document.getElementById,
                pass1 = document.getElementById('pass'),
                pass2 = document.getElementById('re_pass'),
                message = document.getElementById('confirmMessage'),
                colors = {
                    goodColor: "#fff",
                    goodColored: "#087a08",
                    badColor: "#fff",
                    badColored:"#ed0b0b"
                },
                strings = {
                    "confirmMessage": ["Password is match", "Password doesn't match"]
                };

                if(pass.value === re_pass.value && (pass.value + re_pass.value) !== "") {
                    re_pass.style.backgroundColor = colors["goodColor"];
                    message.style.color = colors["goodColored"];
                    message.innerHTML = strings["confirmMessage"][0];
                }
                else if(!(re_pass.value === "")) {
                    re_pass.style.backgroundColor = colors["badColor"];
                    message.style.color = colors["badColored"];
                    message.innerHTML = strings["confirmMessage"][1];
                }
                else {
                    message.innerHTML = ""; 
                }

            }  

        </script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    </html>