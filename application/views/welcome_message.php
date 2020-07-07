<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
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
<body>

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
        <li class="active"><a href="#">Latest news</a></li>
        <li><a href="<?= base_url();?>/index.php/welcome/sports/">Sports</a></li>
        <li><a href="#">Entertainment</a></li>
        <li><a href="#">Travel</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>/index.php/welcome/login2/"><span class="glyphicon glyphicon-user"></span>Login</a></li>
       <!--  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
           <?php 
                $query = $this->db->query('SELECT n1 FROM news where id=1');
                foreach ($query->result() as $row)
        {
          ?>
           <?php echo $row->n1;?>
               <?php
             }
                ?>
        </div>
        <div class="panel-body">
          <?php 
                $query = $this->db->query('SELECT g1 FROM news where id=1');
                foreach ($query->result() as $row)
        {
          ?>
          <a href="<?php echo site_url();?>/welcome/politics2">
          <img src="<?php echo base_url();?>/uploads/<?php echo $row->g1;?>"  class="img-responsive" style="width:100%;height: 200px;" alt="Image">
          <?php
               }
                ?>
              </a>
        </div>
        <div class="panel-footer"><?php 
                $query = $this->db->query('SELECT n2 FROM news where id=1');
                foreach ($query->result() as $row)
        {
          ?>
           <?php echo $row->n2;?>
               <?php
             }
                ?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
       <div class="panel-heading">
           <?php 
                $query = $this->db->query('SELECT n1 FROM news where id=2');
                foreach ($query->result() as $row)
        {
          ?>
           <?php echo $row->n1;?>
               <?php
             }
                ?>
        </div>
        <div class="panel-body">
          <?php 
                $query = $this->db->query('SELECT g1 FROM news where id=2');
                foreach ($query->result() as $row)
        {
          ?>
          <a href="<?php echo site_url();?>/welcome/film2">
          <img src="<?php echo base_url();?>/uploads/<?php echo $row->g1;?>"  class="img-responsive" style="width:100%;height: 200px;" alt="Image">
          <?php
               }
                ?>
              </a>
        </div>
       <div class="panel-footer"><?php 
                $query = $this->db->query('SELECT n2 FROM news where id=2');
                foreach ($query->result() as $row)
        {
          ?>
           <?php echo $row->n2;?>
               <?php
             }
                ?></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
           <?php 
                $query = $this->db->query('SELECT n1 FROM news where id=3');
                foreach ($query->result() as $row)
        {
          ?>
           <?php echo $row->n1;?>
               <?php
             }
                ?>
        </div>
        <div class="panel-body">
          <?php 
                $query = $this->db->query('SELECT g1 FROM news where id=3');
                foreach ($query->result() as $row)
        {
          ?>
          <a href="<?php echo site_url();?>/welcome/sports2">
          <img src="<?php echo base_url();?>/uploads/<?php echo $row->g1;?>"  class="img-responsive" style="width:100%;height: 200px;" alt="Image">
          <?php
               }
                ?>
              </a>
        </div>
        <div class="panel-footer"><?php 
                $query = $this->db->query('SELECT n2 FROM news where id=3');
                foreach ($query->result() as $row)
        {
          ?>
           <?php echo $row->n2;?>
               <?php
             }
                ?></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">ടോം വടക്കന്‍ ബിജെപിയില്‍; കോണ്‍ഗ്രസ് വിട്ടത് പുല്‍വാമ നിലപാടില്‍ പ്രതിഷേധിച്ച്‌</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/images/Kerala_3.jpg" class="img-responsive" style="width:100%;height: 200px;" alt="Image"></div>
        <div class="panel-footer">ന്യൂഡൽഹി∙ എഐസിസി മുൻ വക്താവ് ടോം വടക്കൻ ബിജെപിയിൽ ചേർന്നു. പുൽവാമ ആക്രമണത്തിലെ കോൺഗ്രസ് നിലപാടിൽ</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">നേതാക്കൾ മുഴുവൻ സ്ഥാനാർഥികൾ ആകേണ്ട: ബിജെപി കേന്ദ്രനേതൃത്വം</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/images/Mammootty_EPS.jpg" class="img-responsive" style="width:100%;height: 200px;" alt="Image"></div>
        <div class="panel-footer">ന്യൂഡൽഹി∙ എഐസിസി മുൻ വക്താവ് ടോം വടക്കൻ ബിജെപിയിൽ ചേർന്നു. പുൽവാമ ആക്രമണത്തിലെ കോൺഗ്രസ് നിലപാടിൽ</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">ടോം വടക്കന്‍ ബിജെപിയില്‍; കോണ്‍ഗ്രസ് വിട്ടത് പുല്‍വാമ നിലപാടില്‍ പ്രതിഷേധിച്ച്‌</div>
        <div class="panel-body"><a href="<?php echo site_url();?>/welcome/sports2">
          <img src="<?php echo base_url();?>/images/ipl070418_1-4b5.jpg" class="img-responsive" style="width:100%;height: 200px;" alt="Image">
        </a></div>
        <div class="panel-footer">കൊച്ചി∙ മലയാളി പേസ് ബോളർ സന്ദീപ് വാരിയർ ഐപിഎല്ലിൽ കൊൽക്കത്ത നൈറ്റ് റൈഡേഴ്സ് ടീമിൽ. ഇന്നലെ വൈകിട്ടാണ്</div>
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
