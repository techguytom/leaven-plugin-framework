<?php
/**
 * GroupData.php
 */

namespace Leaven\Lib\Buddypress;

use \BP_Groups_Group as BP;

/**
 * GroupData
 *
 * @uses GroupArguments
 * @package Leaven Framework
 * @author Tom Jenkins <tom@techguytom.com>
 * @version $Id$
 */
class GroupData extends GroupArguments
{
    /**
     * getGroupListArray
     *
     * Get the list of groups configured in BuddyPress
     *
     * @return void
     */
    public function getGroupListArray()
    {
        return BP::get($this->argumentsOptions());
    }
}
