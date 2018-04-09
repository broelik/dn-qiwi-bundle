<?php
namespace qiwi\query;

use php\time\Time;
use php\time\TimeFormat;
use qiwi\QiwiApi;

abstract class BaseQuery
{
    /**
     * @var QiwiApi
     */
    protected $api;
    protected $data = [];
    
    function __construct(QiwiApi $api)
    {
        $this->api = $api;
    }
    function unparseTime($time)
    {
        if($time instanceof Time)
            return (new TimeFormat(QiwiApi::TIME_FORMAT))->format($time);
        return $time;
    }
    function __debugInfo()
    {
        return ['data' => $this->data];
    }
}