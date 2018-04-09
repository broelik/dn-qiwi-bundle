<?php
namespace qiwi\objects;

use qiwi\objects\BaseObject;
use qiwi\objects\PinInfo;
use qiwi\objects\PassInfo;
use qiwi\objects\MobilePinInfo;
use php\time\Time;

class AuthInfo extends BaseObject
{
    /**
     * @var int
     */
    public $personId;
    /**
     * @var Time
     */
    public $registrationDate;
    /**
     * @var string
     */
    public $boundEmail;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var Time
     */
    public $lastLoginDate;
    /**
     * @var MobilePinInfo
     */
    public $mobilePinInfo;
    /**
     * @var PassInfo
     */
    public $passInfo;
    /**
     * @var PinInfo
     */
    public $pinInfo;
}