<?php
/*
 * Definition of resources (CSS and Javascript) required for this skin.
 * This file must be included from LocalSettings.php since that is the only way
 * that this file is included by loader.php
 */
global $wgResourceModules, $wgStylePath, $wgStyleDirectory;
$wgResourceModules['skins.myskin'] = array(
   'styles' => array( 'uniform/screen.css' => array( 'media' => 'screen' )),
   'scripts' => 'uniform/uniform.js',
   'remoteBasePath' => $wgStylePath,
   'localBasePath' => $wgStyleDirectory,
);
?>
