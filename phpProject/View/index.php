<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="res/materialize/css/materialize.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="res/materialize/js/materialize.js"></script>
    <script src="res/sss/sss.min.js"></script>
    <link rel="stylesheet" href="res/sss/sss.css" type="text/css" media="all">
    <script>
        $(function($) {
            $('.slider').sss();
        });
    </script>
</head>
<body>
<?php include 'header.php'?>
<br/>
<br/>
<br/>
<div>
    <div class="slider" style="width: 20%;margin: 0 auto">
        <img style="height: 300px;width: 400px" src="res/images/cosmetics5.jpg" />
        <img style="height: 300px;width: 400px" src="res/images/cosmetics4.jpg" />
        <img style="height: 300px;width: 400px" src="res/images/cosmetics3.jpeg" />
        <img style="height: 300px;width: 400px" src="res/images/cosmetics2.jpg" />
        <img style="height: 300px;width: 400px" src="res/images/cosmetics.jpg" />
    </div>
    </div>

<h2>Latest product Reviews</h2>
<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Product Review</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively. </p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Product Review</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Product Review</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
</body>
</html>
