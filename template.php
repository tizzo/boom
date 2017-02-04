<?php

/**
 * Implements hook_preprocess_node().
 */
function boom_preprocess_node(&$variables) {
  $variables['boom'] = 'KABLOOEY!';
  drupal_add_css(drupal_get_path('theme', 'boom') . '/css/node-boom.css');
}


/**
 * Implements hook_libraries().
 */
function boom_libraries() {
  $libraries['boom_global_styles'] = array(
    'title' => 'Vertical Tabs',
    'version' => '1.x',
    'css' => array(
      'css/styles.css' => array(
        'media' => 'screen',
      ),
    ),
  );
  return $libraries;
}
