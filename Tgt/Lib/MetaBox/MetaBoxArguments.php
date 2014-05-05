<?php
/**
 * Meta Box Library File
 *
 * @package TGT_Framework
 * @subpackage Library
 */
namespace Nerdery\Lib\MetaBox;

/**
 * Meta Box Arguments
 *
 * @package WordPress
 * @author Tom Jenkins <tom@tgtdesign.com>
 * @version 1.0
 */
class MetaBoxArguments
{
    /**
     * ID
     *
     * @var int
     */
    private $id;

    /**
     * Title
     *
     * @var string
     */
    private $title;

    /**
     * Callback
     *
     * @var string
     */
    private $callback;

    /**
     * PostType
     *
     * @var string
     */
    private $postType;

    /**
     * Context
     *
     * @var string
     */
    private $context = 'advanced';

    /**
     * Priority
     *
     * @var string
     */
    private $priority = 'default';

    /**
     * Callback Arguments
     *
     * @var array
     */
    private $callbackArguments = null;

    /**
     * FieldNames
     *
     * @var array
     */
    private $fieldNames;

    /**
     * Nonce Name
     *
     * @var string
     */
    private $nonceAction;
    
    /**
     * Get id.
     *
     * @return id.
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set id.
     *
     * @param id the value to set.
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Get title.
     *
     * @return title.
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Set title.
     *
     * @param title the value to set.
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Get callback.
     *
     * @return callback.
     */
    public function getCallback()
    {
        return $this->callback;
    }
    
    /**
     * Set callback.
     *
     * @param callback the value to set.
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }
    
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
     * Get context.
     *
     * @return context.
     */
    public function getContext()
    {
        return $this->context;
    }
    
    /**
     * Set context.
     *
     * @param context the value to set.
     */
    public function setContext($context)
    {
        $this->context = $context;
    }
    
    /**
     * Get priority.
     *
     * @return priority.
     */
    public function getPriority()
    {
        return $this->priority;
    }
    
    /**
     * Set priority.
     *
     * @param priority the value to set.
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }
    
    /**
     * Get callbackArguments.
     *
     * @return callbackArguments.
     */
    public function getCallbackArguments()
    {
        return $this->callbackArguments;
    }
    
    /**
     * Set callbackArguments.
     *
     * @param callbackArguments the value to set.
     */
    public function setCallbackArguments($callbackArguments)
    {
        $this->callbackArguments = $callbackArguments;
    }
    
    /**
     * Get fieldNames.
     *
     * @return fieldNames.
     */
    public function getFieldNames()
    {
        return $this->fieldNames;
    }
    
    /**
     * Set fieldNames.
     *
     * @param fieldNames the value to set.
     */
    public function setFieldNames($fieldNames)
    {
        $this->fieldNames = $fieldNames;
    }
    
    /**
     * Get nonceAction.
     *
     * @return nonceAction.
     */
    public function getNonceAction()
    {
        return $this->nonceAction;
    }
    
    /**
     * Set nonceAction.
     *
     * @param nonceAction the value to set.
     */
    public function setNonceAction($nonceAction)
    {
        $this->nonceAction = $nonceAction;
    }
}
