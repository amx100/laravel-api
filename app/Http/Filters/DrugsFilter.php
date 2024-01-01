<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class DrugsFilter extends ApiFilter
{
    protected $safeParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'dose' => ['eq', 'gt', 'lt'],
        'sellingPrice' => ['eq', 'gt', 'lt'],
        'expirationDate' => ['eq', 'gt', 'lt'],
        'quantity' => ['eq', 'gt', 'lt'],
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];

    public function apply(Builder $builder, $filterData)
    {
        foreach ($filterData as $key => $value) {
            if (array_key_exists($key, $this->safeParams)) {
                $operator = $this->operatorMap[$this->safeParams[$key][0]];
                $builder->where($key, $operator, $value);
            }
        }

        return $builder;
    }
}
