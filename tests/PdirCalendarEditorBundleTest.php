<?php

declare(strict_types=1);

namespace Pdir\CalendarEditorBundle\Tests;

use Pdir\CalendarEditorBundle\PdirCalendarEditorBundle;
use PHPUnit\Framework\TestCase;

class PdirCalendarEditorBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new PdirCalendarEditorBundle();

        $this->assertInstanceOf('Pdir\CalendarEditorBundle\PdirCalendarEditorBundle', $bundle);
    }
}
