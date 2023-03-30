<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace App\Events;

class ShiftyEvent
{
    public const SHIFT = array(
        'one',
        'two',
        'three'
    );

    public final function getShifts()
    {
        // Shifty code
        // Old code style
        return self::SHIFT;
    }
}
