<?php
namespace qiwi\objects;



class PaymentStat
{
    /**
     * @var PaymentSum[]
     */
    public $incomingTotal;
    /**
     * @var PaymentSum[]
     */
    public $outgoingTotal;
}