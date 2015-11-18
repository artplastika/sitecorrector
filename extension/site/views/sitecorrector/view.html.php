<?php
/**
 * @version     15.11.21
 * @package     com_sitecorrector
 * @copyright   (C) 2015 Victor Glushenkov (http://artplastika.ru)
 * @license     GNU General Public License version 3, or later. See LICENSE.txt
 * @author      Victor Glushenkov <dev@artplastika.ru> - http://artplastika.ru
 */

defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class SiteCorrectorViewSiteCorrector extends JViewLegacy
{
        // Overwriting JView display method
        function display($tpl = null) 
        {
                // Assign data to the view
                $this->msg = 'Contribution';
 
                // Display the view
                parent::display($tpl);
        }
}