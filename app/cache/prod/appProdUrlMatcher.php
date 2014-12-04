<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // project_gaming_corner_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'project_gaming_corner_homepage');
            }

            return array (  '_controller' => 'Project\\GamingCornerBundle\\Controller\\BasicController::indexAction',  '_route' => 'project_gaming_corner_homepage',);
        }

        // project_gaming_corner_reviews
        if ($pathinfo === '/reviews') {
            return array (  '_controller' => 'Project\\GamingCornerBundle\\Controller\\BasicController::reviewAction',  '_route' => 'project_gaming_corner_reviews',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
