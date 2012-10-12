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

/**
 * Default addresssing fixtures to play with Sylius sandbox.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class LoadAddressesData extends DataFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $manager = $this->container->get('sylius_addressing.manager.address');
        $manipulator = $this->container->get('sylius_addressing.manipulator.address');

        for ($i = 1; $i <= 100; $i++) {
            $address = $manager->createAddress();

            $address->setFirstname($this->faker->firstName);
            $address->setLastname($this->faker->lastName);
            $address->setCity($this->faker->city);
            $address->setStreet($this->faker->streetAddress);
            $address->setPostcode($this->faker->postcode);

            $manipulator->create($address);

            $this->setReference('Sandbox.Addressing.Address-'.$i, $address);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
