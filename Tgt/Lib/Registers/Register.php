<?php
/**
 * Register.php
 */

namespace Nerdery\Lib\Registers;

/**
 * PostType
 *
 * @package TGT Framework
 * @author Tom Jenkins <tom@techguytom.com>
 * @version 0.3
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
