<?php
namespace qiwi\objects;

use qiwi\objects\BaseObject;
use qiwi\objects\PaymentSum;
use qiwi\objects\BalanceType;

class Balance
{
    /**
     * @var string
     */
    public $alias;
    /**
     * @var string
     */
    public $fsAlias;
    /**
     * @var string
     */
    public $title;
    /**
     * @var bool
     */
    public $hasBalance;
    /**
     * @var int
     */
    public $currency;
    /**
     * @var BalanceType
     */
    public $type;
    /**
     * @var PaymentSum
     */
    public $balance;
}