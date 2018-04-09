<?php
namespace qiwi\query;

use qiwi\objects\BalanceInfo;



class BalanceQuery extends BaseQuery
{
    /**
     * @return BalanceInfo
     */
    function query()
    {
        return $this->api->query("funding-sources/v1/accounts/current", "GET");
    }
}