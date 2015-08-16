<?php

/* WebVLWebVillasBundle:Default:index.html.twig */
class __TwigTemplate_36a4fa75a0dbf00c654673da5a3d2cb03c3ab10840e00dbfd694ed58509eceba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebVLWebVillasBundle::layout.html.twig");

        $this->blocks = array(
            'MainCont' => array($this, 'block_MainCont'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebVLWebVillasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
        <br/>
        ";
        // line 5
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "WelcomeMes"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "WelcomeMes"), "method"), null)) : (null)) != null)) {
            // line 6
            echo "            <h1 style=\"color:red;background-color:black;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "WelcomeMes"), "method"), "html", null, true);
            echo " </h1>
            ";
        }
        // line 8
        echo "            ";
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Registered"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Registered"), "method"), null)) : (null)) != null)) {
            // line 9
            echo "            <h1 style=\"color:red;background-color:black;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "Registered"), "method"), "html", null, true);
            echo " </h1>
            ";
        }
        // line 11
        echo "        Hello Master!
   
        <br/>
        

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac dolor luctus, laoreet felis vitae, tristique massa. Donec et tempor libero. Suspendisse potenti. In quis dui id urna congue mollis sit amet in risus. Aliquam rutrum, ante non suscipit ornare, nisi tortor gravida dolor, semper pulvinar enim diam id felis. Cras lorem ante, rhoncus id quam in, tincidunt tempor tortor. Proin ornare, nisi eu pellentesque pulvinar, ante massa placerat turpis, ut ultrices nulla dolor eu arcu. Nulla diam orci, lobortis vitae mi et, ultrices mollis tortor. Integer ligula risus, eleifend ut nibh et, posuere feugiat ligula. Proin pharetra enim vestibulum, hendrerit turpis eget, porttitor urna. Duis iaculis turpis nec neque varius, a condimentum massa dapibus. Nulla pharetra hendrerit malesuada. Sed vitae massa non tortor tincidunt tincidunt cursus sit amet odio. Nulla eu erat risus. In sit amet mollis mi. Duis luctus commodo nisl sed euismod.

Maecenas aliquet felis convallis erat mollis sollicitudin eleifend volutpat mauris. Suspendisse faucibus sodales placerat. Mauris tempor vehicula nisl, id malesuada ante consectetur nec. Sed vel dui eu libero placerat semper. Sed at dui tincidunt, lacinia tellus nec, commodo ipsum. Mauris ac lacinia lectus, et commodo justo. Proin tincidunt, tellus eu consequat pretium, enim turpis semper nibh, id adipiscing risus enim in ipsum. Duis aliquam varius diam. Proin eget convallis lacus. Nulla nec imperdiet ante. Donec sed cursus dui. Duis risus leo, congue sit amet magna eu, pretium aliquet lorem. Vestibulum id lectus felis. In hac habitasse platea dictumst.

Pellentesque sit amet lacus pellentesque, porttitor dolor id, tincidunt mi. Cras euismod leo et dolor tempor, quis lacinia sem sagittis. Maecenas pellentesque augue quis turpis gravida pulvinar. Morbi at tortor purus. Pellentesque molestie est lacus, nec pharetra nunc fringilla id. Donec ac sapien enim. Maecenas neque metus, mattis vel turpis sed, sollicitudin porta risus. Phasellus sagittis tristique nibh et molestie. Nulla bibendum leo non eros iaculis faucibus. Donec in metus ac ligula tempor elementum. Proin eu est magna. Aenean placerat placerat lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi. Fusce eget suscipit nunc, quis pharetra libero.

Curabitur vulputate vehicula felis at faucibus. Aliquam ultricies dignissim leo, eget interdum eros rutrum mollis. Aenean ut mi pharetra, egestas mi eu, porta nulla. Morbi scelerisque ornare augue ac imperdiet. Nam ac gravida turpis. Quisque nec vehicula leo. Sed gravida, ligula ac sagittis sagittis, erat nibh consequat felis, vulputate tincidunt urna erat sit amet libero. Aliquam tempus mattis leo tempor egestas. In sit amet sapien odio. In viverra mollis justo vitae sollicitudin. Curabitur tortor lacus, tempus in sem ac, pulvinar congue magna. Duis fringilla, eros non fringilla eleifend, dui enim convallis mi, in porta nisi dolor nec augue. Suspendisse cursus diam at nisi tincidunt, et vestibulum diam ornare. Mauris at elit ac leo ultricies porta et ac urna.

Nunc et sodales dolor, a lacinia risus. Curabitur volutpat risus nec eros luctus, imperdiet faucibus lacus fermentum. Etiam quis ornare ligula. Fusce et auctor est. Cras in orci ut nisl dignissim convallis sit amet quis eros. Donec hendrerit mauris at nisl rutrum tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis mollis, ligula eu tempor vehicula, dui massa pellentesque tellus, quis pellentesque mi sem non mauris. Nam eget suscipit lacus. Nullam dolor sem, venenatis ac malesuada sit amet, sagittis sed ligula. <br/>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  28 => 2,);
    }
}
