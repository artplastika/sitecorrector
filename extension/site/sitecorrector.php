<?php
/**
 * @version     15.11.21
 * @package     com_sitecorrector
 * @copyright   (C) 2015 Victor Glushenkov (http://artplastika.ru)
 * @license     GNU General Public License version 3, or later. See LICENSE.txt
 * @author      Victor Glushenkov <dev@artplastika.ru> - http://artplastika.ru
 */
 
defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::register('SitecorrectorFrontendHelper', JPATH_COMPONENT . '/helpers/sitecorrector.php');

// Execute the task.
$controller = JControllerLegacy::getInstance('Sitecorrector');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
