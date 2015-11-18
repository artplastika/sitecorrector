<?php

/**
 * @version     15.11.21
 * @package     com_sitecorrector
 * @copyright   (C) 2015 Victor Glushenkov (http://artplastika.ru)
 * @license     GNU General Public License version 3, or later. See LICENSE.txt
 * @author      Victor Glushenkov <dev@artplastika.ru> - http://artplastika.ru
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class SiteСorrectorController extends JControllerLegacy {

    /**
     * Method to display a view.
     *
     * @param	boolean			$cachable	If true, the view output will be cached
     * @param	array			$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return	JController		This object to support chaining.
     * @since	1.5
     */
    public function display($cachable = false, $urlparams = false) {
        require_once JPATH_COMPONENT . '/helpers/sitecorrector.php';

        $view = JFactory::getApplication()->input->getCmd('view', '');
        JFactory::getApplication()->input->set('view', $view);

        parent::display($cachable, $urlparams);

        return $this;
    }

}
