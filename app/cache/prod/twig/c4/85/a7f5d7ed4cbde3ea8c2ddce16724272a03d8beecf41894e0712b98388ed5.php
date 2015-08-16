<?php

/* WebVLWebVillasBundle::villastemplate.html.twig */
class __TwigTemplate_c485a7f5d7ed4cbde3ea8c2ddce16724272a03d8beecf41894e0712b98388ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 31
        echo "
";
    }

    // line 1
    public function getvillas($_Villas = null)
    {
        $context = $this->env->mergeGlobals(array(
            "Villas" => $_Villas,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"VillasMainSite\">
    <br/>
            <table>
                ";
            // line 5
            $context["i"] = 1;
            // line 6
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Villas"]) ? $context["Villas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["villa"]) {
                // line 7
                echo "              ";
                if ((((isset($context["i"]) ? $context["i"] : null) % 2) == 0)) {
                    // line 8
                    echo "               <tr class=\"CaptionNam\"><td colspan=\"3\">Address: ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address"), "value")) : ("value")), "html", null, true);
                    echo " </td></tr>
                <tr class=\"CaptionDesc\"><td>
                        Price: ";
                    // line 10
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price"), "No price")) : ("No price")), "html", null, true);
                    echo " <br/>
                        State: ";
                    // line 11
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state"), "No State")) : ("No State")), "html", null, true);
                    echo " <br/>
                    </td><td><a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ShowVilla", array("id" => $this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "idVillas"))), "html", null, true);
                    echo "\">Full View</a>
                        </td></tr>
                
                <tr style=\"display: hidden;\"><td colspan=\"2\" ></td></tr>
                ";
                } else {
                    // line 17
                    echo "<tr class=\"CaptionNam alt\"><td colspan=\"2\">Address: ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address"), "value")) : ("value")), "html", null, true);
                    echo "</td></tr>
<tr class=\"CaptionDesc alt\"> <td> Price: ";
                    // line 18
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price"), "No price")) : ("No price")), "html", null, true);
                    echo " <br/>
                        State: ";
                    // line 19
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state"), "No State")) : ("No State")), "html", null, true);
                    echo " <br/>
                    </td><td><a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ShowVilla", array("id" => $this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "idVillas"))), "html", null, true);
                    echo "\">Full View</a>
                        </td></tr>
                
                ";
                }
                // line 24
                echo "                ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 25
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['villa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </table>
            <br/>
        </div>
            
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getState($_Query = null, $_selected = null)
    {
        $context = $this->env->mergeGlobals(array(
            "Query" => $_Query,
            "selected" => $_selected,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    <tr> <td>State</td><td>
             <select id=\"State\" name=\"_State\" >
                 ";
            // line 35
            if ((((array_key_exists("selected", $context)) ? (_twig_default_filter((isset($context["selected"]) ? $context["selected"] : null), (-1))) : ((-1))) == (-1))) {
                // line 36
                echo "           <option value=\"-1\" selected=\"selected\"   >-----------State-----------</option>
           ";
                // line 37
                if ((((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : null), (-1))) : ((-1))) != (-1))) {
                    // line 38
                    echo "          ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Query"]) ? $context["Query"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["states"]) {
                        // line 39
                        echo "              
 <option value=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : null), "id"), "html", null, true);
                        echo "\"   >";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : null), "state"), "html", null, true);
                        echo "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['states'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 43
                echo "                 ";
            } else {
                // line 44
                echo "                      <option value=\"-1\">-----------State-----------</option>
           ";
                // line 45
                if ((((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : null), (-1))) : ((-1))) != (-1))) {
                    // line 46
                    echo "          ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Query"]) ? $context["Query"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["states"]) {
                        // line 47
                        echo "                ";
                        if ((((array_key_exists("selected", $context)) ? (_twig_default_filter((isset($context["selected"]) ? $context["selected"] : null), (-1))) : ((-1))) == $this->getAttribute((isset($context["states"]) ? $context["states"] : null), "id"))) {
                            // line 48
                            echo " <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : null), "id"), "html", null, true);
                            echo "\" selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : null), "state"), "html", null, true);
                            echo "</option>
 ";
                        } else {
                            // line 50
                            echo "      <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : null), "id"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : null), "state"), "html", null, true);
                            echo "</option>
 ";
                        }
                        // line 52
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['states'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 54
                echo "                 ";
            }
            // line 55
            echo "
             </select><span class=\"error\" id=\"stateerr\"></span>
        </td>
       
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle::villastemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  197 => 54,  190 => 52,  161 => 44,  139 => 38,  137 => 37,  81 => 19,  129 => 46,  90 => 31,  83 => 28,  184 => 100,  167 => 94,  145 => 86,  118 => 73,  174 => 48,  146 => 66,  134 => 36,  34 => 3,  263 => 132,  257 => 130,  249 => 127,  236 => 122,  231 => 121,  223 => 118,  216 => 114,  210 => 111,  188 => 97,  181 => 95,  165 => 89,  157 => 86,  114 => 70,  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 18,  65 => 18,  53 => 15,  97 => 33,  58 => 15,  52 => 12,  37 => 10,  150 => 67,  126 => 61,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 95,  140 => 55,  132 => 35,  128 => 33,  111 => 41,  107 => 52,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 125,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 61,  143 => 56,  135 => 77,  131 => 75,  119 => 71,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 7,  38 => 4,  94 => 33,  89 => 31,  85 => 20,  79 => 26,  75 => 24,  68 => 21,  56 => 10,  50 => 8,  29 => 2,  87 => 46,  72 => 17,  55 => 15,  21 => 2,  26 => 2,  98 => 35,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 3,  40 => 5,  44 => 18,  35 => 2,  31 => 3,  43 => 12,  41 => 6,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 47,  166 => 46,  163 => 62,  158 => 43,  156 => 91,  151 => 88,  142 => 85,  138 => 64,  136 => 56,  123 => 60,  121 => 46,  117 => 43,  115 => 55,  105 => 39,  101 => 26,  91 => 44,  69 => 19,  66 => 15,  62 => 18,  49 => 12,  24 => 1,  32 => 8,  25 => 3,  22 => 2,  19 => 31,  209 => 82,  203 => 78,  199 => 67,  193 => 99,  189 => 71,  187 => 84,  182 => 50,  176 => 64,  173 => 92,  168 => 72,  164 => 45,  162 => 59,  154 => 68,  149 => 83,  147 => 40,  144 => 39,  141 => 80,  133 => 55,  130 => 62,  125 => 73,  122 => 59,  116 => 32,  112 => 42,  109 => 40,  106 => 33,  103 => 44,  99 => 60,  95 => 25,  92 => 24,  86 => 29,  82 => 26,  80 => 22,  73 => 22,  64 => 12,  60 => 11,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 6,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
