<?php

namespace Codeception\Util;

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
        if (!$this->installationPath) {
            return false;
        }

        \TYPO3\PharStreamWrapper\Manager::initialize(
            (new \TYPO3\PharStreamWrapper\Behavior())
                ->withAssertion(new \TYPO3\PharStreamWrapper\Interceptor\PharMetaDataInterceptor())
        );

        require_once $this->installationPath . "app/bootstrap.php";
        stream_wrapper_register('phar', \TYPO3\PharStreamWrapper\PharStreamWrapper::class);

        return $this;

    }

}