<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace App\Models\Concerns;

use App\Models\News;

trait UselessTrait
{
    final protected function useless(): void
    {
        if ($this instanceof News) {
            // This one must be auto-fixed during the shift
            // Because it uses deprecated functionality.
            echo $this->belongsTo(\App\Models\User::class)->getRelation();
        }
    }
}
