<?php
namespace qiwi\query;

use qiwi\objects\PaymentStat;



class PaymentStatQuery extends BaseQuery
{
    /**
     * @return PaymentStatQuery
     */
    function startDate($value)
    {
        $this->data['startDate'] = $this->unparseTime($value);
        return $this;
    }
    /**
     * @return PaymentStatQuery
     */
    function endDate($value)
    {
        $this->data['endDate'] = $this->unparseTime($value);
        return $this;
    }
    /**
     * ALL,IN,OUT,QIWI_CARD
     * @return PaymentStatQuery
     */
    function operation($value)
    {
        $this->data['operation'] = $value;
        return $this;
    }
    /**
     * QW_RUB,QW_USD,QW_EUR,CARD,MK
     * @return PaymentStatQuery
     */
    function sources(...$value)
    {
        $this->data['sources'] = $value;
        return $this;
    }
    /**
     * @return PaymentStat
     */
    function query()
    {
        return $this->api->query("payment-history/v1/persons/{$this->api->getWallet()}/payments/total", "GET", $this->data);
    }
}