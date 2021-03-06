<?php

namespace Famoser\MBOApiWrapper\FinderService;

class PaymentInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Famoser\MBOApiWrapper\FinderService\PaymentInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
