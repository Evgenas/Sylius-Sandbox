<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Sandbox\Bundle\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Sylius\Sandbox\Bundle\CoreBundle\Entity\User;

/**
 * Add some users.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class LoadUsersData extends DataFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setUsername('administrator');
        $user->setEmail('administrator@example.com');
        $user->setPlainPassword('abrakadabra');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_SYLIUS_ADMIN'));

        $manager->persist($user);
        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 11;
    }
}
