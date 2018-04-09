<?php
namespace qiwi\objects;



class IdentificationInfo
{
    /**
     * @var string
     */
    public $bankAlias;
    /**
     * @var string
     * ANONYMOUS,SIMPLE,VERIFIED,FULL
     */
    public $identificationLevel;
}