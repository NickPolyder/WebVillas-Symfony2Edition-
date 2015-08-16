<?php

/* WebVLWebVillasBundle::layout.html.twig */
class __TwigTemplate_70332ebcf391457b27ccb9c3b8656433c861af25dbfcadeec4af16a6af63c9df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'MainCont' => array($this, 'block_MainCont'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
         <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/js/funcs.js"), "html", null, true);
        echo "\">
</script>

           ";
        // line 10
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "theme", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "theme"), (-1))) : ((-1))) != (-1))) {
            // line 11
            echo "               ";
            $context["theme"] = (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "theme", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "theme"), 0)) : (0));
            // line 12
            echo "             
            ";
        } else {
            // line 14
            echo "            ";
            if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "cookies", array(), "any", false, true), "get", array(0 => "theme"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "cookies", array(), "any", false, true), "get", array(0 => "theme"), "method"), null)) : (null)) != null)) {
                // line 15
                $context["theme"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "cookies"), "get", array(0 => "theme"), "method");
            } else {
                // line 17
                $context["theme"] = 0;
                echo "  
           ";
            }
            // line 19
            echo "           ";
        }
        // line 20
        if (preg_match("{^[0-9]\$}", (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")))) {
            // line 21
            if (((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")) == 0)) {
                // line 22
                echo "   <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/layoutcss.css"), "html", null, true);
                echo "\" />
   ";
            } else {
                // line 24
                echo "       ";
                if (((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")) == 1)) {
                    // line 25
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/layout2.css"), "html", null, true);
                    echo "\" />
          
       ";
                }
                // line 28
                echo "   ";
            }
            // line 29
            echo "   
";
        } else {
            // line 30
            echo " 
     <link rel=\"stylesheet\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/layoutcss.css"), "html", null, true);
            echo "\" />
";
        }
        // line 33
        echo "        ";
        $this->displayBlock('Head', $context, $blocks);
        // line 36
        echo " 
    </head>
    
    <body>
        <div id=\"Container\">
            <div id=\"Header\">
  
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/images/header.png"), "html", null, true);
        echo "\" style=\"width: 100%;\" /></a>

                <div id=\"statusbar\">
                    <span id=\"Searchspan\"><form id=\"SearchForm\" action=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("_Search");
        echo "\" name=\"SearchForm\" method=\"GET\">
                            <input type=\"text\" id=\"SearchBox\" name=\"SearchBox\" value=\"\" title=\"Search Villas!!\" placeholder=\"Search Villas!!!\" /><input type=\"submit\" id=\"subSearchmit\" name=\"subSearchmit\" Value=\"Search\" />
                        </form></span>
                     <span id=\"loginRegister\">
                         ";
        // line 50
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username"), null)) : (null)) != null)) {
            // line 51
            echo "                             <ul><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_Account");
            echo "\"><li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</li></a>
                                    <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("_LogOut");
            echo "\"><li>Log Out</li></a></ul>
                    ";
        } else {
            // line 54
            echo "                       <ul><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_log_in");
            echo "\"><li>Login</li></a> <span style=\"font-size: xx-large;\">/</span> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("_Register");
            echo "\"><li>Register</li></a></ul>
                    ";
        }
        // line 56
        echo "                    </span>
                </div>
            </div>
                <div id=\"CenterContain\">
                  
            <div id=\"Menu\">
                <ul> 
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\"><li>Home</li></a>
                   <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("_Contact");
        echo "\"><li>Contact</li></a>
                 <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("_Villas");
        echo "\"><li>Villas</li></a>
                   <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("_webService");
        echo "\"><li>WebService</li></a>  
                    
                </ul>
                <br/>
            </div>
            <div id=\"Main\">
        ";
        // line 72
        $this->displayBlock('MainCont', $context, $blocks);
        // line 75
        echo "            </div>
                </div>
           
            <div id=\"Footer\">
                <br/>
                <span><form id=\"Theme\" action=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("_theme");
        echo "\" method=\"post\">
                            <label for=\"SelectTheme\">Themes</label><select id = \"SelectTheme\" name=\"SelectTheme\">
                                ";
        // line 82
        if (((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")) == 0)) {
            // line 83
            echo "                                <option value=\"0\" selected=\"selected\"> Default</option>
                                <option value=\"1\"> Green </option>
                                ";
        } else {
            // line 86
            echo "                                     <option value=\"0\" > Default</option>
                                    <option value=\"1\" selected=\"selected\"> Green </option>
                                    ";
        }
        // line 89
        echo "                                
                            </select><button type=\"submit\" >Change It</button></form></span>
                                    <br/>
                <span style=\"margin:0 auto; text-align: center; font-size: larger;\"> Copyrights ";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Νικόλαος Πολυδερόπουλος </span>
                <span style=\"text-align: right; float:right; margin: 0 0.5em 0; font-size: large;\">Server Date: ";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d - D / M / Y"), "html", null, true);
        echo " - Time ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i:s", "Europe/Athens"), "html", null, true);
        echo "</span>
                
            <br/><br/>
            
            </div>
        </div>
    </body>
</html>
";
    }

    // line 33
    public function block_Head($context, array $blocks = array())
    {
        echo "    
            <title>WebVillas - Home</title>
            
            ";
    }

    // line 72
    public function block_MainCont($context, array $blocks = array())
    {
        echo "  
        <br/><br/><br/><br/>
        ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 72,  228 => 33,  213 => 93,  204 => 89,  199 => 86,  194 => 83,  192 => 82,  187 => 80,  180 => 75,  178 => 72,  169 => 66,  165 => 65,  161 => 64,  157 => 63,  148 => 56,  140 => 54,  135 => 52,  128 => 51,  126 => 50,  119 => 46,  111 => 43,  102 => 36,  99 => 33,  94 => 31,  91 => 30,  87 => 29,  84 => 28,  77 => 25,  74 => 24,  68 => 22,  66 => 21,  64 => 20,  61 => 19,  56 => 17,  53 => 15,  50 => 14,  46 => 12,  43 => 11,  41 => 10,  35 => 7,  31 => 6,  26 => 4,  21 => 1,  283 => 219,  267 => 206,  248 => 189,  243 => 186,  238 => 183,  236 => 182,  224 => 173,  216 => 168,  209 => 92,  159 => 119,  103 => 66,  47 => 13,  36 => 5,  29 => 2,);
    }
}
