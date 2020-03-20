<?php

namespace App\Repositories;

use App\Models\Account;
use InfyOm\Generator\Common\BaseRepository;


/**
 * Class AccountRepository
 * @package App\Repositories
 * @version March 16, 2020, 5:03 pm UTC
*/

class AccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'balance',
        'total_credit',
        'total_debit',
        'withdrawal_method',
        'payment_email',
        'bank_name',
        'bank_branch',
        'bank_account',
        'applied_for_payout',
        'paid',
        'last_date_applied',
        'last_date_paid',
        'country',
        'other_details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Account::class;
    }
}
