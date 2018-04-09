<?php
namespace qiwi\query;

use qiwi\objects\PayResult;



class PayQuery extends BaseQuery
{
    protected $data = ['sum' => ['currency' => '643'], 'paymentMethod' => ['type' => 'Account', 'accountId' => '643'], 'fields' => []];
    protected $providerId;
    
    
    /**
     * @return PayQuery
     */
    function providerId($value)
    {
        $this->providerId = $value;
        return $this;
    }
    /**
     * @return PayQuery
     */
    function id($value)
    {
        $this->data['id'] = (string)$value;
        return $this;
    }
    /**
     * @return PayQuery
     */
    function amount($value)
    {
        $this->data['sum']['amount'] = (string)$value;
        return $this;
    }
    /**
     * @return PayQuery
     */
    function account($value)
    {
        $this->data['fields']['account'] = (string)$value;
        return $this;
    }
    /**
     * @return PayResult
     */
    function query()
    {
        return $this->api->query("sinap/api/v2/terms/{$this->providerId}/payments", "POST", $this->data);
    }
}