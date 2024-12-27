<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="themes/basic/template.css">

    <title>Login to your online bank account!</title>

	<link rel="shortcut icon" href="favicon.ico?r=random1" type="image/x-icon">
	<link rel="icon" href="favicon.ico?r=random1" type="image/x-icon">
	<link rel="favicon" href="favicon.ico?r=random1" type="image/x-icon">

  </head>
  <body>

  <?php
  // Define username and password
  $account_Number = '67028804613198';
  $password = 'D019rodd1ineucker';

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $input_username = $_POST['account_Number'];
    $input_password = $_POST['password'];

    // Check if credentials are correct
    if ($input_username == $account_Number && $input_password == $password) {
      // Redirect to next page
      header('Location: account.html');
      exit;
    } else {
      // Display error message
      $error_message = 'Invalid username or password';
    }
  }
?>

  	<div class="preheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <nav>
                        <ul> 
                            <li>Products</li>
                            <li>Services</li>
                            <li>Help</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <header>    

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-top:8px;">
                    <span id="logo" class="oi" data-glyph="glyph"></span>BANK NAME</h2>

                    <div class="header-menu">

                        <nav>
                            <ul class="nav mx-auto">
                                <li class="nav-item"><a class="nav-link" href="#">Personal</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Business</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" onclick="triggerInactive()">Investing</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                <li class="nav-item"><a class="nav-link"  id="log" href="/logout.php">About</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="menu">

        

        <div class="dog">
            <div class="container">
                <div id="sideswap" class="row"></div>
                
                        <div id="login-box" class="epic">
                            
                          
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <label for="account_Number">Account number:</label>
                                <input type="number" id="username" name="account_Number" placeholder="ACCOUNT NUMBER"><br><br>
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" placeholder="PASSWORD"><br><br>
                                <input type="submit" value="Login" style="background-color: burlywood;">
                              </form> 
                              <?php if (isset($error_message)) { echo '<p style="color:red;">' . $error_message . '</p>'; } ?>
                        
                        <a id="applyToday" href="#">Apply Today</a>

                    </div>
                    
                </div> <br> 

            	<div class="col-md-8 headline"> <br>  <br> 
                    <br> 
                    <br> 

                <br> 
            	 <br> 
                     
            		<br />

            		<div id="mobile" class="darker">
                        <h3>Mobile App</h3>
                        <p>Download our state of the art mobile banking suite today!</p>
                        <a href="#">Try Mobile Banking</a>
                        <img src="/img/GooglePlay.svg" /><img src="/img/AppStore.svg" />

                    </div>
            	</div>
                
            </div>
        </div>

    </div>

   


 
        
        </div>
    </div>

    <div class="content" style="background-color: rgb(70, 62, 51);">   
        <div class="container">

            <div id="homecontent" class="row">
                <div class="col-md-8">
                    <h3>Banking doesn't have to be complicated, but it is anyways.</h3>
                    <p>We're passionate about getting your money in our bank and will stop at nothing to make it happen. In todays dog-eat-dog-eat-cat-eat-bird-eat-worm world we have to rely on powerful allies. As said powerful allies to many powerful world leaders, we can be the answer to your problems. </p>

                    <p>Did you know banking can solve a world of problems?<br /> Here at <?php echo $_BANKNAME; ?> we solve the worlds problems of tomorrow, today. We put the you in community. There's no physical branches so we can keep the saving flowing.</p>
                   
                </div>
                <div id="ccbox" class="col-md-4">
                    <div class="thing">
                        <h4>Competitive Rates</h4>
                        <ul>
                            <li>Mortgage 15yr <span>5.05</span></li>
                            <li>Mortgage 30yr <span>6.9</span></li>
                            <li>5yr CD  <span>0.05%</span></li>
                            <li>War Bond <span>1.3%</span></li>
                        </ul>
                        <small><a href="#">Disclosures</a></small>
                    </div>
                    <div class="thing">
                        <h4>Today's Rates</h4>
                        <ul>
                            <li>Auto Loans <span>4.20</span></li>
                            <li>Home Equity Loans <span>6.54</span></li>
                            <li>Mortgage 15yr <span>5.05</span></li>
                            <li>Mortgage 30yr <span>6.9</span></li>
                        </ul>
                        <small><a href="#">Disclosures</a></small>
                    </div>
                    <div class="thing">
                        <h4>Refer A Friend!</h4>
                        <img width="250" src="https://images.unsplash.com/photo-1560472355-536de3962603?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" /><br />
                        <a href="#">Learn More</a>
                    </div>
                    <div class="thing">
                        <h4>Questions?</h4>
                        <p>We have representitives standing by 24/7</p>
                        <a href="#">Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rates" class="content shaded" style="background-color: rgb(98, 105, 103);">

        <div class="container" >

            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h3>Cash Me Outside, How 'Bout That!</h3>
                </div>
                <div class="col-md-4" >
                    <h5>Online Transfers</h5>
                    <h1>0.42%</h1>
                    <a href="#">Details ></a>
                </div>
                <div class="col-md-4">
                    <h5>Credit Card</h5>
                    <h1>0.12%</h1>
                    <a href="#">Details ></a>
                </div>
                <div class="col-md-4">
                    <h5>International</h5>
                    <h1>1.37%</h1>
                    <a href="#">Details ></a>
                </div>
            </div>
        </div>
    </div>

    <div class="content footer" style="background-color: black;">
        <div class="container " >


            <p >Member FDIC: No. Rates and investment products are not insured.
</p>
<p  >
The bank information provided on this website is only valid for those living in states that end in G and no others. Any attempt to use this website without authorized access is prohibited by the 11th circuit court of the high magistrates. No offers may be made or accepted from any resident outside of these states due to various state regulations and registration requirements regarding investment products and services.</p>

<p>            &copy; Copyright <?php echo date('Y'); ?> GGNOREE LLP, LLC, UDP.
</p>
        </div> 
        </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/script.js"></script>
  </body>
</html>