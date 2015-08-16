<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_scheme' => 'http',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'http',  ),),
        '_Contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::ContactAction',  ),  2 =>   array (    '_scheme' => 'http',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/Contact/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'http',  ),),
        '_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\DefaultController::CreateTestAction',  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/TestCreator/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_Register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::RegisterAction',  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/Register/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_Reg_Check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::RegistedAction',  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/RegChecked/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_Reg_Activation' => array (  0 =>   array (    0 => 'usern',    1 => 'Activation',  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::ActivateCodeAction',    'Activation' => NULL,  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'Activation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'usern',    ),    2 =>     array (      0 => 'text',      1 => '/webvl/RegActivationCode',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_Reg_ActiveCode_Check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::ActivateCheckCodeAction',  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/RegActiveCodeCheck/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_log_in' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\UserFController::LogInAction',  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/LogIn/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/LoginChecked',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_LogOut' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/LogOut/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_Villas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::VillasAction',  ),  2 =>   array (    '_scheme' => 'http',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/Villas/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'http',  ),),
        '_ShowVilla' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::ShowVillaAction',    'id' => -1,  ),  2 =>   array (    '_scheme' => 'http',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/webvl/Villas/Show',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'http',  ),),
        '_villataker' => array (  0 =>   array (    0 => 'start',    1 => 'end',  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::TakeVillasAction',    'start' => 1,    'end' => 5,  ),  2 =>   array (    '_scheme' => 'http',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'end',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'start',    ),    2 =>     array (      0 => 'text',      1 => '/webvl/Villas/Taker',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'http',  ),),
        '_AddVilla' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::addAction',  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/Villas/Add/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_AddVillaCheck' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::AddCheckAction',  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/Villas/Add/Check',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_EditVilla' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::EditAction',    'id' => -1,  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/webvl/Villas/Edit',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_EditVillaCheck' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::CheckEditAction',    'id' => -1,  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/webvl/Villas/Edit/Check',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_DeleteVilla' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::DeleteAction',    'id' => -1,  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/webvl/Villas/Delete',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_DeleteVillaCheck' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::DeleteCheckAction',    'id' => -1,  ),  2 =>   array (    '_scheme' => 'https',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/webvl/Villas/Delete/Check',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        '_mapVilla' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::mapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/Villas/Map/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_my_app_greeting' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebVL\\WebVillasBundle\\Controller\\VillasController::greetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webvl/Villas/greet/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
