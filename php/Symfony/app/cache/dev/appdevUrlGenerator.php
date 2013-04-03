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
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
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
       'categoria' => true,
       'categoria_show' => true,
       'categoria_new' => true,
       'categoria_create' => true,
       'categoria_edit' => true,
       'categoria_update' => true,
       'categoria_delete' => true,
       'dsj_estoque_default_index' => true,
       'produto' => true,
       'produto_create' => true,
       'produto_update' => true,
       'produto_delete' => true,
       'contact' => true,
       'contact_show' => true,
       'contact_new' => true,
       'contact_create' => true,
       'contact_edit' => true,
       'contact_update' => true,
       'contact_delete' => true,
       'dsj_contato_default_index' => true,
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

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
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

    private function getcategoriaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/categoria/',  ),));
    }

    private function getcategoria_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getcategoria_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/categoria/new',  ),));
    }

    private function getcategoria_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/categoria/create',  ),));
    }

    private function getcategoria_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getcategoria_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getcategoria_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getdsj_estoque_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getprodutoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/produto/',  ),));
    }

    private function getproduto_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/produto/',  ),));
    }

    private function getproduto_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::updateAction',), array (  '_method' => 'PUT',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/produto',  ),));
    }

    private function getproduto_deleteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::deleteAction',), array (  '_method' => 'DELETE',), array (  0 =>   array (    0 => 'text',    1 => '/produto/',  ),));
    }

    private function getcontactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact/',  ),));
    }

    private function getcontact_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getcontact_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact/new',  ),));
    }

    private function getcontact_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/contact/create',  ),));
    }

    private function getcontact_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getcontact_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getcontact_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getdsj_contato_default_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }
}
