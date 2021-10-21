<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>Basic Banking System</title>
</head>

<!--<section>-->
<body>
    <?php
     include 'navbar.php';
     ?>

    <div class="container-fluid">
                   <!-- Introduction section -->
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3 style="color:majenta">"<b>Bussiness</b> and <b>Life</b> are like a<b> Bank</b> account 
                    you <b> can't take </b>out 
                    more than you <b> put</b> in. " </h3>
                    <h2>Welcome to</h2>
                    <h1>SPARKS BANK</h1>
                    </div>
                    </div>
                <div class="col-sm-12 col-md img text-center">
                    <img src="images/bg1.jpg" height="550" width="400" class="img-fluid pt-2">
                </div>

            </div>

                    <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="images/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="images/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="images/transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="images/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
    
       <!-- </section>-->

        <!--contact section-->
        <section id="contact">
            <div class="text-center" >
                <div class="contact container">
                    <div>
                        <h1 class="section-title">CONTACT <span>INFORMATION</span></h1>
                    </div>
                    <div class="text-center" >
                    <div class="contact-items">
                    <div class="contact-item">
                                      
                    <div class="icon"><img src="https://th.bing.com/th?q=Phone+Call+Icon+Blue&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-IN&adlt=moderate&t=1&mw=247" /></div>
                        <div class="contact-info">
                            <h3>Phone</h3>
                            <h4>+800-710-900  </h4>
                            <h4>+900-800-200  </h4>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon"><img src="https://th.bing.com/th?q=Small+Mail+Icon&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-IN&adlt=moderate&t=1&mw=247" /></div>
                            <div class="contact-info">
                                <h3>Email</h3>
                                <h4><a href="https://mail.google.com/mail/u/0/#inbox">sparksbank@intern.ac.in</a></h4>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon"><img src="https://th.bing.com/th?q=Location+Icon+Vector+Free&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-IN&adlt=moderate&t=1&mw=247" /></div>
                                <div class="contact-info">
                                    <h3>Address</h3>
                                    <h4><a href="https://www.google.com/maps/place/KR+Market/@12.9640742,77.5750543,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae15e237bea509:0xce4c611c72fb4398!8m2!3d12.964069!4d77.577243">Bengaluru, INDIA</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!--End of contact section-->
</div>
      
      <footer class="text-center mt-5 py-2" style="background-color:black;">
        <p>&copy 2021. Made by <b>RAMYA M</b>  <br>for sparks foundation internship </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>




