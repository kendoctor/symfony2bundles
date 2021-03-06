<?php

namespace Knplabs\Bundle\Symfony2BundlesBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Knplabs\Bundle\Symfony2BundlesBundle\DependencyInjection\KnplabsSymfony2BundlesExtension;
use Knplabs\Bundle\Symfony2BundlesBundle\DependencyInjection\Compiler\FinderPass;

class KnplabsSymfony2BundlesBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->registerExtension(new KnplabsSymfony2BundlesExtension());
        $container->addCompilerPass(new FinderPass());
    }

}
