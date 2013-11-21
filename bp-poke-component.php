<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class BP_Poke_Component extends BP_Component {

	/**
	 * Start the groups component creation process
	 *
	 * 
	 */
	function __construct() {
           
            global $bp;
            parent::start(
                    'poke',
                    __( 'Poke', 'bp-poke' ),
                    BP_POKE_DIR_URL
            );
                
            $bp->active_components[$this->id] = 1;
            
            //add_action( 'bp_setup_nav', array( $this, 'setup_settings_nav' ), 11 );
	}

	/**
	 * Include files
	 */
	function includes() {

	}

	/**
	 * Setup globals
	 *
	 * The BP_GROUPS_SLUG constant is deprecated, and only used here for
	 * backwards compatibility.
	 *
	 * @since BuddyPress (1.5)
	 * @global BuddyPress $bp The one true BuddyPress instance
	 */
	function setup_globals() {
		global $bp;

		// All globals for messaging component.
		// Note that global_tables is included in this array.
		$globals = array(
			'slug'                  => 'poke',
			'has_directory'         => false,
            'notification_callback' => 'bp_poke_format_notifications',
			'global_tables'         => false
		);

		parent::setup_globals( $globals );

	}
      
     
}

