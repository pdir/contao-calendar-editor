<?php

namespace Pdir\CalendarEditorBundle\Models;

use Contao\CalendarModel;
use function is_array;

class CalendarModelEdit extends CalendarModel
{
    public static function findByIds($arrIds, array $arrOptions = [])
    {
        if (empty($arrIds) || !is_array($arrIds)) {
            return null;
        }
        $t = static::$strTable;
        $arrColumns[] = "$t.id IN(" . implode(',', array_map('\intval', $arrIds)) . ")";

        return static::findBy($arrColumns, $arrOptions);
    }

}
