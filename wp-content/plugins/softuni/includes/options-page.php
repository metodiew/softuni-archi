<?php
/**
 * Generated Options Page
 */

// Hook to initialize the settings
add_action( 'admin_init', 'softuni_plugin_settings_init' );

/**
 * Initializes settings and registers them with the Settings API.
 */
function softuni_plugin_settings_init() {
    // Register the setting to store options in the database
    register_setting( 'softuni_custom_options_group', 'softuni_custom_options' );

    // Add a settings section
    add_settings_section(
        'custom_plugin_main_section', // Section ID
        __( 'SoftUni Settings', 'softuni' ), // Section title
        'softuni_plugin_section_callback', // Callback function for the section
        'softuni_custom_options' // Page to display the section
    );

    // Add a field for the text input
    add_settings_field(
        'softuni_plugin_text_field', // Field ID
        __( 'Number of posts for the category archive', 'softuni' ), // Label for the field
        'softuni_plugin_text_field_callback', // Callback function for rendering the field
        'softuni_custom_options', // Page where the field will be displayed
        'custom_plugin_main_section' // Section where the field belongs
    );

    // Add a checkbox field
    add_settings_field(
        'custom_plugin_checkbox_field', // Field ID
        __( 'Enable Feature', 'softuni' ), // Label for the checkbox
        'custom_plugin_checkbox_field_callback', // Callback function for rendering the checkbox
        'softuni_custom_options', // Page where the checkbox will be displayed
        'custom_plugin_main_section' // Section where the checkbox belongs
    );
}

/**
 * Callback function for the main section description.
 */
function softuni_plugin_section_callback() {
    echo '<p>' . __( 'Configure the main settings for this plugin.', 'softuni' ) . '</p>';
}

/**
 * Callback function for rendering the text field.
 */
function softuni_plugin_text_field_callback() {
    // Retrieve the existing value from the database
    $options = get_option( 'softuni_custom_options' );
    $value   = isset( $options['softuni_plugin_text_field'] ) ? esc_attr( $options['softuni_plugin_text_field'] ) : '';
    ?>
    <input type="text" name="softuni_custom_options[softuni_plugin_text_field]" value="<?php echo $value; ?>" />
    <p class="description"><?php esc_html_e( 'Set a number of posts per page for the cagegory achive.', 'softuni' ); ?></p>
    <?php
}

/**
 * Callback function for rendering the checkbox field.
 */
function custom_plugin_checkbox_field_callback() {
    // Retrieve the existing value from the database
    $options = get_option( 'softuni_custom_options' );
    $checked = isset( $options['custom_plugin_checkbox_field'] ) && $options['custom_plugin_checkbox_field'] ? 'checked' : '';
    ?>
    <input type="checkbox" name="softuni_custom_options[custom_plugin_checkbox_field]" value="1" <?php echo $checked; ?> />
    <p class="description"><?php esc_html_e( 'Check to enable the feature.', 'softuni' ); ?></p>
    <?php
}

// Hook to add the options page to the admin menu
add_action( 'admin_menu', 'custom_plugin_add_options_page' );

/**
 * Adds the options page to the admin menu.
 */
function custom_plugin_add_options_page() {
    add_options_page(
        __( 'SoftUni Options', 'softuni' ), // Page title
        __( 'SoftUni Options', 'softuni' ), // Menu title
        'manage_options', // Capability required to access the page
        'softuni-custom-options', // Menu slug
        'softuni_custom_options_page_callback' // Callback function to render the page
    );
}

/**
 * Renders the options page content.
 */
function softuni_custom_options_page_callback() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'SoftUni Options', 'softuni' ); ?></h1>
        <form action="options.php" method="post">
            <?php

            $softuni_options = get_option( 'softuni_custom_options' );
            var_dump( $softuni_options );

            // Output nonce, action, and option page fields for the settings page
            settings_fields( 'softuni_custom_options_group' );

            // Output settings sections and fields
            do_settings_sections( 'softuni_custom_options' );

            // Output the save settings button
            submit_button( __( 'Update Settings', 'softuni' ) );
            ?>
        </form>
    </div>
    <?php
}
