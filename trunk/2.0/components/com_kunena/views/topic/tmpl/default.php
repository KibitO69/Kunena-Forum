<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<?php
$this->document->addScriptDeclaration('// <![CDATA[
var kunena_anonymous_name = "'.JText::_('COM_KUNENA_USERNAME_ANONYMOUS').'";
// ]]>');
?>

<!-- Pathway -->
<?php $this->displayPathway () ?>
<!-- / Pathway -->

<?php if ($this->category->headerdesc) : ?>
	<div id="kforum-head" class="<?php echo isset ( $this->category->class_sfx ) ? ' kforum-headerdesc' . $this->escape($this->category->class_sfx) : '' ?>">
		<?php echo KunenaHtmlParser::parseBBCode ( $this->category->headerdesc ) ?>
	</div>
<?php endif ?>

<?php
	$this->displayPoll();
	CKunenaTools::showModulePosition( 'kunena_poll' );
	$this->displayTopicActions(0);
?>

<div class="kblock">
	<div class="kheader">
		<h2><span><?php echo JText::_('COM_KUNENA_TOPIC') ?> <?php echo $this->escape($this->topic->subject) ?></span></h2>
		<?php if ($this->usertopic->favorite) : ?><div class="kfavorite"></div><?php endif ?>
		<?php if (!empty($this->keywords)) : ?><div class="kkeywords"><?php echo JText::sprintf('COM_KUNENA_TOPIC_TAGS', $this->escape($this->keywords)) ?></div><?php endif ?>
	</div>
	<div class="kcontainer">
		<div class="kbody"><?php $this->displayMessages() ?></div>
	</div>
</div>
<?php $this->displayTopicActions(1); ?>

<!-- Pathway -->
<?php $this->displayPathway () ?>
<!-- / Pathway -->

<!-- B: List Actions Bottom -->
<div class="kcontainer klist-bottom">
	<div class="kbody">
		<div class="kmoderatorslist-jump fltrt">
				<?php $this->displayForumJump (); ?>
		</div>
		<?php if (!empty ( $this->moderators ) ) : ?>
		<div class="klist-moderators">
				<?php
				echo '' . JText::_('COM_KUNENA_GEN_MODERATORS') . ": ";
				$modlinks = array();
				foreach ( $this->moderators as $userid ) {
					$modlinks[] = CKunenaLink::GetProfileLink ( $userid );
				}
				echo implode(', ', $modlinks);
				?>
		</div>
		<?php endif; ?>
	</div>
</div>
<!-- F: List Actions Bottom -->