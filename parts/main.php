<?php 
    require_once ('sallerequete.php');
    
    ?>

<article>
	<section id="Présentation">
		<h2>
			<i class="fa fa-star-o" aria-hidden="true"></i>

				Accédez aux plus grandes salles sportives de Dijon
		</h2>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum dapibus ante, eu aliquam ante euismod eleifend. Ut malesuada augue ut luctus pellentesque. Aenean id varius ipsum. Nunc malesuada ex ut ipsum interdum vestibulum. Integer facilisis finibus orci, sit amet pretium diam placerat vitae. Nunc auctor tincidunt mollis. Nullam quis turpis sed lorem elementum semper eget semper risus. In nec mauris aliquam, congue metus euismod, cursus leo. Vivamus laoreet commodo leo, ut cursus justo blandit in. Aenean pretium mi a auctor pulvinar. Mauris sodales sollicitudin sodales. Sed mollis sed lectus id facilisis. Quisque pharetra a purus eget porttitor. Proin rhoncus risus non mauris iaculis sodales. Pellentesque euismod dui erat, non sodales ipsum sollicitudin sed.</p>

		<p>		
			Donec nisi eros, luctus id pretium eget, consequat elementum risus. Fusce eleifend lacinia orci eu iaculis. Vestibulum vestibulum justo quis commodo congue. Aliquam purus leo, dictum in nisl at, pellentesque bibendum mi. Nulla convallis mi eget nisl convallis dictum. Vestibulum a massa lacus. Aenean quis enim diam.
		</p>
	</section>
	<section id="photosalle">
		<h2>
			<i class="fa fa-star-o" aria-hidden="true"></i>

				Nos différentes salles :
		</h2>

<div>

<?php
     $i=0;
     while ($i<count($resultatsalle)) {

    echo "<figure>";
	echo "<a href=Salle".$resultatsalle[$i]['id']."php><img src=img/Salle".$resultatsalle[$i]['id'].".jpg></a>";
	echo "<figcaption><p>Salle : ".$resultatsalle[$i]['nom'].'</p></figcaption>';
	echo "</figure>";

	


    $i++;
}
    ?>

</div>

</section>
</article>


