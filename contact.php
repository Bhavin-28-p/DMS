<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DMS | Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>
<body>
    <!-- ----------------------------------------NAVBAR----------------------------------------------------->
    <nav class="nav nav_top">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" width="250"></a>
        </div>
        <div class="nav_side">
            <a href="ngodash.php">HOME</a>
            <a href="about.php">ABOUT US</a>
           <a href="ngo-list.php">DONATE</a>
            <a href="contact.php">CONTACT</a>
            <a href="login.php">LOGIN/REGISTER</a>
            
        </div>
    </nav>
    <!-- --------------------------------------------CONTACT-------------------------------------------------------->
    <div class="contact-container" style="padding-top:100px;">
        <h2>CONTACT US</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="g_map">
                    <iframe src="https://www.google.com/maps/place/KLS+Platinum+Jubilee+building,+R+L+Law+College+Belagavi+%26+Gogte+College+of+Commerce/@15.8336584,74.5061351,1260m/data=!3m1!1e3!4m7!3m6!1s0x3bbf668668f8f17f:0x39290ecdca6354f1!4b1!8m2!3d15.8334536!4d74.5091308!16s%2Fg%2F1ttpfb7f?hl=en-IN&entry=ttu" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="contact_content">
                    <p>We want to hear from you! Drop us a note and someone from our team will get back to you.
                        Looking to volunteer or supporting us in any other ways? Call +1111100000
                        Have a question that involves Charity Jet? Please head on over to our Locations page to reach our locations.</p>
                    <p><b>Call: +111100000</b></p>
                    <p><b>Mail: support.charityjet@gmail.com</b></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="query_form">
                    <h3>Send Us a Query</h3>
                    <form id="query_form">
                        <div class="form-group">
                            <label for="user_id">User ID</label>
                            <input type="text" id="user_id" name="user_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="query">Query</label>
                            <textarea id="query" name="query" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- --------------------------------------------FOOTER-------------------------------------------------------->
    <footer>
        <div class="pages"> 
            <a href="index.html"><img class="aimg" src="images/logo.png" width="250"></a> 
            <p>DMS cares for needy children by empowering their caregivers to do their best work, with compassion, grace, integrity and excellence. Our end goal is to support children worldwide and see every child reach the potential that God has for them.</p>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="doc">
            <h3>Navigation</h3>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="ngo-list.html">DONATE</a>
            <a href="contact.html">Contact</a>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <a href="contact" target="_blank">4486 Richards Avenue, Modesto CA - 95354</a>
            <a href="tel: +910000000000">200-000-0000</a>
            <a href="mailto: ppppppp@gmail.com">charityjet@gmail.com</a>
        </div>
        <div class="social">
            <h3>Support</h3>
            <p>Help us shape a better future fot children all over the world</p>
            <div class="side_btn">
                <a href="contact.html">JOIN US TODAY</a>
            </div>
        </div>
        <hr>
        <p>Copyright &copy; 2024 DMS GCCBCA. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('query_form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            // You can add your form validation or data handling here if needed
            window.location.href = 'thankyou.html'; // Redirect to ttt.html
        });
    </script>
</body>
</html>
