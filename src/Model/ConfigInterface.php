<?php

namespace MagePsycho\DiscountLabel\Model;

/**
 * @category   MagePsycho
 * @package    MagePsycho_DiscountLabel
 * @author     Raj KB <info@magepsycho.com>
 * @website    https://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface ConfigInterface
{
    /**
     * Get configuration boolean value
     *
     * @param string $xmlPath
     * @param int $storeId
     * @return bool
     */
    public function getConfigFlag($xmlPath, $storeId = null);

    /**
     * Get configuration value
     *
     * @param string $xmlPath
     * @param int $storeId
     * @return string
     */
    public function getConfigValue($xmlPath, $storeId = null);
}
