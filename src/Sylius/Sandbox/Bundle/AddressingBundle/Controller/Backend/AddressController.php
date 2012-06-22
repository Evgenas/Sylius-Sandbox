<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Sandbox\Bundle\AddressingBundle\Controller\Backend;

use Sylius\Bundle\AddressingBundle\Controller\AddressController as BaseAddressController;

/**
 * Bundle provides flexible controller that we use here to create a
 * administrator controller which manipulates address resource.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class AddressController extends BaseAddressController
{
    /**
     * {@inheritdoc}
     */
    protected function getTemplateNamespace()
    {
        return 'SandboxAddressingBundle:Backend/Address';
    }

    /**
     * {@inheritdoc}
     */
    protected function getAddressRoute()
    {
        return 'sandbox_addressing_backend_address_show';
    }

    /**
     * {@inheritdoc}
     */
    protected function getAddressListRoute()
    {
        return 'sandbox_addressing_backend_address_list';
    }
}
