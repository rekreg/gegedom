<?php 

$year_of_built_ot = "";
$year_of_built_do = "";

$floors_ot = "";
$floors_do = "";





?>
<!doctype html>
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
    
  
<!-- Bootstrap Datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">    
    
    
    
<link href="css/one-page-wonder.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


</head>

<body>

<?php include("includes/top_nav.php"); ?> 
   

 
    
  <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline_find_dom">
            <div class="container">
              <!--  <h1>Выберете</h1>
                <h2>Will Knock Your Socks Off</h2>-->
                
                
                <div class="row">
                        
                        
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <form role="form">
                   
        
                    
                    
                    
         <div class="row">
        <div class="col-xs-12">
              <h1>Санкт-Петербург<sup><a href="index.php">изменить</a></sup></h1>
           </div>
        </div>           
                    
                    
                    
                    
                    
                    
                    
                    
                    
        <div class="row">
        <div class="col-xs-12">
              <div class="form-group">
                  <select id="region" class="form-control">
                      <option>Москва</option>
                      <option>Санкт-Петербург</option>
                  </select>
              </div>
           </div>
        </div>
                    
                    
             <div class="row">
        <div class="col-sm-6">
              
            
            
         
                <div id="sandbox-container"> 
        
      <label for="year_of_built_ot" class="control-label my-label">Годы постройки</label>
             
        
             
            <div class="input-daterange input-group" id="datepicker">
    <!--<input type="text" class="form-control" name="start" />-->
                
             <input type="text" name="year_of_built_ot" class="form-control" placeholder="От" id="year_of_built_ot" value="<?=$year_of_built_ot?>">
         
                
                
    <span class="input-group-addon"> - </span>
  <!--  <input type="text" class="form-control" name="end" />-->
                
            <input type="text" name="year_of_built_do" id="year_of_built_do" class="form-control" placeholder="До" value="<?=$year_of_built_do?>">     
                
</div>    
             
             
             
             
        </div>
               
            
            
            
            
            
            
            
            
            
            
           </div>
                    
          
                    
                    
           
                    
        <div class="col-sm-6">
              
              <label for="floors_ot" class="control-label my-label">Этажность дома</label>
             
        
             
            <div class="input-daterange input-group" id="datepicker">
    <!--<input type="text" class="form-control" name="start" />-->
                
             <input type="text" name="floors_ot" id="floors_ot" class="form-control" placeholder="От" value="<?=$floors_ot?>">
         
                
                
    <span class="input-group-addon"> - </span>
  <!--  <input type="text" class="form-control" name="end" />-->
                
             <input type="text" name="floors_do" id="floors_do" class="form-control" placeholder="До" value="<?=$floors_do?>">
                
</div>    
                         
                    
                    
                    
                    
            
            
            
            
           </div>
        </div>             
                    
                    
                    
                    
                    
                    
                    
      
                    
                    
                    
                    
            <br>        
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

<!-- Bootstrap Select Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/i18n/defaults-ru_RU.min.js"></script>
   
    
    
<!--Выбор годов постройки плагин -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.ru.min.js"></script>  
    
    
 
    
<!--jQuery priceformat -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-price-format/2.1/jquery.priceformat.min.js"></script>
   
    


    
<script>
    
   $( document ).ready(function() {
     
       
       
       $('#region').selectpicker({
           'title': 'Выберите регион',
           'liveSearch': 'true'
       
       });
       $('#okrug').selectpicker('hide');


// Ограничиваем ввод только цифрами и ограничиваем количество символов  
      
$('#year_of_built_ot').priceFormat({
    prefix: '',
    centsSeparator: '',
    thousandsSeparator: '',
    centsLimit: 0,
    limit: 4,
    clearOnEmpty: true
});    
      
$('#year_of_built_do').priceFormat({
    prefix: '',
    centsSeparator: '',
    thousandsSeparator: '',
    centsLimit: 0,
    limit: 4,
    clearOnEmpty: true
});    
      
 
      
$('#floors_ot').priceFormat({
    prefix: '',
    centsSeparator: '',
    thousandsSeparator: ' ',
    centsLimit: 0,
    limit: 2,
    clearOnEmpty: true
});
      
$('#floors_do').priceFormat({
    prefix: '',
    centsSeparator: '',
    thousandsSeparator: ' ',
    centsLimit: 0,
    limit: 2,
    clearOnEmpty: true
});  
       
       
       
       
       
       
$('#sandbox-container .input-daterange').datepicker({
    format: "yyyy",
    startDate: "-670y",
    endDate: "01/01/2016",
    startView: 2,
    minViewMode: 2,
    maxViewMode: 2,
    autoclose: true
});
       
       
       
       
       
       
   }); // $( document ).ready(function()
    
    
    
</script>    
</body>
</html>