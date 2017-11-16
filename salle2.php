<?php 
    require_once ('sallerequete.php');
    ?>
<html>
	<head>
	
		<title>Complexe Sportif</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

<?php 
	$titre = 'accueil nom salle de sport';
	$page = 'accueil';
	require_once('parts/nav.php');
?>
<article>
<h3>Machine Cobra Salle : Wenger  </h3>
<div class="container-fluid">                         
                    <div class="carousel  slide row" data-ride="carousel" data-type="multi" data-interval="3000" id="fruitscarousel">                             
                        <div class="carousel-inner item">                                 
                                <div class="item active">                                     
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="img/salleWenger1.jpg" class="img-responsive"></a>
                                    </div>                                 
                                </div>                                 
                            <div class="item">                                   
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="img/salleWenger2.jpg" class="img-responsive"></a>
                                </div>  
                            <div class="item">                                     
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <a href="#"><img src="img/salleWenger3.jpg" class="img-responsive"></a>
                                </div>      



                            </div>                        
                        </div>                         
                    </div>                     
</article>
<?php require_once('parts/footer.php'); ?>
</section>
</article>


