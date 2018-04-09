<?php
namespace qiwi\objects;

use php\time\Time;

class PassInfo
{
    /**
     * @var bool
     */
    public $lastPass;
    /**
     * @var string
     */
    public $lastPassChange;
    /**
     * @var string
     */
    public $nextPassChange;
}