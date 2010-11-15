<?php 
/**
 * @version $Id$
 * Kunena Translate Component
 * 
 * @package	Kunena Translate
 * @Copyright (C) 2010 www.kunena.com All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 */
defined('_JEXEC') or die('Restricted access'); 
JToolBarHelper::custom('update', 'save.png', '', JText::_('Update Labels'), false);
JToolBarHelper::cancel();
?>
<form action="index.php" method="post" name="adminForm">
<table class="adminlist">
	<tbody>
		<tr>
			<td>Client</td>
			<td><?php echo JHTML::_('select.genericlist', $this->client, 'client','', 'value','text')?></td>
		</tr>
	</tbody>
</table>
<input type="hidden" name="controller" value="update" />
<input type="hidden" name="option" value="com_kunenatranslate" />
<input type="hidden" name="task" value="" />
</form>
