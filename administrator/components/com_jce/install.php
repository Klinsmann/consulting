<?php
/**
 * @package   	JCE
 * @copyright 	Copyright � 2009-2011 Ryan Demmer. All rights reserved.
 * @license   	GNU/GPL 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * JCE is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die('RESTRICTED');

// load base classes
require_once(dirname(__FILE__) . DS . 'includes' . DS . 'base.php');
// load installer class
require_once(dirname(__FILE__) . DS . 'classes' . DS . 'installer.php');

abstract class com_jceInstallerScript {
	
	public static function install() 
	{	
	    $installer = WFInstaller::getInstance();
		$installer->install();
	}
	
	public static function uninstall() 
	{		
	    $installer = WFInstaller::getInstance();
	    $installer->uninstall();
	}
	
	public static function update() 
	{
		$this->install();
	}
}

/**
* Installer function
* @return
*/
function com_install()
{
	return com_jceInstallerScript::install();
}
/**
 * Uninstall function
 * @return
 */
function com_uninstall()
{
	return com_jceInstallerScript::uninstall();
}

?>