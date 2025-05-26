<?php

/**
 * This file is part of 
 * 
 * CalendarEditorBundle
 * @copyright  Daniel Gaußmann 2018
 * @author     Daniel Gaußmann (Gausi)
 * @author     pdir GmbH (develop@pdir.de)
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
 * Front end modules
 */

use Pdir\CalendarEditorBundle\Hooks\ListAllEventsHook;
use Pdir\CalendarEditorBundle\Controller\Module\CalendarEdit;
use Pdir\CalendarEditorBundle\Controller\Module\EventEditor;
use Pdir\CalendarEditorBundle\Controller\Module\EventReaderEdit;
use Pdir\CalendarEditorBundle\Controller\Module\HiddenEventlist;

$GLOBALS['FE_MOD']['events']['calendarEdit']        = CalendarEdit::class;
$GLOBALS['FE_MOD']['events']['EventEditor']         = EventEditor::class;
$GLOBALS['FE_MOD']['events']['EventReaderEditLink'] = EventReaderEdit::class;
$GLOBALS['FE_MOD']['events']['EventHiddenList']     = HiddenEventlist::class;

$GLOBALS['TL_HOOKS']['getAllEvents'][] = [ListAllEventsHook::class, 'updateAllEvents'];