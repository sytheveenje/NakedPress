<?php 

class TemplateParts {
	public static function get_template_parts( $parts = array() ) {
		foreach( $parts as $part ) {
			get_template_part( $part );
		};
	}
}