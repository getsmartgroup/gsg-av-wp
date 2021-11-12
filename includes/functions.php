<?php

if ( ! function_exists( 'asas_virtuais' ) ) {
	function asas_virtuais( $plugin_slug = 'gsg-av-wp' ) {
		return \AsasVirtuaisWP\AsasVirtuais::instance( $plugin_slug );
	}
}
