<?php
namespace qiwi\objects;

use php\time\Time;



class PaymentHistory
{
    /**
     * @var Payment[]
     */
    public $data;
    /**
     * @var int
     */
    public $nextTxnId;
    /**
     * @var Time
     */
    public $nextTxnDate;
}