<?php

/*
* This file is part of the Sylius sandbox application.
*
* (c) Paweł Jędrzejewski
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Sylius\Sandbox\Bundle\CoreBundle\Entity;

use Sylius\Bundle\SalesBundle\Entity\LineItem as BaseLineItem;
use Sylius\Component\Assortment\Model\Variants\VariantInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales order entity.
 *
 * @author Paweł Jędrzjewski <pjedrzejewski@diweb.pl>
 */
class LineItem extends BaseLineItem
{
    /**
     * @Assert\NotBlank
     */
    protected $variant;
    protected $unitPrice;

    public function getVariant()
    {
        return $this->variant;
    }

    public function setVariant(VariantInterface $variant)
    {
        $this->variant = $variant;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }
}
