<?php
namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
=======
use App\Http\Filters\ApiFilter;
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d

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