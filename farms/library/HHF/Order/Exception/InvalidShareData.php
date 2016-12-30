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
 * @copyright $Date: 2012-01-17 18:45:31 -0400 (Tue, 17 Jan 2012) $
 * @license   http://opensource.org/licenses/gpl-3.0.html  GPL 3
 * @package
 */

/**
 * Description of InvalidShareData
 *
 * @package   
 * @author    Michael Caplan <farmnik@harvesthand.com>
 * @version   $Id: InvalidShareData.php 409 2012-01-17 22:45:31Z farmnik $
 * @copyright $Date: 2012-01-17 18:45:31 -0400 (Tue, 17 Jan 2012) $
 * @license   http://opensource.org/licenses/gpl-3.0.html  GPL 3
 */
class HHF_Order_Exception_InvalidShareData extends Exception
{
    const TYPE_SHARE = 'SHARE';
    const TYPE_DURATION = 'DURATION';
    const TYPE_SIZE = 'SIZE';
    const TYPE_LOCATION = 'LOCATION';

    protected $_type;
    protected $_id;
    
    /**
     * InvalidShareData constructor
     */
    public function __construct($id, $type)
    {
        $this->_id = $id;
        $this->_type = $type;
        
        parent::__construct('Invalid Share Data Supplied');
    }
    
    public function getId()
    {
        return $this->_id;
    }
    
    public function getType()
    {
        return $this->_type;
    }
}