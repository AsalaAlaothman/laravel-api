<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter
{
    protected $safeParametes = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'city' => ['eq'],
        'postal_code' => ['eq', 'gt', 'lt', 'gte', 'lte']

    ];
    protected $columnMap = [
        'name' => 'name',
        'type' => 'type',
        'email' => 'email',
        'address' => 'address',
        'city' => 'city',
        'postal_code' => 'postal_code'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<='
    ];
}
