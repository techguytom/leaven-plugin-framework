<?php
/**
 * RegisterArguments.php
 */

namespace Nerdery\Lib\Registers;

/**
 * RegisterArguments
 *
 * @package TGT Framework
 * @author Tom Jenkins <tom@techguytom.com>
 * @version 0.3
 */
class RegisterArguments
{
    /**
     * labelWordPressConversionArray
     *
     * Key conversion array for WordPress
     *
     * @var array
     */
    private $labelWordPressConversionArray = array(
        'name'                    => 'name',
        'singularName'            => 'singular_name',
        'menuName'                => 'menu_name',
        'nameAdminBar'            => 'name_admin_bar',
        'allItems'                => 'all_items',
        'addNew'                  => 'add_new',
        'addNewItem'              => 'add_new_item',
        'editItem'                => 'edit_item',
        'updateItem'              => 'update_item',
        'newItem'                 => 'new_item',
        'newItemName'             => 'new_item_name',
        'viewItem'                => 'view_item',
        'searchItems'             => 'search_items',
        'popularItems'            => 'popular_items',
        'separateItemsWithCommas' => 'separate_items_with_commas',
        'addOrRemoveItems'        => 'add_or_remove_items',
        'chooseFromMostUsed'      => 'choose_from_most_used',
        'notFound'                => 'not_found',
        'notFoundInTrash'         => 'not_found_in_trash',
        'parentItemColon'         => 'parent_item_colon',
    );

    /**
     * optionsWordPressConversionArray
     *
     * Key conversion array for WordPress
     *
     * @var array
     */
    private $optionsWordPressConversionArray = array(
        'description'       => 'description',
        'public'            => 'public',
        'excludeFromSearch' => 'exclude_from_search',
        'publiclyQueryable' => 'publicly_queryable',
        'showUi'            => 'show_ui',
        'showInNavMenus'    => 'show_in_nav_menus',
        'showInMenu'        => 'show_in_menu',
        'showInAdminBar'    => 'show_in_admin_bar',
        'showTagcloud'      => 'show_tagcloud',
        'showAdminColumn'   => 'show_admin_column',
        'menuPosition'      => 'menu_position',
        'menuIcon'          => 'menu_icon',
        'capabilityType'    => 'capability_type',
        'capabilities'      => 'capabilities',
        'mapMetaCap'        => 'map_meta_cap',
        'hierarchical'      => 'hierarchical',
        'supports'          => 'supports',
        'taxonomies'        => 'taxonomies',
        'hasArchive'        => 'has_archive',
        'permalinkEpmask'   => 'permalink_epmask',
        'rewrite'           => 'rewrite',
        'queryVar'          => 'query_var',
       'canExport'          => 'can_export',
    );

    /**
     * postType
     *
     * @var mixed
     */
    private $postType;

    /**
     * name
     *
     * general name for the post type, usually plural. The same as, and
     * overridden by $post_type_object->label
     *
     * @var mixed
     */
    private $name;

    /**
     * singularName
     *
     * name for one object of this post type. Defaults to value of name
     *
     * @var mixed
     */
    private $singularName;

    /**
     * menuName
     *
     * the menu name text. This string is the name to give menu items. Defaults
     * to value of name label
     *
     * @var mixed
     */
    private $menuName;

    /**
     * nameAdminBar
     *
     * name given for the Add New dropdown on admin bar. Defaults to singular
     * name if it exists, name otherwise.
     *
     * @var mixed
     */
    private $nameAdminBar;

    /**
     * allItems
     *
     * the all items text used in the menu. Default is the Name label
     *
     * @var mixed
     */
    private $allItems;

    /**
     * addNew
     *
     * the add new text. The default is Add New for both hierarchical and
     * non-hierarchical types. When internationalizing this string, please use
     * a gettext context matching your post type. Example: _x('Add New',
     * 'product');
     *
     * @var mixed
     */
    private $addNew;

    /**
     * addNewItem
     *
     * the add new item text. Default is Add New Post/Add New Page
     *
     * @var mixed
     */
    private $addNewItem;

    /**
     * editItem
     *
     * the edit item text. Default is Edit Post/Edit Page
     *
     * @var mixed
     */
    private $editItem;

    /**
     * newItem
     *
     * the new item text. Default is New Post/New Page
     *
     * @var mixed
     */
    private $newItem;

    /**
     * newItemName
     *
     * the new item text. Default is New Post/New Page
     *
     * @var mixed
     */
    private $newItemName;

    /**
     * viewItem
     *
     * the view item text. Default is View Post/View Page
     *
     * @var mixed
     */
    private $viewItem;

    /**
     * updateItem
     *
     * the update item text.
     *
     * @var mixed
     */
    private $updateItem;

    /**
     * searchItems
     *
     * the search items text. Default is Search Posts/Search Pages
     *
     * @var mixed
     */
    private $searchItems;

    /**
     * popularItems
     *
     * the popular items text.
     *
     * @var mixed
     */
    private $popularItems;

    /**
     * separateItemsWithCommas
     *
     * the separate item with commas text used in the taxonomy meta box.
     *
     * @var mixed
     */
    private $separateItemsWithCommas;

    /**
     * addOrRemoveItems
     *
     * the add or remove items text and used in the meta box when JavaScript is
     * disabled
     *
     * @var mixed
     */
    private $addOrRemoveItems;

    /**
     * chooseFromMostUsed
     *
     * the add or remove items text and used in the meta box when JavaScript is
     * disabled
     *
     * @var mixed
     */
    private $chooseFromMostUsed;

    /**
     * notFound
     *
     * the not found text. Default is No posts found/No pages found
     *
     * @var mixed
     */
    private $notFound;

    /**
     * notFoundInTrash
     *
     * the not found in trash text. Default is No posts found in Trash/No pages
     * found in Trash
     *
     * @var mixed
     */
    private $notFoundInTrash;

    /**
     * parentItemColon
     *
     * the parent text. This string isn't used on non-hierarchical types. In
     * hierarchical ones the default is Parent Page
     *
     * @var mixed
     */
    private $parentItemColon;

    /**
     * description
     *
     * (string) (optional) A short descriptive summary of what the post type is.
     * Default: blank
     *
     * @var mixed
     */
    private $description;

    /**
     * public
     *
     * (boolean) (optional) Whether a post type is intended to be used publicly either via the admin
     * interface or by front-end users.
     * Default: false
     *
     * @var mixed
     */
    private $public;

    /**
     * excludeFromSearch
     *
     * (boolean) (importance) Whether to exclude posts with this post type from front end
     * search results.
     * Default: value of the opposite of the public argument
     *
     * @var mixed
     */
    private $excludeFromSearch;

    /**
     * publiclyQueryable
     *
     * (boolean) (optional) Whether queries can be performed on the front end as part of
     * parse_request().
     * Default: value of public argument
     *
     * @var mixed
     */
    private $publiclyQueryable;

    /**
     * showUi
     *
     * (boolean) (optional) Whether to generate a default UI for managing this
     * post type in the admin.
     * Default: value of public argument
     *
     * @var mixed
     */
    private $showUi;

    /**
     * showInNavMenus
     *
     * (boolean) (optional) Whether post_type is available for selection in
     * navigation menus.
     * Default: value of public argument
     *
     * @var mixed
     */
    private $showInNavMenus;

    /**
     * showTagcloud
     *
     * (boolean) (optional) Whether to allow the Tag Cloud widget to use this
     * taxonomy.
     *
     * @var mixed
     */
    private $showTagcloud;

    /**
     * showAdminColumn
     *
     * (boolean) (optional) Whether to allow automatic creation of taxonomy
     * columns on associated post-types table. (Available since 3.5)
     * Default: false
     *
     * @var mixed
     */
    private $showAdminColumn;

    /**
     * showInMenu
     *
     * (boolean or string) (optional) Where to show the post type in the admin
     * menu. show_ui must be true.
     * Default: value of show_ui argument
     *
     * @var mixed
     */
    private $showInMenu;

    /**
     * showInAdminBar
     *
     * (boolean) (optional) Whether to make this post type available in the
     * WordPress admin bar.
     * Default: value of the show_in_menu argument
     *
     * @var mixed
     */
    private $showInAdminBar;

    /**
     * menuPosition
     *
     * (integer) (optional) The position in the menu order the post type should
     * appear. show_in_menu must be true.
     * Default: null - defaults to below Comments
     *
     * @var mixed
     */
    private $menuPosition;

    /**
     * menuIcon
     *
     * (string) (optional) The url to the icon to be used for this menu or the
     * name of the icon from the iconfont [1]
     * Default: null - defaults to the posts icon
     *
     * @var mixed
     */
    private $menuIcon;

    /**
     * capabilityType
     *
     * (string or array) (optional) The string to use to build the read, edit,
     * and delete capabilities.
     *
     * @var mixed
     */
    private $capabilityType;

    /**
     * capabilities
     *
     * (array) (optional) An array of the capabilities for this post type.
     * Default: capability_type is used to construct
     *
     * @var mixed
     */
    private $capabilities;

    /**
     * mapMetaCap
     *
     * (boolean) (optional) Whether to use the internal default meta capability
     * handling.
     * Default: null
     *
     * @var mixed
     */
    private $mapMetaCap;

    /**
     * hierarchical
     *
     * (boolean) (optional) Whether the post type is hierarchical (e.g. page).
     * Allows Parent to be specified. The 'supports' parameter should contain
     * 'page-attributes' to show the parent select box on the editor page.
     * Default: false
     *
     * @var mixed
     */
    private $hierarchical;

    /**
     * supports
     *
     * (array/boolean) (optional) An alias for calling add_post_type_support()
     * directly. As of 3.5, boolean false can be passed as value instead of an
     * array to prevent default (title and editor) behavior.
     * Default: title and editor
     *
     * @var mixed
     */
    private $supports;

    /**
     * taxonomies
     *
     * (array) (optional) An array of registered taxonomies like category or
     * post_tag that will be used with this post type.
     *
     * @var mixed
     */
    private $taxonomies;

    /**
     * hasArchive
     *
     * (boolean or string) (optional) Enables post type archives. Will use
     * $post_type as archive slug by default.
     * Default: false
     *
     * @var mixed
     */
    private $hasArchive;

    /**
     * permalinkEpmask
     *
     * (string) (optional) The default rewrite endpoint bitmasks. For more info
     * see Trac Ticket 12605 and this Make WordPress Plugins summary of
     * endpoints.
     * Default: EP_PERMALINK
     *
     * @var mixed
     */
    private $permalinkEpmask;

    /**
     * rewrite
     *
     * (boolean or array) (optional) Triggers the handling of rewrites for this
     * post type. To prevent rewrites, set to false.
     * Default: true and use $post_type as slug
     *
     * @var mixed
     */
    private $rewrite;

    /**
     * queryVar
     *
     * (boolean or string) (optional) Sets the query_var key for this post
     * type.
     * Default: true - set to $post_type
     *
     * @var mixed
     */
    private $queryVar;

    /**
     * canExport
     *
     * (boolean) (optional) Can this post_type be exported.
     * Default: true
     *
     * @var mixed
     */
    private $canExport;

    /**
     * Get postType.
     *
     * @return postType.
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * Set postType.
     *
     * @param postType the value to set.
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;
    }

    /**
     * Get name.
     *
     * @return name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param name the value to set.
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get singularName.
     *
     * @return singularName.
     */
    public function getSingularName()
    {
        return $this->singularName;
    }

    /**
     * Set singularName.
     *
     * @param singularName the value to set.
     */
    public function setSingularName($singularName)
    {
        $this->singularName = $singularName;
    }

    /**
     * Get menuName.
     *
     * @return menuName.
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set menuName.
     *
     * @param menuName the value to set.
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }

    /**
     * Get nameAdminBar.
     *
     * @return nameAdminBar.
     */
    public function getNameAdminBar()
    {
        return $this->nameAdminBar;
    }

    /**
     * Set nameAdminBar.
     *
     * @param nameAdminBar the value to set.
     */
    public function setNameAdminBar($nameAdminBar)
    {
        $this->nameAdminBar = $nameAdminBar;
    }

    /**
     * Get allItems.
     *
     * @return allItems.
     */
    public function getAllItems()
    {
        return $this->allItems;
    }

    /**
     * Set allItems.
     *
     * @param allItems the value to set.
     */
    public function setAllItems($allItems)
    {
        $this->allItems = $allItems;
    }

    /**
     * Get addNew.
     *
     * @return addNew.
     */
    public function getAddNew()
    {
        return $this->addNew;
    }

    /**
     * Set addNew.
     *
     * @param addNew the value to set.
     */
    public function setAddNew($addNew)
    {
        $this->addNew = $addNew;
    }

    /**
     * Get addNewItem.
     *
     * @return addNewItem.
     */
    public function getAddNewItem()
    {
        return $this->addNewItem;
    }

    /**
     * Set addNewItem.
     *
     * @param addNewItem the value to set.
     */
    public function setAddNewItem($addNewItem)
    {
        $this->addNewItem = $addNewItem;
    }

    /**
     * Get editItem.
     *
     * @return editItem.
     */
    public function getEditItem()
    {
        return $this->editItem;
    }

    /**
     * Set editItem.
     *
     * @param editItem the value to set.
     */
    public function setEditItem($editItem)
    {
        $this->editItem = $editItem;
    }

    /**
     * Get newItem.
     *
     * @return newItem.
     */
    public function getNewItem()
    {
        return $this->newItem;
    }

    /**
     * Set newItem.
     *
     * @param newItem the value to set.
     */
    public function setNewItem($newItem)
    {
        $this->newItem = $newItem;
    }

    /**
     * Get newItemName.
     *
     * @return newItemName.
     */
    public function getNewItemName()
    {
        return $this->newItemName;
    }

    /**
     * Set newItemName.
     *
     * @param newItemName the value to set.
     */
    public function setNewItemName($newItemName)
    {
        $this->newItemName = $newItemName;
    }

    /**
     * Get viewItem.
     *
     * @return viewItem.
     */
    public function getViewItem()
    {
        return $this->viewItem;
    }

    /**
     * Set viewItem.
     *
     * @param viewItem the value to set.
     */
    public function setViewItem($viewItem)
    {
        $this->viewItem = $viewItem;
    }

    /**
     * Get searchItems.
     *
     * @return searchItems.
     */
    public function getSearchItems()
    {
        return $this->searchItems;
    }

    /**
     * Set searchItems.
     *
     * @param searchItems the value to set.
     */
    public function setSearchItems($searchItems)
    {
        $this->searchItems = $searchItems;
    }

    /**
     * Get popularItems.
     *
     * @return popularItems.
     */
    public function getPopularItems()
    {
        return $this->popularItems;
    }

    /**
     * Set popularItems.
     *
     * @param popularItems the value to set.
     */
    public function setPopularItems($popularItems)
    {
        $this->popularItems = $popularItems;
    }

    /**
     * Get addOrRemoveItems.
     *
     * @return addOrRemoveItems.
     */
    public function getAddOrRemoveItems()
    {
        return $this->addOrRemoveItems;
    }

    /**
     * Set addOrRemoveItems.
     *
     * @param addOrRemoveItems the value to set.
     */
    public function setAddOrRemoveItems($addOrRemoveItems)
    {
        $this->addOrRemoveItems = $addOrRemoveItems;
    }

    /**
     * Get chooseFromMostUsed.
     *
     * @return chooseFromMostUsed.
     */
    public function getChooseFromMostUsed()
    {
        return $this->chooseFromMostUsed;
    }

    /**
     * Set chooseFromMostUsed.
     *
     * @param chooseFromMostUsed the value to set.
     */
    public function setChooseFromMostUsed($chooseFromMostUsed)
    {
        $this->chooseFromMostUsed = $chooseFromMostUsed;
    }

    /**
     * Get separateItemsWithCommas.
     *
     * @return separateItemsWithCommas.
     */
    public function getSeparateItemsWithCommas()
    {
        return $this->separateItemsWithCommas;
    }

    /**
     * Set separateItemsWithCommas.
     *
     * @param separateItemsWithCommas the value to set.
     */
    public function setSeparateItemsWithCommas($separateItemsWithCommas)
    {
        $this->separateItemsWithCommas = $separateItemsWithCommas;
    }
    /**
     * Get notFound.
     *
     * @return notFound.
     */
    public function getNotFound()
    {
        return $this->notFound;
    }

    /**
     * Set notFound.
     *
     * @param notFound the value to set.
     */
    public function setNotFound($notFound)
    {
        $this->notFound = $notFound;
    }

    /**
     * Get notFoundInTrash.
     *
     * @return notFoundInTrash.
     */
    public function getNotFoundInTrash()
    {
        return $this->notFoundInTrash;
    }

    /**
     * Set notFoundInTrash.
     *
     * @param notFoundInTrash the value to set.
     */
    public function setNotFoundInTrash($notFoundInTrash)
    {
        $this->notFoundInTrash = $notFoundInTrash;
    }

    /**
     * Get parentItemColon.
     *
     * @return parentItemColon.
     */
    public function getParentItemColon()
    {
        return $this->parentItemColon;
    }

    /**
     * Set parentItemColon.
     *
     * @param parentItemColon the value to set.
     */
    public function setParentItemColon($parentItemColon)
    {
        $this->parentItemColon = $parentItemColon;
    }

    /**
     * Get description.
     *
     * @return description.
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description.
     *
     * @param description the value to set.
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get public.
     *
     * @return public.
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set public.
     *
     * @param public the value to set.
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * Get excludeFromSearch.
     *
     * @return excludeFromSearch.
     */
    public function getExcludeFromSearch()
    {
        return $this->excludeFromSearch;
    }

    /**
     * Set excludeFromSearch.
     *
     * @param excludeFromSearch the value to set.
     */
    public function setExcludeFromSearch($excludeFromSearch)
    {
        $this->excludeFromSearch = $excludeFromSearch;
    }

    /**
     * Get publiclyQueryable.
     *
     * @return publiclyQueryable.
     */
    public function getPubliclyQueryable()
    {
        return $this->publiclyQueryable;
    }

    /**
     * Set publiclyQueryable.
     *
     * @param publiclyQueryable the value to set.
     */
    public function setPubliclyQueryable($publiclyQueryable)
    {
        $this->publiclyQueryable = $publiclyQueryable;
    }

    /**
     * Get showUi.
     *
     * @return showUi.
     */
    public function getShowUi()
    {
        return $this->showUi;
    }

    /**
     * Set showUi.
     *
     * @param showUi the value to set.
     */
    public function setShowUi($showUi)
    {
        $this->showUi = $showUi;
    }

    /**
     * Get showInNavMenus.
     *
     * @return showInNavMenus.
     */
    public function getShowInNavMenus()
    {
        return $this->showInNavMenus;
    }

    /**
     * Set showInNavMenus.
     *
     * @param showInNavMenus the value to set.
     */
    public function setShowInNavMenus($showInNavMenus)
    {
        $this->showInNavMenus = $showInNavMenus;
    }

    /**
     * Get showTagcloud.
     *
     * @return showTagcloud.
     */
    public function getShowTagcloud()
    {
        return $this->showTagcloud;
    }

    /**
     * Set showTagcloud.
     *
     * @param showTagcloud the value to set.
     */
    public function setShowTagcloud($showTagcloud)
    {
        $this->showTagcloud = $showTagcloud;
    }

    /**
     * Get showAdminColumn.
     *
     * @return showAdminColumn.
     */
    public function getShowAdminColumn()
    {
        return $this->showAdminColumn;
    }

    /**
     * Set showAdminColumn.
     *
     * @param showAdminColumn the value to set.
     */
    public function setShowAdminColumn($showAdminColumn)
    {
        $this->showAdminColumn = $showAdminColumn;
    }

    /**
     * Get showInMenu.
     *
     * @return showInMenu.
     */
    public function getShowInMenu()
    {
        return $this->showInMenu;
    }

    /**
     * Set showInMenu.
     *
     * @param showInMenu the value to set.
     */
    public function setShowInMenu($showInMenu)
    {
        $this->showInMenu = $showInMenu;
    }

    /**
     * Get showInAdminBar.
     *
     * @return showInAdminBar.
     */
    public function getShowInAdminBar()
    {
        return $this->showInAdminBar;
    }

    /**
     * Set showInAdminBar.
     *
     * @param showInAdminBar the value to set.
     */
    public function setShowInAdminBar($showInAdminBar)
    {
        $this->showInAdminBar = $showInAdminBar;
    }

    /**
     * Get menuPosition.
     *
     * @return menuPosition.
     */
    public function getMenuPosition()
    {
        return $this->menuPosition;
    }

    /**
     * Set menuPosition.
     *
     * @param menuPosition the value to set.
     */
    public function setMenuPosition($menuPosition)
    {
        $this->menuPosition = $menuPosition;
    }

    /**
     * Get menuIcon.
     *
     * @return menuIcon.
     */
    public function getMenuIcon()
    {
        return $this->menuIcon;
    }

    /**
     * Set menuIcon.
     *
     * @param menuIcon the value to set.
     */
    public function setMenuIcon($menuIcon)
    {
        $this->menuIcon = $menuIcon;
    }

    /**
     * Get capabilityType.
     *
     * @return capabilityType.
     */
    public function getCapabilityType()
    {
        return $this->capabilityType;
    }

    /**
     * Set capabilityType.
     *
     * @param capabilityType the value to set.
     */
    public function setCapabilityType($capabilityType)
    {
        $this->capabilityType = $capabilityType;
    }

    /**
     * Get capabilities.
     *
     * @return capabilities.
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * Set capabilities.
     *
     * @param capabilities the value to set.
     */
    public function setCapabilities($capabilities)
    {
        $this->capabilities = $capabilities;
    }

    /**
     * Get mapMetaCap.
     *
     * @return mapMetaCap.
     */
    public function getMapMetaCap()
    {
        return $this->mapMetaCap;
    }

    /**
     * Set mapMetaCap.
     *
     * @param mapMetaCap the value to set.
     */
    public function setMapMetaCap($mapMetaCap)
    {
        $this->mapMetaCap = $mapMetaCap;
    }

    /**
     * Get hierarchical.
     *
     * @return hierarchical.
     */
    public function getHierarchical()
    {
        return $this->hierarchical;
    }

    /**
     * Set hierarchical.
     *
     * @param hierarchical the value to set.
     */
    public function setHierarchical($hierarchical)
    {
        $this->hierarchical = $hierarchical;
    }

    /**
     * Get supports.
     *
     * @return supports.
     */
    public function getSupports()
    {
        return $this->supports;
    }

    /**
     * Set supports.
     *
     * @param supports the value to set.
     */
    public function setSupports($supports)
    {
        $this->supports = $supports;
    }

    /**
     * Get taxonomies.
     *
     * @return taxonomies.
     */
    public function getTaxonomies()
    {
        return $this->taxonomies;
    }

    /**
     * Set taxonomies.
     *
     * @param taxonomies the value to set.
     */
    public function setTaxonomies($taxonomies)
    {
        $this->taxonomies = $taxonomies;
    }

    /**
     * Get has_archive.
     *
     * @return has_archive.
     */
    public function getHasArchive()
    {
        return $this->hasArchive;
    }

    /**
     * Set has_archive.
     *
     * @param has_archive the value to set.
     */
    public function setHasArchive($hasArchive)
    {
        $this->has_archive = $hasArchive;
    }

    /**
     * Get permalinkEpmask.
     *
     * @return permalinkEpmask.
     */
    public function getPermalinkEpmask()
    {
        return $this->permalinkEpmask;
    }

    /**
     * Set permalinkEpmask.
     *
     * @param permalinkEpmask the value to set.
     */
    public function setPermalinkEpmask($permalinkEpmask)
    {
        $this->permalinkEpmask = $permalinkEpmask;
    }

    /**
     * Get rewrite.
     *
     * @return rewrite.
     */
    public function getRewrite()
    {
        return $this->rewrite;
    }

    /**
     * Set rewrite.
     *
     * @param rewrite the value to set.
     */
    public function setRewrite($rewrite)
    {
        $this->rewrite = $rewrite;
    }

    /**
     * Get queryVar.
     *
     * @return queryVar.
     */
    public function getQueryVar()
    {
        return $this->queryVar;
    }

    /**
     * Set queryVar.
     *
     * @param queryVar the value to set.
     */
    public function setQueryVar($queryVar)
    {
        $this->queryVar = $queryVar;
    }

    /**
     * Get canExport.
     *
     * @return canExport.
     */
    public function getCanExport()
    {
        return $this->canExport;
    }

    /**
     * Set canExport.
     *
     * @param canExport the value to set.
     */
    public function setCanExport($canExport)
    {
        $this->canExport = $canExport;
    }

    /**
     * Get updateItem.
     *
     * @return updateItem.
     */
    public function getUpdateItem()
    {
        return $this->updateItem;
    }

    /**
     * Set updateItem.
     *
     * @param updateItem the value to set.
     */
    public function setUpdateItem($updateItem)
    {
        $this->updateItem = $updateItem;
    }

    /**
     * Arguments
     *
     * Build the array in the format WordPress likes for the post type
     * creation.
     *
     * @return void
     */
    public function Arguments()
    {
        $labels  = array('labels' => $this->buildReturnArray($this->labelWordPressConversionArray));
        $options = $this->buildReturnArray($this->optionsWordPressConversionArray);

        return array_merge($labels, $options);
    }

    /**
     * buildReturnArray
     *
     * Gather the set variables into a return array.
     *
     * @param mixed $buildArray
     * @return void
     */
    public function buildReturnArray($buildArray)
    {
        $returnArray = array();

        foreach ($buildArray as $key => $value) {
            if (!isset($this->$key)) {
                continue;
            }
            $returnArray[$buildArray[$key]] = $this->$key;
        }

        return $returnArray;
    }
}
