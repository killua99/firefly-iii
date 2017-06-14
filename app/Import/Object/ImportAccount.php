<?php
/**
 * ImportAccount.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 * This software may be modified and distributed under the terms of the Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types=1);

namespace FireflyIII\Import\Object;


class ImportAccount
{

    /** @var array  */
    private $accountIds = [];

    public function setAccountId(string $value)
    {
        $this->accountIds[] = $value;
    }
}