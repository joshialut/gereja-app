<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Halaman Depan</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap");

    * {
        background-image: url(/image/home.jpg);
        background-size: cover;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        color: wheat;

    }

    .bg-img {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
    }

    .bg-img:after {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 999;
        text-align: center;
        padding: 60px 32px;
        width: 370px;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.04);
        box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
    }

    .content header {
        color: black;
        font-size: 33px;
        font-weight: 600;
        margin: 0 0 35px 0;
        font-family: "Montserrat", sans-serif;
    }

    .links {
        /* display: flex; */
        cursor: pointer;
        color: white;
        margin: 0 0 20px 0;
    }

    .btn-login,
    .btn-register {

        width: 100%;
        height: 45px;
        line-height: 45px;
        margin-bottom: 10px;

    }

    .btn-login {
        background: #4267b2;
        border: 1px solid #3e61a8;
    }

    .btn-register {
        background: #e1306c;
        border: 1px solid #df2060;
    }
</style>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Selamat Datang</header>
            <div class="links">
                <a href="{{ route('login') }}">
                    <div class="btn-login">
                        Login
                    </div>
                </a>
                <a href="{{ route('register') }}">
                    <div class="btn-register">
                        Register
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
