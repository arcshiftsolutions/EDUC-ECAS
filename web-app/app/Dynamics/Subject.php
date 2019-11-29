<?php
/**
 * Created by PhpStorm.
 * User: dirk
 * Date: 2019-04-18
 * Time: 2:50 PM
 */

namespace App\Dynamics;

use App\Dynamics\Interfaces\iModelRepository;

class Subject extends DynamicsRepository implements iModelRepository
{
    public static $table = 'educ_subjectcodes';

    public static $primary_key = 'educ_subjectcode';

    public static $fields = [
        'id'   => 'educ_subjectcode',
        'name' => 'educ_name'
    ];
}