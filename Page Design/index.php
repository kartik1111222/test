<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .div1 {
            padding-top: 10%;
            width: 50%;
            height: 800px;
            background-color: blue;

        }

        .div2 {
            padding: 1%;
            padding-top: 10%;
            width: 50%;
            height: 800px;
        }

        .main {
            margin-top: 10px;
        }

        .emailcard {
            margin-top: 40px;
        }

        .password {
            margin-top: 50px;
        }

        .checkbox {
            margin-top: 20px;
        }

        .member {
            margin-left: 410px;
            margin-top: -30px;
        }

        .button {
            border-radius: 25px;
            margin-top: 20px;
        }

        .fa-eye {
            margin-left: 490px;
            margin-bottom: -29px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="div1">
                <div class="text-left" style="color:white">
                    Company Name
                </div>
                <h3 class="text-center" style="margin-top: 200px; color:white">Nice to see you again.</h3>
                <h1 class="main text-center" style="color:white">WELCOME BACK</h1>
                <p class="text-center" style="font-size: 14px; margin-top: 20px; color:white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

            </div>
            <div class="div2">
                <h2 class="text-center header" style="color: darkblue">Login Account</h2>
                <p class="text-center" style="font-size: 12px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <form>
                    <div class="emailcard">
                        <div class="card" style="width: 35rem;">
                            <div class="card-body">
                                <input type="email" name="email" class="form-control" placeholder="Email ID">
                            </div>
                        </div>
                        <!-- <input type="email" name="" class="form-control" placeholder="Email ID"> -->
                    </div>
                    <div class="password">
                        <div class="card" style="width: 35rem;">
                            <div class="card-body">
                           <!-- / <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password">Show/Hide</span> -->
                                <i class="fa-solid fa-eye showpassword"></i>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <!-- <input type="password" name="" class="form-control" placeholder="Password"> -->
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
                        <label for="vehicle1">Keep me Signed in.</label>
                    </div>
                    <div class="member">
                        <a style="color: darkblue">Already a member?</a>
                    </div>
                    <div class="text-center button">
                        <button class="button button btn btn-primary btn-block">SUBSCRIBE</button>
                        <!-- <button class="button button5">50%</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $("body").on('click', '.showpassword', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#password");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });

    });
</script>