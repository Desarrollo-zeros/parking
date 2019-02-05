<!DOCTYPE html>
<html lang="en">
<head>
    <title>Parking UPC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/images/logo.png" alt="IMG">
            </div>

            <form id="formLogin" class="login100-form validate-form">
					<span class="login100-form-title">
						PARKING UPC
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Formato mail valido: ex@abc.xyz">
                    <input class="input100" type="text" name="email" id="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Contraseña no puede estar vacia">
                    <input class="input100" type="password" name="password" id="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" value="Iniciar Session" />
                </div>
                <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Para usar el sistema de parking debe tener una cuenta
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/notify.min.js"></script>

<script>
    var url = '{{url('')}}';
    var csrf_token = '{{csrf_token()}}';

    $("#formLogin").on("submit",function (form) {
        form.preventDefault();

        var obj = new Object();
        obj.email = $("#email").val();
        obj.password = $("#password").val();
        post(url+"/login",obj,"POST",csrf_token).then(
            data => {
                if(data){
                    window.location.href = "/panel";
                }else{
                    $.notify("usuario y/o Contraseña incorrecta");
                }
            }
        );
    })
</script>

</body>
</html>