<?php
/*
Plugin Name: My API
description:
Version: 1.0
Text Domain: my-api
 */

defined('ABSPATH') or die('No script kiddies please!');

/**
 * @param $atts
 */
function myapi_hello_func($atts)
{
    $issues = [
        ['title' => 'Issue 1'],
        ['title' => 'Issue 2']
    ];

    // Handle the case when there are no issues
    if (empty($issues))
    {
        return '<strong>' . __('No issues to show', 'githup-api') . '</strong>';
    }

    // We're going to return a string. First, we open a list.
    $return = '<ul>';

    // Loop over the returned issues
    foreach ($issues as $issue)
    {

        // Add a list item for each issue to the string
        // (Feel free to get fancier here)
        // Maybe make each one a link to the issue issuing $issue['url] )
        $return .= "<li>{$issue['title']}</li>";
    }

    // Don't forget to close the list
    $return .= '</ul>';

    return $return;
}

add_shortcode('myapi_hello', 'myapi_hello_func');
