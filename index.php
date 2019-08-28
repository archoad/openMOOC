<?php
/*=========================================================
// File:        index.php
// Description: main page of openMOOC
// Created:     2019-07-25
// Licence:     GPL-3.0-or-later
// Copyright 2019 Michel Dubois

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
=========================================================*/


// --------------------
// Définition des variables de base
$appli_titre = ("OpenMOOC");
// --------------------


// --------------------
// Définition des variables internes à l'application
// Ne pas modifier ces variables !
date_default_timezone_set('Europe/Paris');
setlocale(LC_ALL, 'fr_FR.utf8');
ini_set('display_errors','0');
ini_set('mbstring.internal_encoding', 'UTF-8');
ini_set('mbstring.http_input', 'UTF-8');
ini_set('mbstring.http_output', 'UTF-8');
ini_set('mbstring.detect_order', 'auto');
// --------------------


$shield = "data:image/png;base64,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";


$padlock = "data:image/png;base64,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";


$internet = "data:image/png;base64,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";


$laptop = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAAA6CAYAAADvEjRHAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAPQSURBVGiB7ZtNbxtVFIafOzN2ayNo1NAP0UpEbZHdRRYgVyKQdAEKLNLEVEKwQGz5AYgFW5bs+BGsEJUQG7JCQkKlUANBqHFs17Fjx3Xj0LQQiOt4PIeF43zYY5uUzFCH+66u55w7fv3onnPnQ1b00U/JzJgjxifA80CgX/7jJ3VPhGs1c/OD8Wh03S3D6jX9xi+Zs44Ys8BTnvjzRTKsFO8dcQJh4F23DKPXdCtgzDDQAHak4K1MJnPELdZzJSCcQjWHpQ2LlYfmgZvzWtFjm4RNAQj+Xg8cB8rtOb0h7FJqPcjNe64gH2udDtmEQ42eOT3L4f8iDQENAdAQAA0B0BAADQHQEAANAdAQAA0B0BAADQHQEAANAdAQAA0B0BAADQHQEAANAdAQAA0B0BAADQHQEAANAej3LtKggTSHl09WGX+66oOlg1XAkJ0PZq3ultMTgjhqXqnmSSwlMHgvpXerHItEfnML9CyHPytLXyi47o0nX+UI8mG3YN9X8444Hytlzii4AAQP1JoPElhTON+ZNfPLbjmq1wkSyeynCO/YjQa2bR+8Qx8UMC1MywRIsXF/NBaLdfSFrivh+2RyGOHtXPEOn3/19cBCsEyT6ckJoudGIio09Cow257TtSdYTnAGsOZupQcWAIDdaPDzrykARKm4W05XCKJU3G40WCyWPLLnn5bKK1SrNYCrItLxm10hXC8WQyCT+eIdNuuuW+tASRyHbGEZ4NSP8/lL7XFXCMH12utAOJ0vemzPP6Vzha2R01ES7uUgKi4i3D5EEBYLJeq2DUreaI91QPhMxEQxVbpb4a+NwbtM7qa6bZNfLgPq4s2FxcjuWAeEC8ncy8CJdO7wrIKWMlslYTjOzO7jHRAckThAJl9oDw280vkC4jiI7N0qO3uCYnp17QFrD/7wzZxfqlZrLK+sgmLsh1u5063jeyAkktlR4LmdTnr4lGmWuWEoudI6tnclSLNz5gqDf4HUTbeXWr1Otkui7d6hWStjL4xypnzSN2N+6sTxodZw8tuFhSfHo9H17bvIuVTqjN2wivS5szxMEsWbly6ev7a9EupO4KpCPAMgIsx+c4OHtdo/yjcMxWsTLxI66t3fC4zmTrgDwRCJS48J/1aVtfvMzaf2NSdy/lmi50a8MQQIajqRSAQMgEQ2e0zgsmffBpTKlf3PubvqgZM9GlKhoYnm7rDJFB4/OnuUH1Qqew4BMYx4sxwcprxuh0+EQ4ycfWZfc8JHfXik6XBlqyfIsNebwisvxTw9/yNLSdgAMAz5CMj9x3b8l6Iiivf/BoU8PAzLzumhAAAAAElFTkSuQmCC";




function getImgData($imgFile) {
	$imgData = base64_encode(file_get_contents($imgFile));
	$src = sprintf("data:%s;base64,%s", mime_content_type($imgFile), $imgData);
	print_r($src);
	printf("<p>&nbsp;</p>\n");
}


function cssProvider() {
	$result = "@charset 'utf-8';";
	$result .= ":root { --bg0Color: #e9e4db; --bg1Color: #9eb1bb; --bg2Color: #4d636f; --textDarkColor: #444444; --textClearColor: #f5f7f8; --myRedDark: #c9302c; --shadowNormal: 6px 6px 6px rgba(0, 0, 0, 0.2); --shadowHover: 2px 2px 2px rgba(0, 0, 0, 0.2); }";
	$result .= "* { box-sizing: border-box; } html { height: 100%; }";
	$result .= "body { width: 100%; height: 100%; margin: 0; background-color: var(--bg0Color); font-family: Tahoma; font-size: 10pt; }";
	$result .= "h1 { text-align: center; font-size: 12pt; }";
	$result .= "h2 { text-align:center; font-size:12pt; font-weight: normal; color:var(--myRedDark); }";
	$result .= "p { text-align: left; }";
	$result .= "a { text-align: center; color: var(--textDarkColor); text-decoration:none; }";
	$result .= ".footer { position: fixed; left: 0; bottom: 0; width: 100%; background-color: var(--bg2Color); color: var(--textClearColor); text-align: center; padding: 4px 0 4px 0; font-size: 10px; } .footer a { color: var(--textClearColor); }";
	$result .= " .foot { width: 40%; border-radius: 4px; margin: 10px auto 50px auto; padding: 8px 0 8px 0; background-color: var(--bg1Color); box-shadow: var(--shadowNormal); text-align:center;}";
	$result .= " .foot.focus, .foot:focus, .foot:hover, .foot.active { box-shadow: var(--shadowHover); } .foot a { font-size: 10pt; }";
	$result .= ".menu { width: 50%; border-radius: 4px; margin: 20px auto 20px auto; padding: 5px; background-color: var(--bg1Color); box-shadow: var(--shadowNormal); }";
	$result .= ".menu.focus, .menu:focus, .menu:hover, .menu.active { box-shadow: var(--shadowHover); }";
	$result .= ".menu img { padding: 5px 15px 5px 5px; width: 50px; } .menu a { font-size: 12pt; text-align: center; }";
	return $result;
}


function headPage($titre, $sousTitre=''){
	header("cache-control:no-cache, must-revalidate");
	header("Expires:Mon, 26 Jul 1997 05:00:00 GMT");
	header("Content-type:text/html; charset=utf-8");
	printf("<!DOCTYPE html>\n<html lang='fr-FR'>\n<head>\n");
	printf("<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />\n");
	printf("<link rel='icon' type='image/png' href='pict/favicon.png' />\n");
	printf("<title>%s</title>\n", $titre);
	printf("<style>%s</style>\n", cssProvider());
	printf("</head>\n<body>\n<h1>%s</h1>\n", $titre);
	if ($sousTitre !== '') {
		printf("<h2>%s</h2>\n", $sousTitre);
	}
}


function footPage($link='', $msg=''){
	$day = mb_strtolower(strftime("%A %d %B %Y", time()));
	if (strlen($link) AND strlen($msg)) {
		printf("<div class='foot'>\n");
		printf("<a href='%s'>%s</a>\n", $link, $msg);
		printf("</div>\n");
		printf("<p>&nbsp;</p>");
	}
	printf("<div class='footer'>\n");
	printf("<a href='https://github.com/archoad/openMOOC'>OpenMOOC - %s - Michel Dubois (c) 2019</a>\n", $day);
	printf("</div>\n");
	printf("</body>\n</html>\n");
}


function linkMsg($link, $msg, $img) {
	printf("<div class='menu'>\n<table>\n<tr>\n");
	printf("<td><img src='%s' alt='info' /></td>\n", $img);
	printf("<td><a href='%s'>%s</a></td>\n", $link, $msg);
	printf("</tr></table></div>\n");
}


function manifesteParser() {
	$organization = array();
	$xml = simplexml_load_file('imsmanifest.xml', 'SimpleXMLIterator');
	foreach ($xml->organizations->organization as $org) {
		foreach($org as $key => $value) {
			if ($key === 'item') {
				$id = explode('_', strval($value->attributes()->identifierref));
				$organization[$id[1]]['title'] = strval($value->title);
			}
		}
	}
	foreach ($xml->resources->resource as $key => $value) {
		$id = explode('_', strval($value->attributes()->identifier));
		$organization[$id[1]]['href'] = strval($value->attributes()->href);
	}
	return $organization;
}


function constructMoocStruct() {
	global $shield, $padlock, $internet, $laptop;
	$mooc = array();
	$mooc[1] = array(
		'title' => "Panorama de la SSI",
		'img' => $shield,
		'action' => 'unite1',
		'details' => array(
			array(
				'id' => 1,
				'title' => 'Un monde numérique hyper-connecté',
				'start' => 1,
				'end' => 6
			),
			array(
				'id' => 2,
				'title' => 'Un monde à hauts risques',
				'start' => 7,
				'end' => 15
			),
			array(
				'id' => 3,
				'title' => 'Les acteurs de la cybersécurité',
				'start' => 16,
				'end' => 23
			),
			array(
				'id' => 4,
				'title' => 'Protéger le cyberespace',
				'start' => 24,
				'end' => 39
			),
			array(
				'id' => 5,
				'title' => 'Les règles d\'or de la sécurité',
				'start' => 40,
				'end' => 46
			),
		)
	);
	$mooc[2] = array(
		'title' => "Sécurité de l'authentification",
		'img' => $padlock,
		'action' => 'unite2',
		'details' => array(
			array(
				'id' => 1,
				'title' => 'Principes de l\'authentification',
				'start' => 47,
				'end' => 55
			),
			array(
				'id' => 2,
				'title' => 'Attaque sur les mots de passe',
				'start' => 56,
				'end' => 61
			),
			array(
				'id' => 3,
				'title' => 'Sécuriser ses mots de passe',
				'start' => 62,
				'end' => 68
			),
			array(
				'id' => 4,
				'title' => 'Gérer ses mots de passe',
				'start' => 69,
				'end' => 75
			),
			array(
				'id' => 5,
				'title' => 'Notions de cryptographie',
				'start' => 76,
				'end' => 83
			),
		)
	);
	$mooc[3] = array(
		'title' => "Sécurité sur Internet",
		'img' => $internet,
		'action' => 'unite3',
		'details' => array(
			array(
				'id' => 1,
				'title' => 'Internet: de quoi s\'agit-il?',
				'start' => 84,
				'end' => 94
			),
			array(
				'id' => 2,
				'title' => 'Les fichiers en provenance d\'Internet',
				'start' => 95,
				'end' => 103
			),
			array(
				'id' => 3,
				'title' => 'La navigation Web',
				'start' => 104,
				'end' => 113
			),
			array(
				'id' => 4,
				'title' => 'La messagerie électronique',
				'start' => 114,
				'end' => 122
			),
			array(
				'id' => 5,
				'title' => 'L\'envers du décors d\'une connexion Web',
				'start' => 123,
				'end' => 129
			),
		)
	);
	$mooc[4] = array(
		'title' => "Sécurité du poste de travail et nomadisme",
		'img' => $laptop,
		'action' => 'unite4',
		'details' => array(
			array(
				'id' => 1,
				'title' => 'Applications et mises à jour',
				'start' => 130,
				'end' => 136
			),
			array(
				'id' => 2,
				'title' => 'Options de configuration de base',
				'start' => 137,
				'end' => 145
			),
			array(
				'id' => 3,
				'title' => 'Configurations complémentaires',
				'start' => 146,
				'end' => 152
			),
			array(
				'id' => 4,
				'title' => 'Sécurité des périphériques amovibles',
				'start' => 153,
				'end' => 161
			),
			array(
				'id' => 5,
				'title' => 'Séparation des usages',
				'start' => 162,
				'end' => 169
			),
		)
	);
	return $mooc;
}


function mainMenu() {
	global $mooc, $course, $script;
	$cpt = 1;
	foreach ($mooc as $key => $value) {
		linkMsg($script."?action=".$value['action'], "<b>Module ".$cpt."</b> - ".$value['title'], $value['img']);
		$cpt++;
	}
}


function displaySubMenu($unite, $lesson=NULL) {
	global $appli_titre, $mooc, $script, $course;
	if (is_null($lesson)) {
		headPage($appli_titre, "Module ".$unite." - ".$mooc[$unite]['title']);
		foreach ($mooc[$unite]['details'] as $key => $value) {
			linkMsg($script."?action=".$mooc[$unite]['action'].'_'.$value['id'], "<b>Unité ".$value['id']."</b> - ".$value['title'], $mooc[$unite]['img']);
		}
		footPage($script, "Retour à l'accueil");
	} else {
		$elt = $mooc[$unite]['details'][intval($lesson)-1];
		headPage($appli_titre, "Module ".$unite." - ".$mooc[$unite]['title']."<br />Unité ".$lesson." - ".$elt['title']);
		for ($i=$elt['start']; $i<=$elt['end']; $i++) {
			if ($i<10) { $val = sprintf("00%s", $i); }
			else if ($i<100) { $val = sprintf("0%s", $i); }
			else { $val = sprintf("%s", $i); }
			linkMsg($course[$val]['href'], $course[$val]['title'], $mooc[$unite]['img']);
		}
		footPage($script."?action=".$unite, "Retour");
	}
}




$script = basename($_SERVER['PHP_SELF']);
$mooc = constructMoocStruct();
$course = manifesteParser();

/*
header('Content-Type: application/json');
echo json_encode($mooc);
*/

if (isset($_GET['action'])) {
	$action = str_replace("unite", "", $_GET['action']);
	$detail = explode("_", $action);
	if (isset($action[1])) {
		displaySubMenu($detail[0], $detail[1]);
	} else {
		displaySubMenu($detail[0]);
	}
} else {
	headPage($appli_titre);
	mainMenu();
}
footPage();

?>
