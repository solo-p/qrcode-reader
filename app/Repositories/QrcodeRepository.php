<?php

namespace App\Repositories;

use App\Models\Qrcode;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QrcodeRepository
 * @package App\Repositories
 * @version March 14, 2020, 3:32 pm UTC
*/

class QrcodeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'website',
        'company_name',
        'product_name',
        'product_url',
        'callback_url',
        'qrcode_path',
        'amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Qrcode::class;
    }
}
