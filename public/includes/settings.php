<?php
/**
 * Get Settings
 *
 * Retrieves all plugin settings
 *
 * @since 1.0
 * @return array PREFIX settings
 */
function prefix_get_settings() {

        $settings = get_option( 'prefix_settings' );

        return apply_filters( 'prefix_get_settings', $settings );
}