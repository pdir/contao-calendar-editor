<?php

/**
 * This file is part of 
 * 
 * CalendarEditorBundle
 * @copyright  Daniel Gaußmann 2018
 * @author     Daniel Gaußmann (Gausi) 
 * @package    Calendar_Editor
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/DanielGausi/Contao-CalendarEditor
 *
 * an extension for
 * Contao Open Source CMS
 * (c) Leo Feyer, LGPL-3.0-or-later
 *
 */


/**
 * This is the tinyMCE (rich text editor) configuration file. Please visit
 * http://tinymce.moxiecode.com for more information.
 */

$assetsUrl = \Contao\System::getContainer()->get('contao.assets.assets_context')->getStaticUrl();

if ($GLOBALS['TL_CONFIG']['useRTE']): ?>

<script src="<?= $assetsUrl ?>assets/tinymce4/js/tinymce.min.js"></script>
<script>tinymce.init({
	selector:'textarea#ctrl_details, textarea#ctrl_teaser',
	menubar : false,
	language : "<?php echo $this->language; ?>",
	plugins : 'link, table, paste',	
	toolbar1: "link unlink | undo redo | bold italic underline | bullist numlist | removeformat",	
	resize: true,
	paste_word_valid_elements: "b,strong,i,em,h1,h2,p"

});</script>

<?php endif; ?>