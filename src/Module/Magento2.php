<?php

namespace Codeception\Module;

use Codeception\Module;
use Codeception\Util;

/**
 *
 */
class Magento2 extends Module
{

    /**
     * @var array
     */
    protected $config = ['path'];

    /**
     * @var array
     */
    protected $requiredFields = ['path'];

    /**
     * @return void
     */
    public function _beforeSuite($settings = [])
    {
        $app = new Util\App($this->config['path']);
        $app->bootstrap();
    }

    public function getMagentoObjectManager($object)
    {
        return new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($object);
    }
}
?>