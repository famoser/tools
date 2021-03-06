<?php

namespace Famoser\MBOApiWrapper\FinderService;

class GetBusinessLocationsWithinRadiusResult extends MBResult
{

    /**
     * @var ArrayOfLocation $Locations
     */
    protected $Locations = null;

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
     * @return ArrayOfLocation
     */
    public function getLocations()
    {
      return $this->Locations;
    }

    /**
     * @param ArrayOfLocation $Locations
     * @return \Famoser\MBOApiWrapper\FinderService\GetBusinessLocationsWithinRadiusResult
     */
    public function setLocations($Locations)
    {
      $this->Locations = $Locations;
      return $this;
    }

}
