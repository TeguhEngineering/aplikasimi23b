<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MI23B | Log in (v2)</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="adminlte/css/adminlte.min.css?v=3.2.0">

    <style>
        .background {
            --s: 200px;
            /* control the size */
            --c1: #1d1d1d;
            --c2: #4e4f51;
            --c3: #3c3c3c;

            background: repeating-conic-gradient(from 30deg,
                    #0000 0 120deg,
                    var(--c3) 0 180deg) calc(0.5 * var(--s)) calc(0.5 * var(--s) * 0.577),
                repeating-conic-gradient(from 30deg,
                    var(--c1) 0 60deg,
                    var(--c2) 0 120deg,
                    var(--c3) 0 180deg);
            background-size: var(--s) calc(var(--s) * 0.577);
        }

        .form {
            position: relative;
            margin-top: 9%;
            display: block;
            padding: 2.2rem;
            max-width: 350px;
            background: linear-gradient(14deg, rgba(2, 0, 36, 0.8) 0%, rgba(24, 24, 65, 0.7) 66%,
                    rgb(20, 76, 99) 100%), radial-gradient(circle, rgba(2, 0, 36, 0.5) 0%,
                    rgba(32, 15, 53, 0.2) 65%, rgba(14, 29, 28, 0.9) 100%);
            border: 2px solid #fff;
            -webkit-box-shadow: rgba(0, 212, 255) 0px 0px 50px -15px;
            box-shadow: rgba(0, 212, 255) 0px 0px 50px -15px;
            overflow: hidden;
            z-index: +1;
        }

        /*------input and submit section-------*/

        .input-container {
            position: relative;
        }

        .input-container input,
        .form button {
            outline: none;
            border: 2px solid #ffffff;
            margin: 8px 0;
            font-family: monospace;
        }

        .input-container input {
            background-color: #fff;
            padding: 6px;
            font-size: 0.875rem;
            line-height: 1.25rem;
            width: 250px;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .input-nim:focus::placeholder {
            opacity: 0;
            transition: opacity .9s;
        }

        .input-pwd:focus::placeholder {
            opacity: 0;
            transition: opacity .9s;
        }

        .submit {
            position: relative;
            display: block;
            padding: 8px;
            background-color: #c0c0c0;
            color: #ffffff;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            width: 100%;
            text-transform: uppercase;
            overflow: hidden;
        }

        .submit:hover {
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
            border-radius: 3.9px;
            box-shadow: 4px 5px 17px -4px #ffffff;
            cursor: pointer;
        }

        .submit:hover::before {
            -webkit-animation: sh02 0.5s 0s linear;
            -moz-animation: sh02 0.5s 0s linear;
            animation: sh02 .5s 0s linear;
        }

        .submit::before {
            content: '';
            display: block;
            width: 0px;
            height: 85%;
            position: absolute;
            top: 50%;
            left: 0%;
            opacity: 0;
            background: #fff;
            box-shadow: 0 0 50px 30px #fff;
            -webkit-transform: skewX(-20deg);
            -moz-transform: skewX(-20deg);
            -ms-transform: skewX(-20deg);
            -o-transform: skewX(-20deg);
            transform: skewX(-20deg);
        }

        @keyframes sh02 {
            from {
                opacity: 0;
                left: 0%;
            }

            50% {
                opacity: 1;
            }

            to {
                opacity: 0;
                left: 100%;
            }
        }

        /*--------signup section---------*/

        .signup-link {
            color: #c0c0c0;
            font-size: 0.875rem;
            line-height: 1.25rem;
            text-align: center;
            font-family: monospace;
        }

        .signup-link a {
            color: #fff;
            text-decoration: none;
        }

        .up:hover {
            text-decoration: underline;
        }


        /*--------header section-----------*/

        .form-title {
            font-size: 1.25rem;
            line-height: 1.75rem;
            font-family: monospace;
            font-weight: 600;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            animation-duration: 1.5s;
            overflow: hidden;
            transition: .12s;
        }

        .form-title span {
            animation: flickering 2s linear infinite both;
        }

        .title-2 {
            display: block;
            margin-top: -0.5rem;
            font-size: 2.1rem;
            font-weight: 800;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            -webkit-text-stroke: #fff 0.1rem;
            letter-spacing: 0.2rem;
            color: transparent;
            position: relative;
            text-shadow: 0px 0px 16px #CECECE;
        }

        .title-2 span::before,
        .title-2 span::after {
            content: '—';
        }

        @keyframes flickering {

            0%,
            100% {
                opacity: 1;
            }

            41.99% {
                opacity: 1;
            }

            42% {
                opacity: 0;
            }

            43% {
                opacity: 0;
            }

            43.01% {
                opacity: 1;
            }

            47.99% {
                opacity: 1;
            }

            48% {
                opacity: 0;
            }

            49% {
                opacity: 0;
            }

            49.01% {
                opacity: 1;
            }
        }

        /*---------shooting stars-----------*/


        .bg-stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background-size: cover;
            animation: animateBg 50s linear infinite;
        }

        @keyframes animateBg {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }

        .star {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 4px;
            height: 4px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1), 0 0 0 8px rgba(255, 255, 255, 0.1), 0 0 20px rgba(255, 255, 255, 0.1);
            animation: animate 3s linear infinite;
        }

        .star::before {
            content: '';
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 300px;
            height: 1px;
            background: linear-gradient(90deg, #fff, transparent);
        }

        @keyframes animate {
            0% {
                transform: rotate(315deg) translateX(0);
                opacity: 1;
            }

            70% {
                opacity: 1;
            }

            100% {
                transform: rotate(315deg) translateX(-1000px);
                opacity: 0;
            }
        }

        .star:nth-child(1) {
            top: 0;
            right: 0;
            left: initial;
            animation-delay: 0s;
            animation-duration: 1s;
        }

        .star:nth-child(2) {
            top: 0;
            right: 100px;
            left: initial;
            animation-delay: 0.2s;
            animation-duration: 3s;
        }

        .star:nth-child(3) {
            top: 0;
            right: 220px;
            left: initial;
            animation-delay: 2.75s;
            animation-duration: 2.75s;
        }

        .star:nth-child(4) {
            top: 0;
            right: -220px;
            left: initial;
            animation-delay: 1.6s;
            animation-duration: 1.6s;
        }
    </style>

</head>

<body class="hold-transition login-page background">
    {{-- <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <span class="h3 font-weight-bold">APLIKASI INI KHUSUS <br> UNTUK MI23B</span> <br>
                <small class="h6">POLITEKNIK LP3I TASIKMALAYA</small>
            </div>

            <div class="card-body">
                @if (session()->has('loginError'))
                    <div class="form-control mb-3 bg-danger text-center">
                        <p><i class="fas fa-times"></i> <b>{{ session('loginError') }}</b></p>
                    </div>
                @endif

                <form action="/login" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="nim" class="form-control" placeholder="NIM">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit"
                                class="btn btn-primary btn-block mt-2 font-weight-bold">Login</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div> --}}

    {{-- <br><br><br> --}}

    {{-- Form Uiverse io --}}
    <div class="form">
        <div class="form-title"><span>MI23B</span></div>
        <div class="title-2"><span>LOGIN</span></div>

        @if (session()->has('loginError'))
            <button role="alert" class="submit" disabled>
                <span class="sign-text text-danger">{{ session('loginError') }}</span>
            </button>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="input-container">
                <input class="input-nim" name="nim" type="text" placeholder="NIM">

            </div>

            <section class="bg-stars">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
            </section>

            <div class="input-container">
                <input class="input-pwd" name="password" type="password" placeholder="Password">
            </div>
            <button type="submit" class="submit">
                <span class="sign-text">Login</span>
            </button>
        </form>

        {{-- <p class="signup-link">
            No account?
            <a href="" class="up">Sign up!</a>
        </p> --}}

    </div>




    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="adminlte/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
