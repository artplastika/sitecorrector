<?php

/**
 * @version     15.11.21
 * @package     com_sitecorrector
 * @copyright   (C) 2015 Victor Glushenkov (http://artplastika.ru)
 * @license     GNU General Public License version 3, or later. See LICENSE.txt
 * @author      Victor Glushenkov <dev@artplastika.ru> - http://artplastika.ru
 */
 
 defined('_JEXEC') or die;

class SitecorrectorFrontendHelper
{
	

	/**
	 * Get an instance of the named model
	 *
	 * @param string $name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_sitecorrector/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_sitecorrector/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'SitecorrectorModel');
		}

		return $model;
	}
}
