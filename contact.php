<?php
require "Controller/App.php";
$app = new App();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/contact_us.css"/>
    <script type="text/javascript" src="js/forms.js"></script>
    <script type="text/javascript" src="js/map.js"></script>

    <title>PowerWashers</title>
</head>
<body>
<?php include("header.html") ?>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-12 col-lg-6 map-column">
            <div id="map"></div>
        </div>
        <script
                async
                defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC48-Hcs0h5FaXDkrw76EUufFJnMI_om-Y&callback=initMap"
        ></script>
        <div class="col-md-12 col-lg-6 contact-form">
            <h2>Contact us</h2>
            <form class="contact-form" onsubmit="sendEmail()" name="contact-form" method="POST">
                <div class="name-input">
                    <input type="text" name="name" id="name" placeholder="&#xF007;  Name" required/>
                </div>
                <div class="subject-input">
                    <input type="text"  name="subject" id="subject" placeholder="&#xF0e0;  Subject"
                           required/>
                </div>
                <div class="email-input">
                    <input type="email"  name="mail" id="mail" placeholder="&#xF0e0; Email"
                           required/>
                </div>
                <div class="message-input">
                     <textarea

                             cols="30"
                             rows="10"
                             placeholder="Enter your message"
                             name="message"
                             id="message"
                             required
                     ></textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-dark" name="send-mail" >SEND MAIL</button>
            </form>
        </div>
    </div>
</div>

<?php include("footer.php") ?>
</body>
</html>
