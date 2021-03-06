<?php

namespace Famoser\MBOApiWrapper\StaffService;

class MBRequest
{

    /**
     * @var SourceCredentials $SourceCredentials
     */
    protected $SourceCredentials = null;

    /**
     * @var UserCredentials $UserCredentials
     */
    protected $UserCredentials = null;

    /**
     * @var XMLDetailLevel $XMLDetail
     */
    protected $XMLDetail = null;

    /**
     * @var int $PageSize
     */
    protected $PageSize = null;

    /**
     * @var int $CurrentPageIndex
     */
    protected $CurrentPageIndex = null;

    /**
     * @var ArrayOfString $Fields
     */
    protected $Fields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SourceCredentials
     */
    public function getSourceCredentials()
    {
      return $this->SourceCredentials;
    }

    /**
     * @param SourceCredentials $SourceCredentials
     * @return \Famoser\MBOApiWrapper\StaffService\MBRequest
     */
    public function setSourceCredentials($SourceCredentials)
    {
      $this->SourceCredentials = $SourceCredentials;
      return $this;
    }

    /**
     * @return UserCredentials
     */
    public function getUserCredentials()
    {
      return $this->UserCredentials;
    }

    /**
     * @param UserCredentials $UserCredentials
     * @return \Famoser\MBOApiWrapper\StaffService\MBRequest
     */
    public function setUserCredentials($UserCredentials)
    {
      $this->UserCredentials = $UserCredentials;
      return $this;
    }

    /**
     * @return XMLDetailLevel
     */
    public function getXMLDetail()
    {
      return $this->XMLDetail;
    }

    /**
     * @param XMLDetailLevel $XMLDetail
     * @return \Famoser\MBOApiWrapper\StaffService\MBRequest
     */
    public function setXMLDetail($XMLDetail)
    {
      $this->XMLDetail = $XMLDetail;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return \Famoser\MBOApiWrapper\StaffService\MBRequest
     */
    public function setPageSize($PageSize)
    {
      $this->PageSize = $PageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPageIndex()
    {
      return $this->CurrentPageIndex;
    }

    /**
     * @param int $CurrentPageIndex
     * @return \Famoser\MBOApiWrapper\StaffService\MBRequest
     */
    public function setCurrentPageIndex($CurrentPageIndex)
    {
      $this->CurrentPageIndex = $CurrentPageIndex;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFields()
    {
      return $this->Fields;
    }

    /**
     * @param ArrayOfString $Fields
     * @return \Famoser\MBOApiWrapper\StaffService\MBRequest
     */
    public function setFields($Fields)
    {
      $this->Fields = $Fields;
      return $this;
    }

}
