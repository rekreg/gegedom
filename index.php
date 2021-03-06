<?php
require_once("includes/functions.php");

if($_SERVER['REQUEST_METHOD'] === "POST") {
    
    
  redirect("find_dom.php");  
    
}



?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Документ без названия</title>

<!-- Bootstrap style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Bootstrap Theme style -->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-zF4BRsG/fLiTGfR9QL82DrilZxrwgY/+du4p/c7J72zZj+FLYq4zY00RylP9ZjiT" crossorigin="anonymous">
    
    
<!-- Bootstrap Select style -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
    
    
    
<link href="css/one-page-wonder.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


</head>

<body>

<?php include("includes/top_nav.php"); ?> 
   

 
    
  <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline_index">
            <div class="container">
              <!--  <h1>Выберете</h1>
                <h2>Will Knock Your Socks Off</h2>-->
                
                
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <form role="form" method="post">
                   
        
        <div class="row">
        <div class="col-xs-12">
              <div class="form-group">
                  <select id="region" class="form-control">
                      <option>Москва</option>
                      <option>Санкт-Петербург</option>
                  </select>
              </div>
           </div>
          <!--  
           <div class="col-xs-12">
              <div class="form-group">
                  <select id="okrug" class="form-control">
                      <option>Юго-Западный Округ</option>
                      <option>Западный Округ</option>
                      <option>Южный Округ</option>
                  </select>
              </div>
           </div>
            -->
            
        </div>
        <button type="submit" class="btn btn-success" >Найти дом </button>
    </form> 
                    </div>
                
                </div>
                
                
                
                
                
            </div>
        </div>
    </header>    
    
    
    
    
<div class="container-fluid">
    
    
</div>
    
 
    
    
<?php include("includes/footer.php"); ?> 
    
    
    
    
<!-- jQuery -->  
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>    
    
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
<!-- Bootstrap Select JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/i18n/defaults-ru_RU.min.js"></script>
    
    
<script>
    
   $( document ).ready(function() {
     
       $('#region').selectpicker({
           'title': 'Выберите регион',
           'liveSearch': 'true'
       
       });
       $('#okrug').selectpicker('hide');


   
   });
    
    
    
</script>    
</body>
</html>