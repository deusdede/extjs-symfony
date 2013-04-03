<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // categoria
        if (rtrim($pathinfo, '/') === '/categoria') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'categoria');
            }
            return array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::indexAction',  '_route' => 'categoria',);
        }

        // categoria_show
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::showAction',)), array('_route' => 'categoria_show'));
        }

        // categoria_new
        if ($pathinfo === '/categoria/new') {
            return array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::newAction',  '_route' => 'categoria_new',);
        }

        // categoria_create
        if ($pathinfo === '/categoria/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categoria_create;
            }
            return array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::createAction',  '_route' => 'categoria_create',);
        }
        not_categoria_create:

        // categoria_edit
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::editAction',)), array('_route' => 'categoria_edit'));
        }

        // categoria_update
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categoria_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::updateAction',)), array('_route' => 'categoria_update'));
        }
        not_categoria_update:

        // categoria_delete
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categoria_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\CategoriaController::deleteAction',)), array('_route' => 'categoria_delete'));
        }
        not_categoria_delete:

        // dsj_estoque_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'dsj_estoque_default_index'));
        }

        // produto
        if (rtrim($pathinfo, '/') === '/produto') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_produto;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'produto');
            }
            return array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::indexAction',  '_route' => 'produto',);
        }
        not_produto:

        // produto_create
        if (rtrim($pathinfo, '/') === '/produto') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_produto_create;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'produto_create');
            }
            return array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::createAction',  '_route' => 'produto_create',);
        }
        not_produto_create:

        // produto_update
        if (0 === strpos($pathinfo, '/produto') && preg_match('#^/produto/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_produto_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::updateAction',)), array('_route' => 'produto_update'));
        }
        not_produto_update:

        // produto_delete
        if (rtrim($pathinfo, '/') === '/produto') {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_produto_delete;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'produto_delete');
            }
            return array (  '_controller' => 'dsj\\EstoqueBundle\\Controller\\ProdutoController::deleteAction',  '_route' => 'produto_delete',);
        }
        not_produto_delete:

        // contact
        if (rtrim($pathinfo, '/') === '/contact') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contact');
            }
            return array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
        }

        // contact_show
        if (0 === strpos($pathinfo, '/contact') && preg_match('#^/contact/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::showAction',)), array('_route' => 'contact_show'));
        }

        // contact_new
        if ($pathinfo === '/contact/new') {
            return array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::newAction',  '_route' => 'contact_new',);
        }

        // contact_create
        if ($pathinfo === '/contact/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_contact_create;
            }
            return array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::createAction',  '_route' => 'contact_create',);
        }
        not_contact_create:

        // contact_edit
        if (0 === strpos($pathinfo, '/contact') && preg_match('#^/contact/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::editAction',)), array('_route' => 'contact_edit'));
        }

        // contact_update
        if (0 === strpos($pathinfo, '/contact') && preg_match('#^/contact/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_contact_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::updateAction',)), array('_route' => 'contact_update'));
        }
        not_contact_update:

        // contact_delete
        if (0 === strpos($pathinfo, '/contact') && preg_match('#^/contact/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_contact_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\ContactController::deleteAction',)), array('_route' => 'contact_delete'));
        }
        not_contact_delete:

        // dsj_contato_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dsj_contato_default_index');
            }
            return array (  '_controller' => 'dsj\\ContatoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dsj_contato_default_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
