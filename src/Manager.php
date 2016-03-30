<?php

namespace Remxcode\TopClient;

use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;
use Remxcode\TopClient\Factories\TopClientFactory;

class Manager extends AbstractManager
{

    protected $factory;


    public function __construct(Repository $config, TopClientFactory $factory)
    {
        parent::__construct($config);
        $this->factory = $factory;
    }


    protected function createConnection(array $config)
    {
        return $this->factory->make($config);
    }


    protected function getConfigName()
    {
        return 'taobaotop';
    }


    public function getFactory()
    {
        return $this->factory;
    }
}