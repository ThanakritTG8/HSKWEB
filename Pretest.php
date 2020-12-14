<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<body id="body">

    <!-- navbar -->
    <nav class="navbar navbar-light">
        <a class="navbar-brand">
            <h5 class="title">
                Karin Pimloy
            </h5>
        </a>
        <form action="Login.php" class="form-inline">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOG OUT</button>
        </form>
    </nav>

    <header class="masthead">
        <div class="jumbotron jumbotron-fluid" id="header">
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="text-center">Part: อ่าน</h4>
                </div>
                <div class="col-sm-8">
                    <h1 class="text-center">
                        1. ชำระเงินสด
                    </h1>
                </div>
                <div class="col-sm-2 text-center">
                    <h4 class="text-center">
                        <i class="fas fa-clock" aria-hidden="true"></i>
                        <span id="time"> 20:00</span> minutes!
                    </h4>
                </div>
            </div>
        </div>
    </header>


    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div class="card text-center form-check" id="choice">
                    <div class="card-body">
                        <h6 class="card-title form-check-label" for="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                1. 刷卡 shuākǎ
                            </label>
                        </h6>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center form-check" id="choice">
                    <div class="card-body">
                        <h6 class="card-title form-check-label" for="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                2. 签名 qiānmíng
                            </label>
                        </h6>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div class="card text-center form-check" id="choice">
                    <div class="card-body">
                        <h6 class="card-title form-check-label" for="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                3. 用信用卡 yòng xìnyòngkǎ
                            </label>
                        </h6>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center form-check" id="choice">
                    <div class="card-body">
                        <h6 class="card-title form-check-label" for="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                4. 付现金 fù xiànjīn
                            </label>
                        </h6>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    

    <!-- //////////////////script -->


    <script src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    </div>
</body>

</html>