<?php
/**
 * Go to Top plugin
 *
 * A plugin for Shaarli (community fork) who add a "Go to top" button
 *
 * JS/Sources : http://www.cssscript.com/animated-scroll-to-top-control-in-vanilla-js-scroll2top/
 *
 * Optional : Glyphicon (included into Albinomouse-template for Shaarli)
 */

use Shaarli\Plugin\PluginManager;

function hook_gototop_render_includes($data)
{
    $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/gototop/gototop.css';
    return $data;
}

function hook_gototop_render_footer($data)
{
    // footer text
    $data['text'][] = '<div class="goto"><a href="#" class="totop"> haut <i class="glyphicon glyphicon-chevron-up"></i></a></div>';
    $data['endofpage'][] = file_get_contents(PluginManager::$PLUGINS_PATH . '/gototop/gototop.html');
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/gototop/scroll2Top.js';
    return $data;
}