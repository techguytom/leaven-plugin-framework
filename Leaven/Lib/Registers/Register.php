<?php
/**
 * Register.php
 */

namespace Leaven\Lib\Registers;

/**
 * PostType
 *
 * @package Leaven Framework
 * @author Tom Jenkins <tom@techguytom.com>
 * @version 0.8
 */
interface Register
{
    /**
     * __construct
     *
     * @param string $path
     * @param RegisterArguments $RegisterArguments
     * @return void
     */
    public function __construct($path, RegisterArguments $registerArguments);

    /**
     * register
     *
     * @return void
     */
    public function register();
}
