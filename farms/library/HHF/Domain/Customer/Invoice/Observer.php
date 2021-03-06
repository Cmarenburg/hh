<?php

/**
 * HarvestHand
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License Version 3
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to farmnik@harvesthand.com so we can send you a copy immediately.
 *
 * @copyright $Date: 2012-05-24 15:54:16 -0300 (Thu, 24 May 2012) $
 * @author    Michael Caplan <farmnik@harvesthand.com>
 * @license   http://opensource.org/licenses/gpl-3.0.html  GPL 3
 * @package   HHF_Domain
 */

/**
 * Description of Observer
 *
 * @package   HHF_Domain
 * @author    Michael Caplan <farmnik@harvesthand.com>
 * @version   $Id: Observer.php 536 2012-05-24 18:54:16Z farmnik $
 * @copyright $Date: 2012-05-24 15:54:16 -0300 (Thu, 24 May 2012) $
 * @license   http://opensource.org/licenses/gpl-3.0.html  GPL 3
 */
class HHF_Domain_Customer_Invoice_Observer implements HH_Observer
{

    /**
     * Update observer
     *
     * @param HH_Observer_Subject $subject Subject being observed
     * @param HH_Observer_Event|null $event Event type
     */
    public function update (HH_Observer_Subject $subject,
        HH_Observer_Event $event = null)
    {
        $this->_updateCustomerItemsStatus($subject, $event);
    }
    
    protected function _updateCustomerItemsStatus(HHF_Domain_Customer_Invoice $subject,
        HH_Observer_Event $event = null)
    {
        $items = $subject->getRelatedCustomerItems();
        
        foreach ($items as $item) {
            if ($item->isEmpty()) {
                continue;
            }
            $item->getService()->updatePaymentStatus();
        }
    }

}