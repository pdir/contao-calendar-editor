<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

$date = date('Y');

$GLOBALS['ecsHeader'] = <<<EOF
This file is part of 
 
CalendarEditorBundle
@copyright  Daniel Gaußmann 2018
@copyright  pdir / digital agentur // pdir GmbH $date
@author     Daniel Gaußmann (Gausi)
@author     pdir GmbH <develop@pdir.de>
@package    Calendar_Editor
@license    LGPL-3.0-or-later
@see        https://github.com/DanielGausi/Contao-CalendarEditor

an extension for
Contao Open Source CMS
(c) Leo Feyer, LGPL-3.0-or-later

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([__DIR__.'/vendor/contao/easy-coding-standard/config/contao.php']);

    $ecsConfig->ruleWithConfiguration(HeaderCommentFixer::class, [
        'header' => $GLOBALS['ecsHeader']
    ]);

    if (PHP_VERSION_ID < 80000) {
        $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, ['elements' => ['arrays'], 'after_heredoc' => true]);
        $ecsConfig->skip([\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class]); // see https://github.com/symplify/symplify/issues/3130
    }

    // Adjust the configuration according to your needs.
};
