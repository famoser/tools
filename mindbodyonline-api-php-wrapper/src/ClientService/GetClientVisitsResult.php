<?php

namespace Famoser\MBOApiWrapper\ClientService;

class GetClientVisitsResult extends MBResult
{

    /**
     * @var ArrayOfVisit $Visits
     */
    protected $Visits = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfVisit
     */
    public function getVisits()
    {
      return $this->Visits;
    }

    /**
     * @param ArrayOfVisit $Visits
     * @return \Famoser\MBOApiWrapper\ClientService\GetClientVisitsResult
     */
    public function setVisits($Visits)
    {
      $this->Visits = $Visits;
      return $this;
    }

}
