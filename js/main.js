/*var persos = [
	{},
	{},
	{},
	{},
	{},
	{},
	{}
];



function integrerPerso(p) {
	jQuery("#menu").append('<li><a href="#' + p.nom + '">' + p.nom + '</a></li>');
	var article = jQuery('<article id="' + p.nom + '"></article>')
		.append('<h2>' + p.nom + '</h2>')
		.append('<img src="' + p.image + '" alt="' + p.nom + '"/>')
		.append('<blockquote><p>' + p.citation + '</p></blockquote>')
		.append('<p class="description">' + p.description + '</p>');
	jQuery("#contenu").append(article);
}



for (var i = 0; i < persos.length; i++) {
	integrerPerso(persos[i]);
}

jQuery("article").hide();

jQuery("nav li > a").click(function(e) {
	e.preventDefault();
	var cible = jQuery(this).attr("href");
	
	if (jQuery(cible).is(":visible")) {
		return;
	}
	// on retire la classe actif à toutes les li
	jQuery("nav li.actif").removeClass("actif");
	// on la remet uniquement à la li contenant le lien cliqué
	jQuery(this).parent().addClass("actif");
	// pour afficher image de chaque personnage dans header 
		// on récupere l'url contenue dan l'img de l'aticle ciblé
	var image = jQuery(cible + " > img").attr("src"); // article#joe > img ou #jane > img ou autre
		// on l'applique en tant que background-image au header
	
	jQuery("header").css("background-image", "url(" + image + ")");	
//---------
	jQuery("article").stop(true);
	
	if (jQuery("article:visible").length == 0) { // si pas d'article affiché
		


		jQuery(cible).slideDown(); // on affiche directement l'article cible
	} else { // si un article est déjà affiché
		// on commence par le masquer
		jQuery("article:visible").fadeOut(500, function() { // et une fois l'animation terminée...
			jQuery(cible).slideDown(); // ... on affiche l'article cible
		});


}
});*/