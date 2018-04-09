<?php
namespace qiwi\objects;



class PayResult
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $terms;
    /**
     * @var PayFields
     */
    public $fields;
    /**
     * @var PaymentSum
     */
    public $sum;
    /**
     * @var string
     */
    public $source;
    /**
     * Only for QIWI
     * @var string
     */
    public $comment;
    /**
     * @var Transaction
     */
    public $transaction;
}