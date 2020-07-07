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

<div class="container" style="background-color: #f2f2f2;font-weight: bold;font-size: 20px;">
<?php 
                $query = $this->db->query('SELECT g1 FROM news where id=3');
                foreach ($query->result() as $row)
        {
          ?>
  <img src="<?php echo base_url();?>/uploads/<?php echo $row->g1;?>" class="img-responsive" style="width:100%;height: 400px;" alt="Image">
   <?php
               }
                ?>
<br>
<?php 
                $query = $this->db->query('SELECT n3 FROM news where id=3');
                foreach ($query->result() as $row)
        {
          ?>
           <?php echo $row->n3;?>
               <?php
             }
                ?>


  </div>
<br><br>

</body>
</html>