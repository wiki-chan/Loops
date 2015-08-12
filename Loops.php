<?php

/**
 * 'Loops' is a MediaWiki extension expanding the parser with loops functions
 *
 * Documentation: http://www.mediawiki.org/wiki/Extension:Loops
 * Support:       http://www.mediawiki.org/wiki/Extension_talk:Loops
 * Source code:   http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/Loops
 *
 * @license: GNU GPL v2 or higher
 * @author:  David M. Sledge
 * @author:  Daniel Werner < danweetz@web.de >
 *
 * @file Loops.php
 * @ingroup Loops
 */

if ( ! defined( 'MEDIAWIKI' ) ) { die( ); }

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'author'         => array( 'David M. Sledge', '[http://www.mediawiki.org/wiki/User:Danwe Daniel Werner]', '페네트-' ),
	'name'           => 'Loops',
	'version'        => '0.5.0',
	'descriptionmsg' => 'loops-desc',
	'url'            => 'https://github.com/wiki-chan/Loops',
	'license-name'   => 'GPL-2.0+',
);

// language files:
$wgMessagesDirs['Loops'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['Loops'     ] = dirname( __FILE__ ) . '/Loops.i18n.php';
$wgExtensionMessagesFiles['LoopsMagic'] = dirname( __FILE__ ) . '/Loops.i18n.magic.php';

// hooks registration:
$wgHooks['ParserFirstCallInit'][] = 'ExtLoops::init';
$wgHooks['ParserLimitReport'  ][] = 'ExtLoops::onParserLimitReport';
$wgHooks['ParserClearState'   ][] = 'ExtLoops::onParserClearState';

// Include the settings file:
require_once dirname( __FILE__ ) . '/Loops_Settings.php';

$wgAutoloadClasses['ExtLoops'] = __DIR__ . '/Loops.class.php';