<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Sandbox\Bundle\CoreBundle\Controller\Frontend;

use Sylius\Component\Controllers\Controller;

/**
 * Frontend main controller.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class MainController extends Controller
{
    /**
     * Front page, yay!
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('SandboxCoreBundle:Frontend/Main:index.html.twig');
    }
}
