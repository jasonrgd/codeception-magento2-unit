<?php

namespace Codeception\Util;

class App 
{
    
    /**
     * Path to Magento Folder
     *
     * @var string
     */
    private $installationPath;

    public function __construct($installationPath)
    {
        $this->installationPath = $installationPath;
    }

    public function bootstrap()
    {
        if (!$this->installationPath) {
            return false;
        }

        require_once $this->installationPath . "dev/tests/unit/framework/bootstrap.php";

        return $this;

    }
}