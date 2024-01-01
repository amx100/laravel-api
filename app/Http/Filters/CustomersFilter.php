<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use App\Http\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{
    protected $safeParams = [
        'first_name' => ['eq'],
        'last_name' => ['eq'],
        'dob' => ['eq', 'gt', 'lt'],
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
