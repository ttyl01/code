<?php
namespace Tlai\ProductBid\Model\ResourceModel;
class BidModel extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('tlai_customer_product_bid_price','tlai_customer_product_bid_price_id');
    }
}
