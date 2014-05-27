<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Daniel\MyPageBundle\DanielMyPageBundle(),

            new Tudor\PagPersBundle\TudorPagPersBundle(),
            new Angelescu\angelescuBundle\AngelescuangelescuBundle(),
            new Acme\HelloBundle\AcmeHelloBundle(),
            new Sonia\PageBundle\SoniaPageBundle(),
            new Andrei\PersonalPageBundle\AndreiPersonalPageBundle(),
<<<<<<< HEAD
            new rares\raresBundle\raresraresBundle(),
                    );
=======
            new ACiungan\BlogBundle\ACiunganBlogBundle(),
            new Ampoitan\NicuBundle\AmpoitanNicuBundle(),
        );
>>>>>>> b9ff4358893421c1386d127dc1ef4ee714858161

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
