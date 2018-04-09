<?php
namespace qiwi\query;

use qiwi\objects\TransactionInfo;



class TransactionInfoQuery extends BaseQuery
{
    protected $transactionId;

    /**
     * IN,OUT,QIWI_CARD
     * @return TransactionInfoQuery
     */
    function type($value)
    {
        $this->data['type'] = $value;
        return $this;
    }
    /**
     * @return TransactionInfoQuery
     */
    function transactionId($value)
    {
        $this->transactionId = $value;
        return $this;
    }
    /**
     * @return TransactionInfo
     */
    function query()
    {
        return $this->api->query("payment-history/v1/transactions/{$this->transactionId}", "GET", $this->data);
    }
}