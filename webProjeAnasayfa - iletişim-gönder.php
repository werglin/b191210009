<!doctype html>
<?php
$mail=$_POST['email'];
$numara=$_POST['num'];
$cinsiyet=$_POST['cinsiyet'];
$guvenlik=$_POST['guvenlik-sorusu'];
$bilgi=$_POST['bilgi'];

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <!--Benim CSS'im-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">	
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
 <!--Navigasyon-->
<nav class="navbar navbar-expend-md navbar-light bg-light">
<div class="container-fluid">
     <a class="navbar-brand" href="http://localhost/webProjeAnasayfa%20-hakk%C4%B1mda#"><img src="img/logo"></a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse"
	 data-target="#navbarResponsive">
	       <span class="navbar-toggler-icon"></span>
	 </button>
	 <div class="collapse navbar-collapse " id="navbarResponsive">
	   <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-hakk%C4%B1mda#"><p class="text-right">Hakkımda</p></a>
        </li>
		<li class="nav-item">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%20%C5%9Eehrim"><p class="text-right">Şehrim</p></a>
        </li>
		<li class="nav-item">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%20miras%C4%B1m%C4%B1z"><p class="text-right">Mirasımız</p></a>
        </li>
		<li class="nav-item">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%C3%B6zge%C3%A7mi%C5%9F#"><p class="text-right">Özgeçmiş</p></a>
        </li>
		<li class="nav-item active">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%20ileti%C5%9Fim"><p class="text-right">İletişim</p></a>
			
        </li> 
	   </ul>	  
 	 </div>   
</div>
</nav>

<!--Girilenlerin Tablosu-->
<div class="container">
<h1 class="text-center text-white" style="margin-top:50px;">İletişim Sayfasında Doldurulanlar</h1>
<br></br>
<table class="table text-center text-white">
    <tr>
        <td><p><?=$mail;?></p></td>
	    <td><p><?=$numara;?></p></td>
	</tr>
    <tr>
	    <td><p><?=$cinsiyet;?></p></td>
	    <td><p style="padding-left:20px;"><?php if(isset($_POST['dil1']))
                     {
	                      echo $_POST['dil1']."&nbsp;&nbsp;&nbsp;&nbsp;";
                     }
                     if(isset($_POST['dil2']))
                     {
                          echo $_POST['dil2']."&nbsp;&nbsp;&nbsp;&nbsp;";
                     }
                     if(isset($_POST['dil3']))
                     {
	                      echo $_POST['dil3']."&nbsp;&nbsp;&nbsp;&nbsp;";
                     }?></p></td>
	</tr>
    <tr>
	    <td><p><?=$guvenlik;?></p></td>
		<td><p><?=$bilgi;?></p></td>
	</tr>
</table>
</div>

 <!--Footer-->
  <div class="container bg-gray">
 <form class="form-inline ">
         <ul class="nav-item active">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-hakk%C4%B1mda#">Hakkımda</a>
        </ul>
		<ul class="nav-item">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%20%C5%9Eehrim">Şehrim</a>
        </ul>
		<ul class="nav-item">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%20miras%C4%B1m%C4%B1z">Mirasımız</a>
        </ul>
		<ul class="nav-item">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%C3%B6zge%C3%A7mi%C5%9F#">Özgeçmiş</a>
        </ul>
		<ul class="nav-item">
		    <a class="nav-link" href="http://localhost/webProjeAnasayfa%20-%20ileti%C5%9Fim">İletişim</a>
        </ul> 	
 </form>
 </div>
 <br><br/>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>