<?php session_start();
      require 'includes/common.php';

?>

﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>H Square</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- For Glyphicons -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<?php include 'includes/header.php'; ?>
<div id="banner_image">
  <div class="container-fluid">
  <div class="content">
    <div class="banner-image">
      <div class="inner-banner-image">
        <center>
          <div id="banner_content">
              <h1>Connect With Us!</h1>
              <p>Flat 40% OFF on all courses</p>
              <a href="courseDisplay.php" class="btn btn-primary btn-lg active">View Courses</a>
          </div>
        </center>
      </div>
    </div>
  </div>
  </div>
</div>


<div style="margin:20px;border:1px solid #cacdce;padding-bottom:2%;" id="contactUs">
    <div class="contact">
      <div class="jumbotron jumbotron-sm jumbotronh jumbotron-smh">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-lg-12 ">
                  <h1 class="h1">
                      Contact us </h1>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="well well-sm">

                                                    <p style="color:green">
                                                      <?php if(isset($_GET['success'])){
                                                        echo $_GET['success'];
                                                      } ?>
                                                    </p>
                  <form action="contact.php" method="post">
                  <div class="row">

                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Name</label>
                              <input type="text" class="form-control" name="nameC" placeholder="Enter name" required="required" />
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon mailIcon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input type="email" class="form-control" name="emailC" placeholder="Enter email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Subject</label>
                              <select id="subject" name="subject" class="form-control" required="required">
                                  <option value="na" selected="">Choose One:</option>
                                  <option value="service">General Customer Service</option>
                                  <option value="suggestions">Suggestions</option>
                                  <option value="product">Support</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Message</label>
                              <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="Message"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                              Send Message</button>
                      </div>
                  </div>
                  </form>
              </div>
          </div>

          <div class="col-md-4">
              <form>
              <legend class="legSpace"><span class="glyphicon glyphicon-globe"></span> Our office</legend>
              <address>
                  <strong>HSquare</strong><br>
                  #24/1, 2nd Cross<br>
                  Bengaluru, India<br>
                  <abbr title="Phone">
                      P:</abbr>
                  9964580124
              </address>
              <address>
                  <strong>Mail Us : </strong>
                  <a href="mailto:#">hemalathaharshitha2@gmail.com</a>
              </address>
              </form>
          </div>
      </div>
  </div>
  </div>
</div>

<!--------------------About us start-------------------->
<div class="aboutus-section" id="aboutUs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text">We know what we are, but know not what we may be. eLearning is changing. And, we will see new models, new technologies and designs emerge. So, let’s drop the “e” – or at least give it a new and wider definition.</p>
                        <p class="aboutus-text">We are here to provide a easy way of learning whereever you are, whatever you are and whenever. </p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Learn with heart</h4>
                                    <p>Online learning is not the next big thing, it is the now big thing.</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Insight</h4>
                                    <p>We think about what the learners need to do with the information or skill gained, after the course is finished and design around that</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Great support</h4>
                                    <p>We need to bring learning to people instead of people to learning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------------------About us end-------------------->
<?php include 'includes/footer.php'; ?>
</body>
</html>
