<?php
/**
 * Created by PhpStorm.
 * User: dirk
 * Date: 2019-04-18
 * Time: 2:50 PM
 */

namespace App\Dynamics;

use App\Dynamics\Interfaces\iModelRepository;

class Payment extends DynamicsMetaRepository implements iModelRepository
{
    public static $table = 'contact';

    public static $api_verb = 'metadata';

    public static $primary_key = 'educ_methodofpayment';

    public static $fields = [
        'id'   => 'Id',
        'name' => 'Label'
    ];

}