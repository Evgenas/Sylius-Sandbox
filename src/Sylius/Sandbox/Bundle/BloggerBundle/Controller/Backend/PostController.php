<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Sandbox\Bundle\BloggerBundle\Controller\Backend;

use Sylius\Bundle\BloggerBundle\Controller\PostController as BasePostController;

/**
 * Bundle provides flexible controller that we use here to create a
 * administrator controller which manipulates post resource.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class PostController extends BasePostController
{
    /**
     * {@inheritdoc}
     */
    protected function getTemplateNamespace()
    {
        return 'SandboxBloggerBundle:Backend/Post';
    }

    /**
     * {@inheritdoc}
     */
    protected function getPostRoute()
    {
        return 'sandbox_blogger_backend_post_show';
    }

    /**
     * {@inheritdoc}
     */
    protected function getPostListRoute()
    {
        return 'sandbox_blogger_backend_post_list';
    }
}
