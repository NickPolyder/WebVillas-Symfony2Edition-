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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
