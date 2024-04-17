<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/hlavicky_session.php'; ?>


<!DOCTYPE html>
<html lang="cs">
<head>
  <title>RELAX ARTE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<style>
input[type=text], select {
  width: 100%;
  padding: 9px 10px;
  margin: 3px 0;
  display: inline-block;
  border: 1px solid #bec4c6;
  border-radius: 7px;
  box-sizing: border-box;
}
</style> 

</head>
<body>


<? require  $_SERVER['DOCUMENT_ROOT'].'/admrelax/navigace/navigace.php'; ?>

<div class="container">

<h3>Vyhledávání</h3>



<div class="row"> 
    <div class="col-sm-5" style="background-color:#d5eef7;">
    <form action='../detail.php' method='post'>
    <br>
    <label>Vyhledávání podle kódu:&nbsp;</label><input type="text" class="kod" name="kod" value = ""  placeholder="Podle kódu - stačí zadat první dva znaky">
    <br>
    <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Hledat&nbsp;&nbsp;</button></center>
    <br>
    </form>    
    </div>
    
    
    <div class="col-sm-5" style="background-color:#f7dbd5;">
    <form action='../detail.php' method='post'>
    <br>
    <label>Vyhledávání podle přijmení, jména nebo RČ:&nbsp;</label><input type="text" class="prijmeni" name="kod" value = ""  placeholder="Musíte zadat celé slovo s diakritikou např. Novák, nebo Tomáš">
    <br>
    <center><button type="submit" class="btn btn-success">&nbsp;<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Hledat&nbsp;&nbsp;</button></center>
    <br>
    </form>    
    </div>    
    
</div>
<br>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	

<script type="text/javascript">
$(function() {
	$(".kod").autocomplete({
		source: "hledej_kod.php",
		minLength: 2
	});				

});

$(function() {
	$(".prijmeni").autocomplete({
		source: "hledej_prijmeni.php",
		minLength: 2
	});				

});

</script>


</div>
</body>
</html>