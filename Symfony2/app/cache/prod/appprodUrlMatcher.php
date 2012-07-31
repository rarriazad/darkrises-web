<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // DarkRisesWebBundle_counterpage
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DarkRisesWebBundle_counterpage');
            }
            return array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::registerAction',  '_route' => 'DarkRisesWebBundle_counterpage',);
        }

        // DarkRisesWebBundle_adminfanartpage
        if ($pathinfo === '/admin/fanart') {
            return array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::uploadFanartAction',  '_route' => 'DarkRisesWebBundle_adminfanartpage',);
        }

        // DarkRisesWebBundle_localesecondhomepage
        if (preg_match('#^/(?P<_locale>en|es)/(?P<name>[^/]+?)/(?P<second>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DarkRisesWebBundle_localesecondhomepage');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::indexAction',  'name' => 'empty',  '_locale' => 'es',  'second' => 'empty',)), array('_route' => 'DarkRisesWebBundle_localesecondhomepage'));
        }

        // DarkRisesWebBundle_localehomepage
        if (preg_match('#^/(?P<_locale>en|es)/(?P<name>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DarkRisesWebBundle_localehomepage');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::indexAction',  'name' => 'empty',  '_locale' => 'es',  'second' => 'empty',)), array('_route' => 'DarkRisesWebBundle_localehomepage'));
        }

        // DarkRisesWebBundle_localeindexpage
        if (preg_match('#^/(?P<_locale>es|en)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DarkRisesWebBundle_localeindexpage');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::indexAction',  'name' => 'empty',  '_locale' => 'es',  'second' => 'empty',)), array('_route' => 'DarkRisesWebBundle_localeindexpage'));
        }

        // DarkRisesWebBundle_secondhomepage
        if (preg_match('#^/(?P<name>[^/]+?)/(?P<second>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DarkRisesWebBundle_secondhomepage');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::indexAction',  'name' => 'empty',  'second' => 'empty',)), array('_route' => 'DarkRisesWebBundle_secondhomepage'));
        }

        // DarkRisesWebBundle_wallapershomepage
        if (0 === strpos($pathinfo, '/wallpaper/highres') && preg_match('#^/wallpaper/highres(?:/(?P<number>[^/]+?)(?:/(?P<address>[^/]+?))?)?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::wallpaperAction',  'number' => 'empty',  'address' => 'empty',)), array('_route' => 'DarkRisesWebBundle_wallapershomepage'));
        }

        // DarkRisesWebBundle_indexpage
        if (preg_match('#^/(?P<name>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DarkRisesWebBundle_indexpage');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::indexAction',  'name' => 'empty',  'second' => 'empty',)), array('_route' => 'DarkRisesWebBundle_indexpage'));
        }

        // DarkRisesWebBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'DarkRisesWebBundle_homepage');
            }
            return array (  '_controller' => 'DarkRises\\WebBundle\\Controller\\DefaultController::indexAction',  'name' => 'empty',  'second' => 'empty',  '_route' => 'DarkRisesWebBundle_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
