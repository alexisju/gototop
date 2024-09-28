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

//define("GOTOTOP_DEFAULT_CLASS", "glyphicon glyphicon-chevron-up");
define("GOTOTOP_DEFAULT_CLASS", "fa fa-chevron-up fa-2x");
define("GOTOTOP_DEFAULT_TITLE", "Go to top");

function hook_gototop_render_includes($data)
{
    $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/gototop/gototop.css';
    return $data;
}

function hook_gototop_render_footer($data, $conf)
{
    // footer text
    $confval = $conf->get('plugins.GOTOTOP_CLASS');
    $class = !empty($confval) ? $confval : GOTOTOP_DEFAULT_CLASS;
    $confval = $conf->get('plugins.GOTOTOP_TITLE');
    $title = !empty($confval) ? $confval : GOTOTOP_DEFAULT_TITLE;
    $data['text'][] = '<div class="goto"><a href="#" class="totop" title="' . $title . '" aria-label="' . $title . '"><i class="' . $class. '"></i></a></div>';
    $data['endofpage'][] = file_get_contents(PluginManager::$PLUGINS_PATH . '/gototop/gototop.html');
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/gototop/scroll2Top.js';
    return $data;
}