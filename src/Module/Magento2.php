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
     * Undocumented function
     *
     * @return void
     */
    public function _initialize()
    {
        $app = new Util\App($this->config['path']);
        $app->bootstrap();
    }

    public function getMagentoObjectManager(){
        return Magento\Framework\TestFramework\Unit\Helper\ObjectManager::class;
    }
}
?>