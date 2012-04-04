<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'gsBlogBundle_homepage' => true,
       'tutoWelcomeBundle_whoami' => true,
       'tutoWelcomeBundle_homepage' => true,
       'tutoWelcomeBundle_contact' => true,
       'article' => true,
       'article_show' => true,
       'article_new' => true,
       'article_create' => true,
       'article_edit' => true,
       'article_update' => true,
       'article_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getgsBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'gs\\BlogBundle\\Controller\\BlogController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/first/',  ),));
    }

    private function gettutoWelcomeBundle_whoamiRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\HomepageController::whoAmIAction',), array (  'name' => '\\w+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\w+',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/qui-suis-je',  ),));
    }

    private function gettutoWelcomeBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\HomepageController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function gettutoWelcomeBundle_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ContactController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getarticleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ArticleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/crud/',  ),));
    }

    private function getarticle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ArticleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/crud',  ),));
    }

    private function getarticle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ArticleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/crud/new',  ),));
    }

    private function getarticle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ArticleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/crud/create',  ),));
    }

    private function getarticle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ArticleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/crud',  ),));
    }

    private function getarticle_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ArticleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/crud',  ),));
    }

    private function getarticle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'tuto\\WelcomeBundle\\Controller\\ArticleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/crud',  ),));
    }
}
