<?php
/**
 * AccountFilter.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Support\Http\Api;

use FireflyIII\Models\AccountType;

/**
 * Trait AccountFilter
 */
trait AccountFilter
{
    /**
     * All the available types.
     *
     * @param string $type
     *
     * @return array
     */
    protected function mapAccountTypes(string $type): array
    {
        $types  = [
            'all'                        => [AccountType::DEFAULT, AccountType::CASH, AccountType::ASSET, AccountType::EXPENSE, AccountType::REVENUE,
                                             AccountType::INITIAL_BALANCE, AccountType::BENEFICIARY, AccountType::IMPORT, AccountType::RECONCILIATION,
                                             AccountType::LOAN, AccountType::DEBT, AccountType::MORTGAGE],
            'asset'                      => [AccountType::DEFAULT, AccountType::ASSET,],
            'cash'                       => [AccountType::CASH,],
            'expense'                    => [AccountType::EXPENSE, AccountType::BENEFICIARY,],
            'revenue'                    => [AccountType::REVENUE,],
            'special'                    => [AccountType::CASH, AccountType::INITIAL_BALANCE, AccountType::IMPORT, AccountType::RECONCILIATION,],
            'hidden'                     => [AccountType::INITIAL_BALANCE, AccountType::IMPORT, AccountType::RECONCILIATION],
            'liability'                  => [AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE, AccountType::CREDITCARD],
            'liabilities'                => [AccountType::DEBT, AccountType::LOAN, AccountType::MORTGAGE, AccountType::CREDITCARD],
            AccountType::DEFAULT         => [AccountType::DEFAULT],
            AccountType::CASH            => [AccountType::CASH],
            AccountType::ASSET           => [AccountType::ASSET],
            AccountType::EXPENSE         => [AccountType::EXPENSE],
            AccountType::REVENUE         => [AccountType::REVENUE],
            AccountType::INITIAL_BALANCE => [AccountType::INITIAL_BALANCE],
            AccountType::BENEFICIARY     => [AccountType::BENEFICIARY],
            AccountType::IMPORT          => [AccountType::IMPORT],
            AccountType::RECONCILIATION  => [AccountType::RECONCILIATION],
            AccountType::LOAN            => [AccountType::LOAN],
            AccountType::MORTGAGE        => [AccountType::MORTGAGE],
            AccountType::DEBT            => [AccountType::DEBT],
            AccountType::CREDITCARD      => [AccountType::CREDITCARD],
            'default account'            => [AccountType::DEFAULT],
            'cash account'               => [AccountType::CASH],
            'asset account'              => [AccountType::ASSET],
            'expense account'            => [AccountType::EXPENSE],
            'revenue account'            => [AccountType::REVENUE],
            'initial balance account'    => [AccountType::INITIAL_BALANCE],
            'reconciliation'             => [AccountType::RECONCILIATION],
            'loan'                       => [AccountType::LOAN],
            'mortgage'                   => [AccountType::MORTGAGE],
            'debt'                       => [AccountType::DEBT],
            'credit card'                => [AccountType::CREDITCARD],
            'credit-card'                => [AccountType::CREDITCARD],
            'creditcard'                 => [AccountType::CREDITCARD],
            'cc'                         => [AccountType::CREDITCARD],

        ];
        $return = $types['all'];
        if (isset($types[$type])) {
            $return = $types[$type];
        }

        return $return; // @codeCoverageIgnore
    }
}