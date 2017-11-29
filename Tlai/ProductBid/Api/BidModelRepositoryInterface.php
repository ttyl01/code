<?php
namespace Tlai\ProductBid\Api;

use Tlai\ProductBid\Api\Data\BidModelInterface;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Api\SearchCriteriaInterface;

interface BidModelRepositoryInterface 
{
    public function save(BidModelInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(BidModelInterface $page);

    public function deleteById($id);
}
