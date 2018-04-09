<?php
namespace qiwi\query;



class RatesQuery extends BaseQuery
{
    protected $id;
    
    
    /**
     * @return RatesQuery
     */
    function id($value)
    {
        $this->id = $value;
        return $this;
    }
    /**
     * @return array
     */
    function query()
    {
        return $this->api->query("sinap/providers/{$this->id}/form", "GET");
    }
}