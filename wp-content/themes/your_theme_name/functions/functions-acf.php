<?php

//Put your Advanced Custom Fields mods in here
// Add options page if ACF is installed 

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}