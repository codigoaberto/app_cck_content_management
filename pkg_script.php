<?php
/**
* @version 			SEBLOD 3.x More
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				http://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2013 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

// Script
class pkg_app_cck_content_managementInstallerScript extends JCckInstallerScriptApp
{
function install( $parent )
	{
	// Get a db connection.
$db = JFactory::getDbo();
// Create a new query object.
$query = $db->getQuery(true);

$query
    ->select('*')
    ->from($db->quoteName('#__extensions'))
    ->where($db->quoteName('name') . ' LIKE '. $db->quote('com_cck'))
    ->order($db->quoteName('extension_id') . ' DESC');
 
// Reset the query using our newly populated query object.
$db->setQuery($query);
$extension = $db->loadObject();
// Load the results as a list of stdClass objects (see later for more options on retrieving data).
$results = $db->loadObjectList();
$profile = new stdClass();
$profile->id='';
$profile->menutype	='usermenu';	
$profile->title='Content Management';				
$profile->alias='content-management';		
$profile->note='';	
$profile->path='content-management';	
$profile->link='index.php?option=com_cck&view=list&search=frontend_content_management_app&task=search';	
$profile->type='component';	
$profile->published='1';	
$profile->parent_id='1';	
$profile->level='1';	
$profile->component_id=$extension->extension_id;	
$profile->checked_out='0';	
$profile->checked_out_time='0000-00-00 00:00:00';	
$profile->browserNav='0';	
$profile->access='1';	
$profile->img='';	
$profile->template_style_id='0';	
$profile->params='{"show_list_title":"","tag_list_title":"h2","class_list_title":"","show_list_desc":"","list_desc":"","show_form":"","auto_redirect":"","ordering":"","order_by":"","show_items_number":"","show_items_number_label":"Results","class_items_number":"total","show_pages_number":"","show_pagination":"","class_pagination":"pagination","urlvars":"","live":"","variation":"","raw_rendering":"0","menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}';	
$profile->lft='83';	
$profile->rgt='84';	
$profile->home	='0';	
$profile->language	='*';	
$profile->client_id='0';	
$result = JFactory::getDbo()->insertObject('#__menu', $profile);
	}
}
?>