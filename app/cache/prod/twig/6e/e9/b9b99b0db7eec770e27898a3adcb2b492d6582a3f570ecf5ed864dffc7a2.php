<?php

/* WebVLWebVillasBundle:Villas:DeleteVilla.html.twig */
class __TwigTemplate_6ee9b9b99b0db7eec770e27898a3adcb2b492d6582a3f570ecf5ed864dffc7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebVLWebVillasBundle::layout.html.twig");

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'MainCont' => array($this, 'block_MainCont'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebVLWebVillasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["vill"] = $this->env->loadTemplate("WebVLWebVillasBundle::villastemplate.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Head($context, array $blocks = array())
    {
        echo "    
            <title>WebVillas - Delete Villa's</title>
          <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/villas.css"), "html", null, true);
        echo "\" /> 
            ";
    }

    // line 7
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
         <br/>
        <h1>Delete Villa</h1>
           <br/>
           
        <div class=\"VillasMainSite\" style=\"font-size: larger;\">
            <table>
            
                <tr class=\"CaptionNam\"><td colspan=\"3\">Address: ";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address"), "value")) : ("value")), "html", null, true);
        echo " </td></tr>
                <tr class=\"CaptionDesc\"><td> Description: ";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "details", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "details"), "None Description")) : ("None Description")), "html", null, true);
        echo " <br/>
                        Price: ";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price"), "No price")) : ("No price")), "html", null, true);
        echo " <br/>
                        Size: ";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "size"), "Zero")) : ("Zero")), "html", null, true);
        echo " <br/>
                        Rooms: ";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "rooms", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "rooms"), "Zero")) : ("Zero")), "html", null, true);
        echo " <br/>
                        Restrooms: ";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "restrooms", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "restrooms"), "Zero")) : ("Zero")), "html", null, true);
        echo " <br/>
                        View: ";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "view", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "view"), "No View")) : ("No View")), "html", null, true);
        echo " <br/>
                        State: ";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state"), "No State")) : ("No State")), "html", null, true);
        echo " <br/>
                        </td><td>Parking: ";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "parking", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "parking"), "No")) : ("No")), "html", null, true);
        echo " <br/>
                        Pool: ";
        // line 25
        if (((($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "pool", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "pool"), 0)) : (0)) != 0)) {
            echo " Yes! ";
        } else {
            echo " No! ";
        }
        echo " <br/>
                        Gym: ";
        // line 26
        if (((($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "gym", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "gym"), 0)) : (0)) != 0)) {
            echo " Yes! ";
        } else {
            echo " No! ";
        }
        echo " <br/>
                        Sauna: ";
        // line 27
        if (((($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "sauna", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "sauna"), 0)) : (0)) != 0)) {
            echo " Yes! ";
        } else {
            echo " No! ";
        }
        echo " <br/>
                        </td><td  class=\"edittd\" ><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_DeleteVillaCheck", array("id" => $this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "idVillas"))), "html", null, true);
        echo "\" onclick=\"return confirm('Are you sure you Want to Delete the Record with Name: ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address"), "value")) : ("value")), "html", null, true);
        echo "')\"> Delete!</a>  <br/> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_Villas");
        echo "\">Return!</a></td></tr>
                
                
               
            </table>
            
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Villas:DeleteVilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 22,  65 => 18,  53 => 13,  97 => 33,  58 => 14,  52 => 12,  37 => 5,  150 => 51,  126 => 60,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 31,  85 => 25,  79 => 34,  75 => 17,  68 => 19,  56 => 16,  50 => 11,  29 => 2,  87 => 36,  72 => 20,  55 => 13,  21 => 1,  26 => 2,  98 => 31,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 4,  40 => 8,  44 => 13,  35 => 5,  31 => 3,  43 => 7,  41 => 7,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 54,  105 => 36,  101 => 33,  91 => 30,  69 => 19,  66 => 15,  62 => 17,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 13,  133 => 55,  130 => 41,  125 => 44,  122 => 59,  116 => 28,  112 => 42,  109 => 36,  106 => 33,  103 => 44,  99 => 43,  95 => 42,  92 => 25,  86 => 28,  82 => 26,  80 => 22,  73 => 22,  64 => 18,  60 => 17,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
