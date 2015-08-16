<?php

/* WebVLWebVillasBundle::villastemplate.html.twig */
class __TwigTemplate_24ef43c2322c3668ab7a7b0ec61e5893d7b26eb88726b45516276a2c65007105 extends Twig_Template
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
        // line 92
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
            $context['_seq'] = twig_ensure_traversable((isset($context["Villas"]) ? $context["Villas"] : $this->getContext($context, "Villas")));
            foreach ($context['_seq'] as $context["_key"] => $context["villa"]) {
                // line 7
                echo "              ";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2) == 0)) {
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ShowVilla", array("id" => $this->getAttribute((isset($context["villa"]) ? $context["villa"] : $this->getContext($context, "villa")), "idVillas"))), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ShowVilla", array("id" => $this->getAttribute((isset($context["villa"]) ? $context["villa"] : $this->getContext($context, "villa")), "idVillas"))), "html", null, true);
                    echo "\">Full View</a>
                        </td></tr>
                
                ";
                }
                // line 24
                echo "                ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
    public function getState($_Query = null, $_selected = null, $_way = null)
    {
        $context = $this->env->mergeGlobals(array(
            "Query" => $_Query,
            "selected" => $_selected,
            "way" => $_way,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "      ";
            if ((((array_key_exists("way", $context)) ? (_twig_default_filter((isset($context["way"]) ? $context["way"] : $this->getContext($context, "way")), (-1))) : ((-1))) == (-1))) {
                // line 34
                echo "    <tr> <td>State</td><td>
             <select id=\"State\" name=\"_State\" >
                 ";
                // line 36
                if ((((array_key_exists("selected", $context)) ? (_twig_default_filter((isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), (-1))) : ((-1))) == (-1))) {
                    // line 37
                    echo "           <option value=\"-1\" selected=\"selected\"   >-----------State-----------</option>
           ";
                    // line 38
                    if ((((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")), (-1))) : ((-1))) != (-1))) {
                        // line 39
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")));
                        foreach ($context['_seq'] as $context["_key"] => $context["states"]) {
                            // line 40
                            echo "              
 <option value=\"";
                            // line 41
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "id"), "html", null, true);
                            echo "\"   >";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                            echo "</option>
      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['states'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 44
                    echo "                 ";
                } else {
                    // line 45
                    echo "                      <option value=\"-1\">-----------State-----------</option>
           ";
                    // line 46
                    if ((((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")), (-1))) : ((-1))) != (-1))) {
                        // line 47
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")));
                        foreach ($context['_seq'] as $context["_key"] => $context["states"]) {
                            // line 48
                            echo "                ";
                            if ((((array_key_exists("selected", $context)) ? (_twig_default_filter((isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), (-1))) : ((-1))) == $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "id"))) {
                                // line 49
                                echo " <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "id"), "html", null, true);
                                echo "\" selected=\"selected\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                                echo "</option>
 ";
                            } else {
                                // line 51
                                echo "      <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "id"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                                echo "</option>
 ";
                            }
                            // line 53
                            echo "      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['states'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 55
                    echo "                 ";
                }
                // line 56
                echo "
             </select><span class=\"error\" id=\"stateerr\"></span>
        </td>
       
    </tr>
    ";
            } else {
                // line 62
                echo "        
     <tr> <td>State</td><td>
             <select id=\"State\" name=\"_State\" onchange=\"return StateSearch()\">
                 ";
                // line 65
                if ((((array_key_exists("selected", $context)) ? (_twig_default_filter((isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), (-1))) : ((-1))) == (-1))) {
                    // line 66
                    echo "           <option value=\"-1\" selected=\"selected\"   >-----------State-----------</option>
           ";
                    // line 67
                    if ((((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")), (-1))) : ((-1))) != (-1))) {
                        // line 68
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")));
                        foreach ($context['_seq'] as $context["_key"] => $context["states"]) {
                            // line 69
                            echo "              
 <option value=\"";
                            // line 70
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                            echo "\"   >";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                            echo "</option>
      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['states'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 73
                    echo "                 ";
                } else {
                    // line 74
                    echo "                      <option value=\"-1\">-----------State-----------</option>
           ";
                    // line 75
                    if ((((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")), (-1))) : ((-1))) != (-1))) {
                        // line 76
                        echo "          ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")));
                        foreach ($context['_seq'] as $context["_key"] => $context["states"]) {
                            // line 77
                            echo "                ";
                            if ((((array_key_exists("selected", $context)) ? (_twig_default_filter((isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), (-1))) : ((-1))) == $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "id"))) {
                                // line 78
                                echo " <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                                echo "\" selected=\"selected\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                                echo "</option>
 ";
                            } else {
                                // line 80
                                echo "      <option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")), "state"), "html", null, true);
                                echo "</option>
 ";
                            }
                            // line 82
                            echo "      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['states'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 84
                    echo "                 ";
                }
                // line 85
                echo "
             </select><span class=\"error\" id=\"stateerr\"></span>
        </td>
       
    </tr>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getphotos($_photo = null, $_edit = null)
    {
        $context = $this->env->mergeGlobals(array(
            "photo" => $_photo,
            "edit" => $_edit,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "      <h2 style='text-align: center;'>Photo's</h2>
    <div id='Photos'>
      
   
         ";
            // line 98
            if ((((array_key_exists("photo", $context)) ? (_twig_default_filter((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), (-1))) : ((-1))) != (-1))) {
                // line 99
                echo "       
             ";
                // line 100
                if ((((array_key_exists("edit", $context)) ? (_twig_default_filter((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), (-1))) : ((-1))) == (-1))) {
                    // line 101
                    echo "       
        ";
                    // line 102
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")));
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 103
                        echo "                  <div class='image'>
                                <a href='";
                        // line 104
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/webvlwebvillas/images/UserImages/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "filename"))), "html", null, true);
                        echo "' target='_blank'>
      <img src=\"";
                        // line 105
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/webvlwebvillas/images/UserImages/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "filename"))), "html", null, true);
                        echo "\" alt='";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "description"), "html", null, true);
                        echo "' width=\"40%\" height=\"auto\"/>
                                </a>
                            </div><div class='description'>
                                ";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "description"), "html", null, true);
                        echo "
                            </div>
       ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "       ";
                } else {
                    // line 112
                    echo "           <table>
               ";
                    // line 113
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")));
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 114
                        echo "                <tr><td>   <div class='image'>
                                <a href='";
                        // line 115
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/webvlwebvillas/images/UserImages/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "filename"))), "html", null, true);
                        echo "' target='_blank'>
      <img src=\"";
                        // line 116
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/webvlwebvillas/images/UserImages/" . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "filename"))), "html", null, true);
                        echo "\" alt='";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "description"), "html", null, true);
                        echo "' width=\"40%\" height=\"auto\"/>
                                </a>
                            </div><div class='description'>
                                ";
                        // line 119
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "description"), "html", null, true);
                        echo "
                            </div></td>
                            <td>";
                        // line 121
                        if (((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")) == 2)) {
                            echo " <a href='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_DelPhotoCheck", array("id" => $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id"))), "html", null, true);
                            echo "' onclick=\"return confirm('Are you sure you Want to Delete this  Record?!')\">Delete</a>";
                        }
                        echo "<br/>
                                ";
                        // line 122
                        if (((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")) == 1)) {
                            echo " <a href='";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_EditPhoto", array("id" => $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id"))), "html", null, true);
                            echo "'>Edit</a>";
                        }
                        echo "</td><td style='width:2em;'></td></tr>
       ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "              
           </table>
           
           ";
                }
                // line 128
                echo "        ";
            } else {
                // line 129
                echo "        No Photo's
        ";
            }
            // line 131
            echo "   
    </div>
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
        return array (  424 => 131,  420 => 129,  417 => 128,  411 => 124,  399 => 122,  391 => 121,  386 => 119,  378 => 116,  374 => 115,  371 => 114,  367 => 113,  364 => 112,  361 => 111,  352 => 108,  344 => 105,  340 => 104,  337 => 103,  333 => 102,  330 => 101,  328 => 100,  325 => 99,  323 => 98,  317 => 94,  305 => 93,  288 => 85,  285 => 84,  278 => 82,  270 => 80,  262 => 78,  259 => 77,  254 => 76,  252 => 75,  249 => 74,  246 => 73,  235 => 70,  232 => 69,  227 => 68,  225 => 67,  222 => 66,  220 => 65,  215 => 62,  207 => 56,  189 => 51,  178 => 48,  173 => 47,  171 => 46,  168 => 45,  165 => 44,  154 => 41,  151 => 40,  146 => 39,  144 => 38,  141 => 37,  139 => 36,  135 => 34,  132 => 33,  119 => 32,  104 => 26,  98 => 25,  95 => 24,  88 => 20,  84 => 19,  80 => 18,  75 => 17,  63 => 11,  59 => 10,  53 => 8,  45 => 6,  43 => 5,  38 => 2,  27 => 1,  22 => 92,  19 => 31,  226 => 115,  221 => 113,  216 => 111,  212 => 110,  208 => 109,  204 => 55,  199 => 107,  197 => 53,  194 => 105,  188 => 104,  186 => 103,  181 => 49,  175 => 98,  172 => 97,  164 => 93,  162 => 92,  158 => 91,  148 => 85,  117 => 58,  83 => 27,  72 => 18,  67 => 12,  64 => 15,  60 => 14,  57 => 13,  50 => 7,  47 => 9,  41 => 7,  39 => 6,  37 => 5,  31 => 3,  26 => 2,);
    }
}
