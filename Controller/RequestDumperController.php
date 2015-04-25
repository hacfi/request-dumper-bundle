<?php

/*
 * (c) Philipp Wahala <philipp.wahala@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace hacfi\RequestDumperBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class RequestDumperController
{
    private $alias;

    /**
     * Constructor.
     *
     * @param string $alias
     */
    public function __construct()
    {
        //$this->alias = $alias;
    }

    /**
     * {@inheritdoc}
     */
    public function indexAction(Request $request)
    {

        return new Response('OK');
    }
}
