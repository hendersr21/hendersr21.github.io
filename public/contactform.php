<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='icon' href="images/favicon.png" type='image/x-icon'/>
    <title>Robert Henderson Contact</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  <body class="size-1140">
  	  <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="images/220908_Henderson-lawn+sign-FINAL.pdf.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="images/220908_Henderson-lawn+sign-FINAL.pdf.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="index.html">Home</a></li>
            <li><a href="SBOE.html">DC SBOE</a></li> 
            <li><a href="writing.html">Writing</a></li>
            <li><a href="historical.html">Historical Research</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Contact Me</h1>
            <p class="margin-bottom-0 text-size-16">Please reach out to me if you would like to discuss my research<br>or DC education, or if you would like to join the Ward 5 Education<br>Equity Committee.</p>
          </div>  
        </header>
        
          <div class="line">
            <div class="margin">
              <!-- Contact Form -->
              <div class="s-12 m-12 l-6">
                <h2 class="margin-bottom-10">Leave Message</h2>
<?php
  if(isset($_POST['submit'])){
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
      $name_error = 'Invalid name';
    }
    if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
      $subject_error = 'Invalid subject';
    }
    if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
      $email_error = 'Invalid email';
    }
    if(strlen($message) === 0){
      $message_error = 'Your message should not be empty';
    }
  }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" name="name">
  <p><?php if(isset($name_error)) echo $name_error; ?></p>
  <label for="subject">Subject:</label><br>
  <input type="text" name="subject">
  <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
  <label for="email">Email:</label><br>
  <input type="text" name="email">
  <p><?php if(isset($email_error)) echo $email_error; ?></p>
  <label for="message">Message:</label><br>
  <textarea name="message"></textarea>
  <p><?php if(isset($message_error)) echo $message_error; ?></p>
  <input type="submit" name="submit" value="Submit">
  <?php 
    if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
      $to = 'hendersr21@yahoo.com'; // edit here
      $body = " Name: $name\n E-mail: $email\n Message:\n $message";
      if(mail($to, $subject, $body)){
        echo '<p style="color: green"></p>';
      }else{
        echo '<p></p>';
      }
    }
  ?>
</form>
  </div>
              </div>
            </div>    
          </div>  
        </div> 
      </article>
    </main>    
<!-- FOOTER -->
    <footer>
      <div class="background-primary padding text-center">
        <p class="h1" style="color: #F8BE00">Robert Henderson for Ward 5</p>                                                                        
      </div>
 <!-- Main Footer -->
      <section class="background-dark full-width">
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">	  
            <a class="twitter-timeline" data-height="400" href="https://twitter.com/@Henderson4Ward5?ref_src=twsrc%5Etfw">Tweets by Henderson4Ward5</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
          </div>
        </div>
 <!-- Column 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Address</h3>
                  <p>Ft. Lincoln<br>
                     Washington, DC
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>robert.henderson at dc.gov
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone Numbers</h3>
                  <p>Upon request
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
    <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
          <div class="line">
          <h2 class="text-size-12 text-center">Content Copyright 2024, Robert Henderson; Code Attribution: 2019 Vision Design - graphic zoo <a href="http://www.myresponsee.com"> Design and coding by Responsee Team</a>
          <hr class="break-small background-primary break-center">
        </div> <div class="s-12 l-12">
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>
