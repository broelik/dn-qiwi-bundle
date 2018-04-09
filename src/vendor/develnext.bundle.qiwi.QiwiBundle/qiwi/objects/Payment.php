<?php
namespace qiwi\objects;



class Payment extends BaseObject
{
    /**
     * @var int
     */
    public $txnId;
    /**
     * @var int
     */
    public $personId;
    /**
     * @var string
     */
    public $date;
    /**
     * @var int
     */
    public $errorCode;
    /**
     * @var string
     */
    public $error;
    /**
     * @var string
     * IN,OUT,QIWI_CARD
     */
    public $type;
    /**
     * @var string
     * WAITING,SUCCESS,ERROR
     */
    public $status;
    /**
     * @var string
     */
    public $statusText;
    /**
     * @var string
     */
    public $trmTxnId;
    /**
     * @var string
     */
    public $account;
    /**
     * @var PaymentSum
     */
    public $sum;
    /**
     * @var Commision
     */
    public $commission;
    /**
     * @var PaymentTotal
     */
    public $total;
    /**
     * @var Provider
     */
    public $provider;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var double
     */
    public $currencyRate;
    /**
     * @var array
     */
    public $extras;
    /**
     * @var bool
     */
    public $chequeReady;
    /**
     * @var bool
     */
    public $bankDocumentAvailable;
    /**
     * @var bool
     */
    public $repeatPaymentEnabled;
    /**
     * @var bool
     */
    public $favoritePaymentEnabled;
    /**
     * @var bool
     */
    public $regularPaymentEnabled;
}