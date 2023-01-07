<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter
{
    protected $safeParametes = [
        'customer_id' => ['eq'],
        'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'status' => ['eq'],
        'billed_dated' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'paid_dated' => ['eq', 'gt', 'lt', 'gte', 'lte']

    ];
    protected $columnMap = [
        'customer_id' => 'customer_id',
        'amount' => 'amount',
        'status' => 'status',
        'billed_dated' => 'billed_dated',
        'paid_dated' => 'paid_dated'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<='
    ];
}
