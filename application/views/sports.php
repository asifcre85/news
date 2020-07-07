<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 20px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body style="background-image: url('<?php echo base_url();?>/uploads/black-background.jpg')">

<div style="height: 80px;background-color: #f2f2f2;padding-top: 1px;">
  <center>
    <h1 style="color: red">Malayalam News</h1>      
   
  </center>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>">Latest news</a></li>
        <li class="active"><a href="<?php echo base_url();?>/index.php/welcome/sports/">Sports</a></li>
        <li><a href="#">Entertainment</a></li>
        <li><a href="#">Travel</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>/index.php/welcome/login/"><span class="glyphicon glyphicon-user"></span>Login</a></li>
       <!--  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">ഐപിഎല്ലിലേക്ക് ഒരു മലയാളി കൂടി; സന്ദീപ് വാരിയർ കൊൽക്കത്ത ടീമിൽ</div>
        <div class="panel-body"><a href="<?php echo site_url();?>/welcome/sports2">
          <img src="<?php echo base_url();?>/uploads/ipl070418_1-4b5.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">കൊച്ചി∙ മലയാളി പേസ് ബോളർ സന്ദീപ് വാരിയർ ഐപിഎല്ലിൽ കൊൽക്കത്ത നൈറ്റ് റൈഡേഴ്സ് ടീമിൽ. ഇന്നലെ വൈകിട്ടാണ് സന്ദീപിനെ തേടി ടീമിന്റെ വിളി എത്തിയത്</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">ഐപിഎല്ലിലേക്ക് ഒരു മലയാളി കൂടി; സന്ദീപ് വാരിയർ കൊൽക്കത്ത ടീമിൽ</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/uploads/ipl070418_1-4b5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">കൊച്ചി∙ മലയാളി പേസ് ബോളർ സന്ദീപ് വാരിയർ ഐപിഎല്ലിൽ കൊൽക്കത്ത നൈറ്റ് റൈഡേഴ്സ് ടീമിൽ. ഇന്നലെ വൈകിട്ടാണ് സന്ദീപിനെ തേടി ടീമിന്റെ വിളി എത്തിയത്</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">ഐപിഎല്ലിലേക്ക് ഒരു മലയാളി കൂടി; സന്ദീപ് വാരിയർ കൊൽക്കത്ത ടീമിൽ</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/uploads/ipl070418_1-4b5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">കൊച്ചി∙ മലയാളി പേസ് ബോളർ സന്ദീപ് വാരിയർ ഐപിഎല്ലിൽ കൊൽക്കത്ത നൈറ്റ് റൈഡേഴ്സ് ടീമിൽ. ഇന്നലെ വൈകിട്ടാണ് സന്ദീപിനെ തേടി ടീമിന്റെ വിളി എത്തിയത്</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">ഐപിഎല്ലിലേക്ക് ഒരു മലയാളി കൂടി; സന്ദീപ് വാരിയർ കൊൽക്കത്ത ടീമിൽ</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/uploads/ipl070418_1-4b5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">കൊച്ചി∙ മലയാളി പേസ് ബോളർ സന്ദീപ് വാരിയർ ഐപിഎല്ലിൽ കൊൽക്കത്ത നൈറ്റ് റൈഡേഴ്സ് ടീമിൽ. ഇന്നലെ വൈകിട്ടാണ് സന്ദീപിനെ തേടി ടീമിന്റെ വിളി എത്തിയത്</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">ഐപിഎല്ലിലേക്ക് ഒരു മലയാളി കൂടി; സന്ദീപ് വാരിയർ കൊൽക്കത്ത ടീമിൽ</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/uploads/ipl070418_1-4b5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">കൊച്ചി∙ മലയാളി പേസ് ബോളർ സന്ദീപ് വാരിയർ ഐപിഎല്ലിൽ കൊൽക്കത്ത നൈറ്റ് റൈഡേഴ്സ് ടീമിൽ. ഇന്നലെ വൈകിട്ടാണ് സന്ദീപിനെ തേടി ടീമിന്റെ വിളി എത്തിയത്</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">ഐപിഎല്ലിലേക്ക് ഒരു മലയാളി കൂടി; സന്ദീപ് വാരിയർ കൊൽക്കത്ത ടീമിൽ</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/uploads/ipl070418_1-4b5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">കൊച്ചി∙ മലയാളി പേസ് ബോളർ സന്ദീപ് വാരിയർ ഐപിഎല്ലിൽ കൊൽക്കത്ത നൈറ്റ് റൈഡേഴ്സ് ടീമിൽ. ഇന്നലെ വൈകിട്ടാണ് സന്ദീപിനെ തേടി ടീമിന്റെ വിളി എത്തിയത്</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center" style="height: 50px;font-weight: bold;">
  <p>Online News Copyright</p>  
  <!-- <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form> -->
</footer>

</body>
</html>
