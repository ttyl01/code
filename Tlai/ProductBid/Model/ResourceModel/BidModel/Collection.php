<?php
namespace Tlai\ProductBid\Model\ResourceModel\BidModel;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Tlai\ProductBid\Model\BidModel','Tlai\ProductBid\Model\ResourceModel\BidModel');
    }
}
