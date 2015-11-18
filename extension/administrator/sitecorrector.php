<?php
/**
 * @version     15.11.21
 * @package     com_sitecorrector
 * @copyright   (C) 2015 Victor Glushenkov (http://artplastika.ru)
 * @license     GNU General Public License version 3, or later. See LICENSE.txt
 * @author      Victor Glushenkov <dev@artplastika.ru> - http://artplastika.ru
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_sitecorrector')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JControllerLegacy::getInstance('Sitecorrector');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
