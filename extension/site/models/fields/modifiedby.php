<?php
/**
 * @version     15.11.21
 * @package     com_sitecorrector
 * @copyright   (C) 2015 Victor Glushenkov (http://artplastika.ru)
 * @license     GNU General Public License version 3, or later. See LICENSE.txt
 * @author      Victor Glushenkov <dev@artplastika.ru> - http://artplastika.ru
 */
 
defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

/**
 * Supports an HTML select list of categories
 */
class JFormFieldModifiedby extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var        string
	 * @since    1.6
	 */
	protected $type = 'modifiedby';

	/**
	 * Method to get the field input markup.
	 *
	 * @return    string    The field input markup.
	 * @since    1.6
	 */
	protected function getInput()
	{
		// Initialize variables.
		$html   = array();
		$user   = JFactory::getUser();
		$html[] = '<input type="hidden" name="' . $this->name . '" value="' . $user->id . '" />';
		$html[] = "<div>" . $user->name . " (" . $user->username . ")</div>";

		return implode($html);
	}
}