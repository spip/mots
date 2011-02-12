<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;


// http://doc.spip.org/@generer_url_ecrire_mot
function urls_generer_url_ecrire_groupe_mots_dist($id, $args='', $ancre='', $statut='', $connect='') {
	$a = "id_groupe=" . intval($id);
	$h = (!$statut OR $connect)
	?  generer_url_entite_absolue($id, 'groupe_mots', $args, $ancre, $connect)
	: (generer_url_ecrire('groupe_mots',$a . ($args ? "&$args" : ''))
		. ($ancre ? "#$ancre" : ''));
	return $h;
}

?>