<?php

declare(strict_types=1);

/*
 * This file is part of
 *
 * CalendarEditorBundle
 * @copyright  Daniel Gaußmann 2018
 * @copyright  pdir / digital agentur // pdir GmbH 2025
 * @author     Daniel Gaußmann (Gausi)
 * @author     pdir GmbH <develop@pdir.de>
 * @package    Calendar_Editor
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/DanielGausi/Contao-CalendarEditor
 *
 * an extension for
 * Contao Open Source CMS
 * (c) Leo Feyer, LGPL-3.0-or-later
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pdir\CalendarEditorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PdirCalendarEditorBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
