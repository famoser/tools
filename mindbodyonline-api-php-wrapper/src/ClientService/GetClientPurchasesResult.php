<?php

namespace Famoser\MBOApiWrapper\ClientService;

class GetClientPurchasesResult extends MBResult
{

    /**
     * @var ArrayOfSaleItem $Purchases
     */
    protected $Purchases = null;

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
     * @return ArrayOfSaleItem
     */
    public function getPurchases()
    {
      return $this->Purchases;
    }

    /**
     * @param ArrayOfSaleItem $Purchases
     * @return \Famoser\MBOApiWrapper\ClientService\GetClientPurchasesResult
     */
    public function setPurchases($Purchases)
    {
      $this->Purchases = $Purchases;
      return $this;
    }

}
