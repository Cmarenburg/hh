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
 * @copyright $Date: 2012-04-24 23:25:26 -0300 (Tue, 24 Apr 2012) $
 * @license   http://opensource.org/licenses/gpl-3.0.html  GPL 3
 * @package
 */

/**
 * Description of Order
 *
 * @package   
 * @author    Michael Caplan <farmnik@harvesthand.com>
 * @version   $Id: Item.php 518 2012-04-25 02:25:26Z farmnik $
 * @copyright $Date: 2012-04-24 23:25:26 -0300 (Tue, 24 Apr 2012) $
 * @license   http://opensource.org/licenses/gpl-3.0.html  GPL 3
 */
class HHF_Order_Item
{
    /**
     * @var HH_Domain_Farm 
     */
    protected $_farm;
    
    /**
     * @var HHF_Order
     */
    protected $_order;
    
    protected $_quantity = 1;
    
    /**
     * Item constructor
     */
    public function __construct(HH_Domain_Farm $farm, $quantity = 1)
    {
        $this->_farm = $farm;

        $this->setQuantity($quantity);
    }
    
    /**
     * Set quantity of item
     * 
     * @param int $quantity
     * @return HHF_Order_Item 
     */
    public function setQuantity($quantity)
    {
        $this->_quantity = $quantity;
        return $this;
    }
    
    /**
     * Quantity
     * 
     * @return int
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }
    
    public function setOrder(HHF_Order $order)
    {
        $this->_order = $order;
    }
}
