<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace App\Events;

class ShiftyEvent
{
    public const SHIFT = [
        'one',
        'two',
        'three',
    ];

    final public function getShifts()
    {
        // Shifty code
        // Old code style
        return self::SHIFT;
    }
}
