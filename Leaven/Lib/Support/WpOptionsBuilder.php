<?php
/**
 * WpOptionsBuilder.php
 */

namespace Leaven\Lib\Support;

class WpOptionsBuilder
{
    /**
     * labelWordPressConversionArray
     *
     * Key conversion array for WordPress
     *
     * @var array
     */
    private $labelsWordPressConversionArray = array(
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
        'canExport'         => 'can_export',
        'capabilities'      => 'capabilities',
        'capabilityType'    => 'capability_type',
        'description'       => 'description',
        'exclude'           => 'exclude',
        'excludeFromSearch' => 'exclude_from_search',
        'hasArchive'        => 'has_archive',
        'hierarchical'      => 'hierarchical',
        'include'           => 'include',
        'mapMetaCap'        => 'map_meta_cap',
        'menuIcon'          => 'menu_icon',
        'menuPosition'      => 'menu_position',
        'metaQuery'         => 'meta_query',
        'order'             => 'order',
        'orderby'           => 'orderby',
        'page'              => 'page',
        'permalinkEpmask'   => 'permalink_epmask',
        'perPage'           => 'per_page',
        'populateExtras'    => 'populate_extras',
        'public'            => 'public',
        'publiclyQueryable' => 'publicly_queryable',
        'queryVar'          => 'query_var',
        'rewrite'           => 'rewrite',
        'searchTerms'       => 'search_terms',
        'showAdminColumn'   => 'show_admin_column',
        'showHidden'        => 'show_hidden',
        'showInAdminBar'    => 'show_in_admin_bar',
        'showInMenu'        => 'show_in_menu',
        'showInNavMenus'    => 'show_in_nav_menus',
        'showTagcloud'      => 'show_tagcloud',
        'showUi'            => 'show_ui',
        'supports'          => 'supports',
        'taxonomies'        => 'taxonomies',
        'type'              => 'type',
        'updateMetaCache'   => 'update_meta_cache',
        'userId'            => 'user_id',
    );

    /**
     * Arguments
     *
     * Build the array in the format WordPress likes for the arrays with a
     * separate labels array.
     *
     * @return void
     */
    public function argumentsWithLabels()
    {
        $labels  = array('labels' => $this->buildReturnArray($this->labelsWordPressConversionArray));
        $options = $this->buildReturnArray($this->optionsWordPressConversionArray);

        return array_merge($labels, $options);
    }

    /**
     * argumentsOptions
     *
     * Build the array in the format WordPress likes without labels.
     *
     * @return void
     */
    public function argumentsOptions()
    {
        return $this->buildReturnArray($this->optionsWordPressConversionArray);
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
