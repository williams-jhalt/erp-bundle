<?php

namespace Williams\ErpBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class WilliamsErpExtension extends Extension {

    public function load(array $configs, ContainerBuilder $container) {

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader(
                $container, new FileLocator(__DIR__ . '/../Resources/config'));

        if ($config['role'] == 'server') {

            $container->setParameter('erp.host', $config['erp_server']['host']);
            $container->setParameter('erp.username', $config['erp_server']['username']);
            $container->setParameter('erp.password', $config['erp_server']['password']);
            $container->setParameter('erp.company', $config['erp_server']['company']);
            $container->setParameter('erp.appname', $config['erp_server']['appname']);

            $loader->load('server_services.yml');
        } else {

            $container->setParameter('erp.host', $config['erp_server']['host']);

            $loader->load('client_services.yml');
        }
    }

}
