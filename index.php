<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="lib/main.css" />
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alegreya Sans SC" rel="stylesheet">
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link href="quiztheme.css" rel="stylesheet" type="text/css">

        <style>
            /* Make the image fully responsive */
        </style>

        <script type="text/javascript">


            window.onload = function () {
                document.querySelector("#btnSubmit").addEventListener("click", simple, false);
            }

            function simple(e) {
                e.preventDefault();
                try {
                    var allInputs = document.querySelectorAll("input");
                    allInputs.forEach(function (item) {
                        if (item.value == null || item.value.length == 0 || item.value == "") {
                            throw "***ERROR*** " + item.id + " cannot be empty!";

                        }
                    });
                    var obj = {
                        "username": allInputs[0].value,
                        "password": allInputs[1].value,
                        "email": allInputs[2].value
                    }
                    var url = "account/";
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = () => {
                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                            console.log(xmlhttp.responseText);
                        }
                    };
                    xmlhttp.open("POST", url, true);
                    xmlhttp.send(JSON.stringify(obj));
                } catch (ex) {
                    console.log(ex);
                }
            }

        </script>
    </head>
    <body>

        <div class="row header">
            <h1>Bass Pro Shoppe Quiz App</h1>
            <h3>Fish for some learning!</h3>
        </div>
        <div class="container-fluid quizcontainer">
            <div class="row user"></div>
            <div class="login jumbotron">

                <div class="row">

                         <h2>Welcome!</h2> 
                         <br>
                        <div id="myCarousel" class="carousel slide fishousel" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner fishousel">
                                <div class="item active">
                                    <img src="51NLSAJZdnL.jpg" alt="Los Angeles">
                                </div>

                                <div class="item">
                                    <img src="R33VLBVL3WL51400264804627.jpg" alt="Chicago">
                                </div>

                                <div class="item">
                                    <img src="largemouth-bass-slippers-29119.jpg" alt="New york">
                                </div>
                                <br><br>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                </div>


                <div class="row login2">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                <form method="POST">
                    <div>
                        <div>Username: <input type="text" id="username" class="form-control" required></div>
                        <div>Password: <input type="password" id="password" class="form-control" required aria-complete="list" aria-autocomplete="list"></div>
                        <div>Email: <input type="email" id="email" class="form-control" required></div>
                        <div><button id="btnSubmit" class="btn btn-lg btn-primary btn-block">Submit</button></div>
                        <br><br>
                        <a href="settings.html">Settings</a>
                        <br>
                        <a href="login.html">Login</a>
                    </div>
                </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

            </div>
        </div>
    </body>
</html>
