<?php
/*
 * Plugin Name:       HTML Widget
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises/
 * Description:       Using this widget, you can add your HTML to the widgets section.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       html-widget
 * Domain Path:       /languages
 */

class HTML_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct("html-widget", "HTML Widget");
    }

    function form($instance)
    {
        // Widget id and name
        $titleId = $this->get_field_id("title");
        $titleName = $this->get_field_name("title");
        $codeId = $this->get_field_id("code");
        $codeName = $this->get_field_name("code");

        // Widget form
        $title = $instance['title'];
        $code = $instance['code'];
        echo "
        <p>
        <label for='$titleId'>Title:</label>
        <br>
        <input class='widefat' value='$title' type='text' id='$titleId' name='$titleName' />
        </p>

        <p>
        <label for='$codeId'>HTML Code:</label>
        <br>
        <textarea rows='6' cols='30' class='widefat code' type='text' id='$codeId' name='$codeName'>$code</textarea>
        </p>
        ";
    }

    // Widget display
    function widget($arguments, $instance)
    {
        if ($instance['title']) {
            echo $arguments['before_widget'];
            echo $arguments['before_title'];
            echo  $instance['title'];
            echo $arguments['after_title'];
            echo $instance['code'];
            echo $arguments['after_widget'];
        }
    }
}

// Adding widget to WP
add_action("widgets_init", function () {
    register_widget("HTML_Widget");
});
