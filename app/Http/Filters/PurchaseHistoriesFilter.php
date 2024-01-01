<?php
namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PurchaseHistoriesFilter extends ApiFilter
{
    protected $safeParams = [
        'customerId' => ['eq'],
        'drugId' => ['eq'],
        'quantity' => ['eq', 'gt', 'lt'],
        'purchaseDate' => ['eq', 'gt', 'lt'],
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