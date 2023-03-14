<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace App\Models;

use App\Models\Concerns\UselessTrait;
use Illuminate\Database\Eloquent\Model;

class CustomModel extends Model
{
    use UselessTrait;

    public function save(array $options = [])
    {
        $this->useless();

        return parent::save($options);
    }
}
