<?php
namespace qiwi\objects;



class TransactionInfo
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
     */
    public $type;
    /**
     * @var string
     * WAITING,SUCCESS,ERROR
     */
    public $status;
    /**
     * @var text
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
     * @var Provider
     */
    public $provider;
    /**
     * @var array
     */
    public $source;
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