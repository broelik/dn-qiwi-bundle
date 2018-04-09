<?php
namespace qiwi\objects;

use php\time\Time;

class ContractInfo
{
    /**
     * @var bool
     */
    public $blocked;
    /**
     * @var int
     */
    public $contactId;
    /**
     * @var string
     */
    public $creationDate;
    /**
     * @var array
     */
    public $features;
    /**
     * @var IdentificationInfo[]
     */
    public $identificationInfo;
}