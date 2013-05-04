<?php
/**
 * Uniform skin
 *
 * @file
 * @ingroup Skins
 * @author SPJDRpedia
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );
 
$wgExtensionCredits['skin'][] = array(
        'path' => __FILE__,
        'name' => 'Uniform',
        'url' => "[...]",
        'author' => '[http://spjdrpedia.dk]',
        'descriptionmsg' => 'Uniform skin',
);

$wgValidSkinNames['uniform'] = 'Uniform';
$wgAutoloadClasses['SkinUniform'] = dirname(__FILE__).'/Uniform.skin.php';
$wgExtensionMessagesFiles['Uniform'] = dirname(__FILE__).'/Uniform.i18n.php';
 
$wgResourceModules['skins.uniform'] = array(
        'styles' => array(
                'common/commonElements.css' => array( 'media' => 'screen' ),                                                                     
                'common/commonContent.css' => array( 'media' => 'screen' ),                                                                      
                'common/commonInterface.css' => array( 'media' => 'screen' ), 
                'uniform/stylesheets/screen.css' => array( 'media' => 'screen' )
        ),
        'scripts' => 'uniform/scripts/uniform.js',
        'remoteBasePath' => &$GLOBALS['wgStylePath'],
        'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);


