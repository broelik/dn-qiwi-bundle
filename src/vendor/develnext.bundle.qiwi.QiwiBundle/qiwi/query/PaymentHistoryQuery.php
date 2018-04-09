<?php
namespace qiwi\query;

use qiwi\objects\PaymentHistory;



class PaymentHistoryQuery extends BaseQuery
{
    /**
     * @return PaymentHistoryQuery
     */
    function rows($value)
    {
        $this->data['rows'] = $value;
        return $this;
    }
    /**
     * ALL,IN,OUT,QIWI_CARD
     * @return PaymentHistoryQuery
     */
    function operation($value)
    {
        $this->data['operation'] = $value;
        return $this;
    }
    /**
     * @return PaymentHistoryQuery
     */
    function sources(...$value)
    {
        $this->data['sources'] = $value;
        return $this;
    }
    /**
     * @return PaymentHistoryQuery
     */
    function startDate($value)
    {
        $this->data['startDate'] = $this->unparseTime($value);
        return $this;
    }
    /**
     * @return PaymentHistoryQuery
     */
    function endDate($value)
    {
        $this->data['endDate'] = $this->unparseTime($value);
        return $this;
    }
    /**
     * @return PaymentHistoryQuery
     */
    function nextTxnDate($value)
    {
        $this->data['nextTxnDate'] = $this->unparseTime($value);
        return $this;
    }
    /**
     * @return PaymentHistoryQuery
     */
    function nextTxnId($value)
    {
        $this->data['nextTxnId'] = $value;
        return $this;
    }
    /**
     * @return PaymentHistory
     */
    function query()
    {
        return $this->api->query("payment-history/v1/persons/{$this->api->getWallet()}/payments", 'GET', $this->data);
    }
}