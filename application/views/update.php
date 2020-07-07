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


<div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" style="color: black;">

          <?php $ids=$this->uri->segment(3);?>
<input type="text" hidden name="ids" class="ids" value="<?php echo $ids;?>">
          <input type="text" class="n1">
                <br>
                <!-- <input type="button" id="b1" value="save"> --></div>
        <div class="panel-body"><?php echo form_open_multipart('welcome/do_upload');?> 
         <input type = "file" name = "userfile" class="g1" size = "20" /> 
         <br>
         <input type = "submit" value = "upload" class="u1" />
         </div>
        <div class="panel-footer">
          <input type="text" class="n2"></p>
          <!--  <input type="hidden" id="ids" value="1"></p> -->
          <input type="text" class="n3" style="height: 100px;">
                <br>
                <input type="button" class="b1" id="1" value="save">
        </div>
      </div>
    </div>


    <script>
    $(document).ready(function(){
      
       $(".b1").on("click",function(){
        //var ids = $(this).attr('id');
         var n1 = $('.n1').val();
          var n2 = $('.n2').val();
          var n3 = $('.n3').val();
          var ids = $('.ids').val();
           var g = $('.g1').val();
           var g1 = g.replace(/^.*[\\\/]/, '');
         
             $.ajax({
        type: 'POST',
        url: '<?= site_url();?>/welcome/n/',
         data: { n1: n1,n2: n2,g1 :g1,n3 :n3,ids: ids },
      
        success: function(data) {
          //alert(name);
          alert('Update Success');
           window.location.href='<?= site_url();?>/welcome/login';

        }

       });
      });

     
      //  $("#u1").on("click",function(e){
         
      // // e.preventDefault();
      //  alert('Upload Success');
         
      //   });
       

      });
    </script>

</html>