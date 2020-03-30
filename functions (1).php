<?php

function dire_bonjour() {
 $phrase = '<p>bonjour!</p>';
 echo $phrase;
}
add_action( 'alexanne_action_hook', 'dire_bonjour' );
