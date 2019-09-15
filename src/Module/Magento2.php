<?php

namespace Codeception\Module;

use Codeception\Module;

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
     * Undocumented function
     *
     * @return void
     */
    public function _initialize()
    {
        $app = new Module\App($this->config['path']);
        $app->bootstrap();
    }

    public function getMagentoObjectManager(){
        return Magento\Framework\TestFramework\Unit\Helper\ObjectManager::class;
    }
}
?>