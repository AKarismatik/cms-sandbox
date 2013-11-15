<?php
namespace Application\Sonata\UserBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Presta\CMSCoreBundle\DataFixtures\PHPCR\BasePageFixture;
use Application\Sonata\UserBundle\Entity\User;

class LoadAdminUser extends BasePageFixture
{
    /**
      * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
    	$this->manager = $manager;
    	$userAdmin = new User();
    	$userAdmin->setUsername('admin');
    	$userAdmin->setEmail('admin@domain.com');
    	$userAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
    	$userAdmin->setPlainPassword('admin');
    	$userAdmin->setEnabled(true);
    	
    	$manager->persist($userAdmin);
    	$manager->flush();
    }
}
