<?php

/**
 * Override or insert variables into the html template.
 */
function stroirs_preprocess_html(&$vars) {
    drupal_add_js(drupal_get_path('theme', 'stroirs') . '/js/mobilyslider.js');
    drupal_add_js(drupal_get_path('theme', 'stroirs') . '/js/init.js');

    drupal_add_css(drupal_get_path('theme', 'stroirs') . '/css/reset.css', array('group' => CSS_THEME, 'preprocess' => FALSE));
    drupal_add_css(drupal_get_path('theme', 'stroirs') . '/css/style.css', array('group' => CSS_THEME, 'preprocess' => FALSE));
    drupal_add_css(drupal_get_path('theme', 'stroirs') . '/css/grid.css', array('group' => CSS_THEME, 'preprocess' => FALSE));
    drupal_add_css(drupal_get_path('theme', 'stroirs') . '/css/slider.css', array('group' => CSS_THEME, 'preprocess' => FALSE));

    drupal_add_css('http://fonts.googleapis.com/css?family=Oswald', array('group' => CSS_THEME, 'preprocess' => FALSE));

    //drupal_add_js('jQuery(document).ready(function() {});', 'inline');
}