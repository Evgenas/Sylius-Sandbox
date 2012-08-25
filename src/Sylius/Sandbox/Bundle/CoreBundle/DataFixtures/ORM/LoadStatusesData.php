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
 * Adds fake order statuses.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class LoadStatusesData extends DataFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $manager = $this->container->get('sylius_sales.manager.status');

        for ($i = 1; $i <= 6; $i++) {
            $status = $manager->createStatus();
            $status->setName($this->faker->word);

            $manager->persistStatus($status);
            $this->setReference('Sandbox.Sales.Status-'.$i, $status);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 9;
    }
}
