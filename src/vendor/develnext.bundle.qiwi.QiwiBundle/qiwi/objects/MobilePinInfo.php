<?php
namespace qiwi\objects;

use php\time\Time;



class MobilePinInfo
{
    /**
     * @var bool
     */
    public $mobilePinUsed;
    /**
     * @var string
     */
    public $lastMobilePinChange;
    /**
     * @var string
     */
    public $nextMobilePinChange;
}