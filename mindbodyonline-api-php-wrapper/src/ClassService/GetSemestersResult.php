<?php

namespace Famoser\MBOApiWrapper\ClassService;

class GetSemestersResult extends MBResult
{

    /**
     * @var ArrayOfSemester $Semesters
     */
    protected $Semesters = null;

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
     * @return ArrayOfSemester
     */
    public function getSemesters()
    {
      return $this->Semesters;
    }

    /**
     * @param ArrayOfSemester $Semesters
     * @return \Famoser\MBOApiWrapper\ClassService\GetSemestersResult
     */
    public function setSemesters($Semesters)
    {
      $this->Semesters = $Semesters;
      return $this;
    }

}
