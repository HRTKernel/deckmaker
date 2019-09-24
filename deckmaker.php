<?php
 
 defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
 
/*
Plugin Name:  Deckmaker Plugin
Description:  Spezielle Funktionen und Code für dlww-gaming.de. Shortcode Cards [deckmaker src=] - Beispiel [deckmaker src=2783661] Die Card ID bekommt man unter https://db.ygoprodeck.com/search/
Version:      1.0.0.4
Author:       Maik Diebenkorn
*/ 
 
/* Shortcode Cards [deckmaker src=] - Bild einfuegen */
 
function MeinDeck($atts) {
 
       extract(shortcode_atts(array(
 
                    'src' => ''
 
                    ), $atts));

		return '<a href="https://db.ygoprodeck.com/api/v5/cardinfo.php?name=' . $src . '" a data-name="' . $src . '" target="_blank" class="deck-card"><img src="https://storage.googleapis.com/ygoprodeck.com/pics/' . $src . '.jpg" alt="' . $src . '" width="130" height="135"><script src="https://ygoprodeck.com/ygoprodeck.js"></script></a><a data-name="' . $src . '"></a>';
}

add_shortcode('deckmaker', 'MeinDeck');

?>