<?php

namespace Codeception\Module\App;

class App {
    
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
        if (!$installationPath) {
            return false;
        }

        require_once $installationPath;
        return $this;

    }

}