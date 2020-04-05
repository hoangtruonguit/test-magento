<?php
namespace Hg\Sales\Block\Adminhtml\Items\Column;

use Magento\Sales\Block\Adminhtml\Items\Column\DefaultColumn;
use Magento\Sales\Model\Order\Item;

/**
 * Sales Order items tracking column renderer
 *
 * @api
 * @author     Truonghn2 <truonghn2@fsoft.com.vn>
 *
 */
class TrackingLink extends DefaultColumn
{
    /**
     * Get tracking link
     *
     * @return string
     */
    public function getTrackingLink()
    {
        $isDisplayTrackingLink = $this->getItem()->getStatusId() == Item::STATUS_PENDING;

        return  $isDisplayTrackingLink ? "Tracking" : "N/A";
    }
}
