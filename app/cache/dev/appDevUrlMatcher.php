<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/webvl')) {
            // _homepage
            if (rtrim($pathinfo, '/') === '/webvl') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_homepage');
                }

                $requiredSchemes = array (  'http' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, '_homepage', key($requiredSchemes));
                }

                return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::indexAction',  '_route' => '_homepage',);
            }

            // _theme
            if ($pathinfo === '/webvl/theme') {
                return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::ThemeAction',  '_route' => '_theme',);
            }

            // _Contact
            if (rtrim($pathinfo, '/') === '/webvl/Contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_Contact');
                }

                $requiredSchemes = array (  'http' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, '_Contact', key($requiredSchemes));
                }

                return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::ContactAction',  '_route' => '_Contact',);
            }

            // _test
            if (rtrim($pathinfo, '/') === '/webvl/TestCreator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_test');
                }

                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, '_test', key($requiredSchemes));
                }

                return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::CreateTestAction',  '_route' => '_test',);
            }

            if (0 === strpos($pathinfo, '/webvl/Reg')) {
                // _Register
                if (rtrim($pathinfo, '/') === '/webvl/Register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_Register');
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_Register', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::RegisterAction',  '_route' => '_Register',);
                }

                // _Reg_Check
                if (rtrim($pathinfo, '/') === '/webvl/RegChecked') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_Reg_Check');
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_Reg_Check', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::RegistedAction',  '_route' => '_Reg_Check',);
                }

                if (0 === strpos($pathinfo, '/webvl/RegActiv')) {
                    // _Reg_Activation
                    if (0 === strpos($pathinfo, '/webvl/RegActivationCode') && preg_match('#^/webvl/RegActivationCode/(?P<usern>[^/]++)(?:/(?P<Activation>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_Reg_Activation', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_Reg_Activation')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::ActivateCodeAction',  'Activation' => NULL,));
                    }

                    // _Reg_ActiveCode_Check
                    if (rtrim($pathinfo, '/') === '/webvl/RegActiveCodeCheck') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_Reg_ActiveCode_Check');
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_Reg_ActiveCode_Check', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::ActivateCheckCodeAction',  '_route' => '_Reg_ActiveCode_Check',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/webvl/Log')) {
                // _log_in
                if (rtrim($pathinfo, '/') === '/webvl/LogIn') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_log_in');
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_log_in', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::LogInAction',  '_route' => '_log_in',);
                }

                // _login_check
                if ($pathinfo === '/webvl/LoginChecked') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_login_check', key($requiredSchemes));
                    }

                    return array('_route' => '_login_check');
                }

                // _LogOut
                if (rtrim($pathinfo, '/') === '/webvl/LogOut') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_LogOut');
                    }

                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_LogOut', key($requiredSchemes));
                    }

                    return array('_route' => '_LogOut');
                }

            }

            // _Account
            if ($pathinfo === '/webvl/Account') {
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$this->context->getScheme()])) {
                    return $this->redirect($pathinfo, '_Account', key($requiredSchemes));
                }

                return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::AccountAction',  '_route' => '_Account',);
            }

            if (0 === strpos($pathinfo, '/webvl/Update')) {
                // _updTheme
                if ($pathinfo === '/webvl/Update/Theme') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_updTheme', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::ThemeUpdAction',  '_route' => '_updTheme',);
                }

                // _updMail
                if ($pathinfo === '/webvl/Update/Mail') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_updMail', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::MailUpdAction',  '_route' => '_updMail',);
                }

                // _updPass
                if ($pathinfo === '/webvl/Update/Password') {
                    $requiredSchemes = array (  'https' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_updPass', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::PassUpdAction',  '_route' => '_updPass',);
                }

            }

            if (0 === strpos($pathinfo, '/webvl/Villas')) {
                // _Villas
                if (rtrim($pathinfo, '/') === '/webvl/Villas') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_Villas');
                    }

                    $requiredSchemes = array (  'http' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_Villas', key($requiredSchemes));
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::VillasAction',  '_route' => '_Villas',);
                }

                // _ShowVilla
                if (0 === strpos($pathinfo, '/webvl/Villas/Show') && preg_match('#^/webvl/Villas/Show(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'http' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_ShowVilla', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ShowVilla')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::ShowVillaAction',  'id' => -1,));
                }

                // _villataker
                if (0 === strpos($pathinfo, '/webvl/Villas/Taker') && preg_match('#^/webvl/Villas/Taker(?:/(?P<start>[^/]++)(?:/(?P<end>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    $requiredSchemes = array (  'http' => 0,);
                    if (!isset($requiredSchemes[$this->context->getScheme()])) {
                        return $this->redirect($pathinfo, '_villataker', key($requiredSchemes));
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_villataker')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::TakeVillasAction',  'start' => 1,  'end' => 5,));
                }

                if (0 === strpos($pathinfo, '/webvl/Villas/Add')) {
                    // _AddVilla
                    if (rtrim($pathinfo, '/') === '/webvl/Villas/Add') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_AddVilla');
                        }

                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_AddVilla', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::addAction',  '_route' => '_AddVilla',);
                    }

                    // _AddVillaCheck
                    if ($pathinfo === '/webvl/Villas/Add/Check') {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_AddVillaCheck', key($requiredSchemes));
                        }

                        return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::AddCheckAction',  '_route' => '_AddVillaCheck',);
                    }

                }

                if (0 === strpos($pathinfo, '/webvl/Villas/Edit')) {
                    // _EditVilla
                    if (preg_match('#^/webvl/Villas/Edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_EditVilla', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_EditVilla')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::EditAction',  'id' => -1,));
                    }

                    // _EditVillaCheck
                    if (0 === strpos($pathinfo, '/webvl/Villas/Edit/Check') && preg_match('#^/webvl/Villas/Edit/Check(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_EditVillaCheck', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_EditVillaCheck')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::CheckEditAction',  'id' => -1,));
                    }

                }

                if (0 === strpos($pathinfo, '/webvl/Villas/Delete')) {
                    // _DeleteVilla
                    if (preg_match('#^/webvl/Villas/Delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_DeleteVilla', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_DeleteVilla')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::DeleteAction',  'id' => -1,));
                    }

                    // _DeleteVillaCheck
                    if (0 === strpos($pathinfo, '/webvl/Villas/Delete/Check') && preg_match('#^/webvl/Villas/Delete/Check(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$this->context->getScheme()])) {
                            return $this->redirect($pathinfo, '_DeleteVillaCheck', key($requiredSchemes));
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_DeleteVillaCheck')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::DeleteCheckAction',  'id' => -1,));
                    }

                }

                // _mapVilla
                if (rtrim($pathinfo, '/') === '/webvl/Villas/Map') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_mapVilla');
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::mapAction',  '_route' => '_mapVilla',);
                }

                // _my_app_greeting
                if (rtrim($pathinfo, '/') === '/webvl/Villas/greet') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_my_app_greeting');
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::greetAction',  '_route' => '_my_app_greeting',);
                }

            }

            if (0 === strpos($pathinfo, '/webvl/WebServices')) {
                // _webService
                if (rtrim($pathinfo, '/') === '/webvl/WebServices') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_webService');
                    }

                    return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\WSVController::indexAction',  '_route' => '_webService',);
                }

                // _xmltry
                if (0 === strpos($pathinfo, '/webvl/WebServices/xml') && preg_match('#^/webvl/WebServices/xml(?:/(?P<id>[^/]++)(?:/(?P<Address>[^/]++)(?:/(?P<State>[^/]++)(?:/(?P<all>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_xmltry')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\WSVController::WebXMLAction',  'id' => -1,  'Address' => '',  'State' => '',  'all' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/webvl/Photos')) {
                if (0 === strpos($pathinfo, '/webvl/Photos/Add')) {
                    // _AddPhoto
                    if ($pathinfo === '/webvl/Photos/Add') {
                        return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\PhController::AddPAction',  '_route' => '_AddPhoto',);
                    }

                    // _AddCheckPhoto
                    if ($pathinfo === '/webvl/Photos/Add/Check') {
                        return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\PhController::AddPCheckAction',  '_route' => '_AddCheckPhoto',);
                    }

                }

                if (0 === strpos($pathinfo, '/webvl/Photos/Edit')) {
                    // _EditPhoto
                    if (preg_match('#^/webvl/Photos/Edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_EditPhoto')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\PhController::EditAction',  'id' => -1,));
                    }

                    // _EditCheckPhoto
                    if (0 === strpos($pathinfo, '/webvl/Photos/Edit/Check') && preg_match('#^/webvl/Photos/Edit/Check(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_EditCheckPhoto')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\PhController::EditCheckAction',  'id' => -1,));
                    }

                }

                if (0 === strpos($pathinfo, '/webvl/Photos/Delete')) {
                    // _DeletePhoto
                    if ($pathinfo === '/webvl/Photos/Delete') {
                        return array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\PhController::DeleteAction',  '_route' => '_DeletePhoto',);
                    }

                    // _DelPhotoCheck
                    if (0 === strpos($pathinfo, '/webvl/Photos/Delete/Check') && preg_match('#^/webvl/Photos/Delete/Check(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_DelPhotoCheck')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\PhController::DeleteCheckAction',  'id' => -1,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/webvl/Search')) {
                // _Search
                if (preg_match('#^/webvl/Search(?:/(?P<stxt>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_Search')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::SearchAction',  'stxt' => '',));
                }

                // _SearchTaker
                if (0 === strpos($pathinfo, '/webvl/Searcher') && preg_match('#^/webvl/Searcher(?:/(?P<start>[^/]++)(?:/(?P<end>[^/]++)(?:/(?P<SrchTxt>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_SearchTaker')), array (  '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::SearchTakerAction',  'start' => 1,  'end' => 5,  'SrchTxt' => '',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
