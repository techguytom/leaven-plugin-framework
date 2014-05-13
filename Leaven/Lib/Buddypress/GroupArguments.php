<?php
/**
 * GroupArguments.php
 */

namespace Leaven\Lib\Buddypress;

use Leaven\Lib\Support\WpOptionsBuilder;

/**
 * GroupArguments
 *
 * @uses WpOptionsBuilder
 * @package  Leaven Framework
 * @author Tom Jenkins <tom@techguytom.com>
 * @version $Id$
 */
class GroupArguments extends WpOptionsBuilder
{
    /**
     * type
     *
     * active, newest, alphabetical, random, popular, most-forum-topics or
     * most-forum-posts
     *
     * @var boolean
     */
    private $type;

    /**
     * order
     *
     * 'ASC' or 'DESC'
     *
     * @var string
     */
    private $order;

    /**
     * orderby
     *
     * date_created, last_activity, total_member_count, name, random
     *
     * @var string
     */
    private $orderby;

    /**
     * userId
     *
     * Pass a user_id to limit to only groups that this user is a member of
     *
     * @var integer
     */
    private $userId;

    /**
     * include
     *
     * Only include these specific groups (group_ids)
     *
     * @var array
     */
    private $include;

    /**
     * exclude
     *
     * Do not include these specific groups (group_ids)
     *
     * @var array
     */
    private $exclude;

    /**
     * searchTerms
     *
     * Limit to groups that match these search terms
     *
     * @var array
     */
    private $searchTerms;

    /**
     * metaQuery
     *
     * Filter by groupmeta. See WP_Meta_Query for syntax
     *
     * @var array
     */
    private $metaQuery;

    /**
     * showHidden
     *
     * Show hidden groups to non-admins
     *
     * @var boolean
     */
    private $showHidden;

    /**
     * perPage
     *
     * The number of results to return per page
     *
     * @var integer
     */
    private $perPage;

    /**
     * page
     *
     * The page to return if limiting per page
     *
     * @var integer
     */
    private $page;

    /**
     * populateExtras
     *
     * Fetch meta such as is_banned and is_member
     *
     * @var boolean
     */
    private $populateExtras;

    /**
     * updateMetaCache
     *
     * Pre-fetch groupmeta for queried groups
     *
     * @var mixed
     */
    private $updateMetaCache;
    
    /**
     * Get type.
     *
     * @return type.
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Set type.
     *
     * @param type the value to set.
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * Get order.
     *
     * @return order.
     */
    public function getOrder()
    {
        return $this->order;
    }
    
    /**
     * Set order.
     *
     * @param order the value to set.
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }
    
    /**
     * Get orderby.
     *
     * @return orderby.
     */
    public function getOrderby()
    {
        return $this->orderby;
    }
    
    /**
     * Set orderby.
     *
     * @param orderby the value to set.
     */
    public function setOrderby($orderby)
    {
        $this->orderby = $orderby;
    }
    
    /**
     * Get include.
     *
     * @return include.
     */
    public function getInclude()
    {
        return $this->include;
    }
    
    /**
     * Set include.
     *
     * @param include the value to set.
     */
    public function setInclude($include)
    {
        $this->include = $include;
    }
    
    /**
     * Get exclude.
     *
     * @return exclude.
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    
    /**
     * Set exclude.
     *
     * @param exclude the value to set.
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
    }
    
    /**
     * Get searchTerms.
     *
     * @return searchTerms.
     */
    public function getSearchTerms()
    {
        return $this->searchTerms;
    }
    
    /**
     * Set searchTerms.
     *
     * @param searchTerms the value to set.
     */
    public function setSearchTerms($searchTerms)
    {
        $this->searchTerms = $searchTerms;
    }
    
    /**
     * Get metaQuery.
     *
     * @return metaQuery.
     */
    public function getMetaQuery()
    {
        return $this->metaQuery;
    }
    
    /**
     * Set metaQuery.
     *
     * @param metaQuery the value to set.
     */
    public function setMetaQuery($metaQuery)
    {
        $this->metaQuery = $metaQuery;
    }
    
    /**
     * Get showHidden.
     *
     * @return showHidden.
     */
    public function getShowHidden()
    {
        return $this->showHidden;
    }
    
    /**
     * Set showHidden.
     *
     * @param showHidden the value to set.
     */
    public function setShowHidden($showHidden)
    {
        $this->showHidden = $showHidden;
    }
    
    /**
     * Get perPage.
     *
     * @return perPage.
     */
    public function getPerPage()
    {
        return $this->perPage;
    }
    
    /**
     * Set perPage.
     *
     * @param perPage the value to set.
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }
    
    /**
     * Get page.
     *
     * @return page.
     */
    public function getPage()
    {
        return $this->page;
    }
    
    /**
     * Set page.
     *
     * @param page the value to set.
     */
    public function setPage($page)
    {
        $this->page = $page;
    }
    
    /**
     * Get populateExtras.
     *
     * @return populateExtras.
     */
    public function getPopulateExtras()
    {
        return $this->populateExtras;
    }
    
    /**
     * Set populateExtras.
     *
     * @param populateExtras the value to set.
     */
    public function setPopulateExtras($populateExtras)
    {
        $this->populateExtras = $populateExtras;
    }
    
    /**
     * Get updateMetaCache.
     *
     * @return updateMetaCache.
     */
    public function getUpdateMetaCache()
    {
        return $this->updateMetaCache;
    }
    
    /**
     * Set updateMetaCache.
     *
     * @param updateMetaCache the value to set.
     */
    public function setUpdateMetaCache($updateMetaCache)
    {
        $this->updateMetaCache = $updateMetaCache;
    }
    
    /**
     * Get userId.
     *
     * @return userId.
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
    /**
     * Set userId.
     *
     * @param userId the value to set.
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}
