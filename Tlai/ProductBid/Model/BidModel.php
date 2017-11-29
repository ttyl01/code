<?php
namespace Tlai\ProductBid\Model;
class BidModel extends \Magento\Framework\Model\AbstractModel implements \Tlai\ProductBid\Api\Data\BidModelInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'tlai_productbid_bidmodel';

    protected function _construct()
    {
        $this->_init('Tlai\ProductBid\Model\ResourceModel\BidModel');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
