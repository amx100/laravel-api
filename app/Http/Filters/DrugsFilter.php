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
<<<<<<< HEAD
        'expiry' => ['eq', 'gt', 'lt'],
=======
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
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
