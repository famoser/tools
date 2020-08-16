<?php

namespace Famoser\MBOApiWrapper\ClientService;

class AddArrivalResult extends MBResult
{

    /**
     * @var boolean $ArrivalAdded
     */
    protected $ArrivalAdded = null;

    /**
     * @var ClientService $ClientService
     */
    protected $ClientService = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     * @param boolean $ArrivalAdded
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount, $ArrivalAdded)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
      $this->ArrivalAdded = $ArrivalAdded;
    }

    /**
     * @return boolean
     */
    public function getArrivalAdded()
    {
      return $this->ArrivalAdded;
    }

    /**
     * @param boolean $ArrivalAdded
     * @return \Famoser\MBOApiWrapper\ClientService\AddArrivalResult
     */
    public function setArrivalAdded($ArrivalAdded)
    {
      $this->ArrivalAdded = $ArrivalAdded;
      return $this;
    }

    /**
     * @return ClientService
     */
    public function getClientService()
    {
      return $this->ClientService;
    }

    /**
     * @param ClientService $ClientService
     * @return \Famoser\MBOApiWrapper\ClientService\AddArrivalResult
     */
    public function setClientService($ClientService)
    {
      $this->ClientService = $ClientService;
      return $this;
    }

}
