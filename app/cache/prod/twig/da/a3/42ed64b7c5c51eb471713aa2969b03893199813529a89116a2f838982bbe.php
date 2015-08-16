<?php

/* WebVLWebVillasBundle:Default:index.html.twig */
class __TwigTemplate_daa342ed64b7c5c51eb471713aa2969b03893199813529a89116a2f838982bbe extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "WelcomeMes"), "method"), "html", null, true);
            echo " </h1>
            ";
        }
        // line 8
        echo "            ";
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Registered"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Registered"), "method"), null)) : (null)) != null)) {
            // line 9
            echo "            <h1 style=\"color:red;background-color:black;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "Registered"), "method"), "html", null, true);
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
        return array (  52 => 11,  37 => 6,  150 => 51,  126 => 60,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 34,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 2,  87 => 36,  72 => 16,  55 => 23,  21 => 1,  26 => 4,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 8,  44 => 13,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 54,  105 => 40,  101 => 32,  91 => 27,  69 => 31,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 13,  133 => 55,  130 => 41,  125 => 44,  122 => 59,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 44,  99 => 43,  95 => 42,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
