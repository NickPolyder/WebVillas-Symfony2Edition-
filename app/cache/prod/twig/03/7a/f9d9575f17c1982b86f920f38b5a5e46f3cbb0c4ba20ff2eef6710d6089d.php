<?php

/* WebVLWebVillasBundle::layout.html.twig */
class __TwigTemplate_037af9d9575f17c1982b86f920f38b5a5e46f3cbb0c4ba20ff2eef6710d6089d extends Twig_Template
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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/js/funcs.js"), "html", null, true);
        echo "\">
</script> 
      
     
 <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/layoutcss.css"), "html", null, true);
        echo "\" /> 

        ";
        // line 13
        $this->displayBlock('Head', $context, $blocks);
        // line 16
        echo " 
    </head>
    
    <body>
        <div id=\"Container\">
            <div id=\"Header\">
  
                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/images/header.png"), "html", null, true);
        echo "\" style=\"width: 100%;\" /></a>
 
                <div id=\"statusbar\">
                    <span id=\"Searchspan\"><form id=\"SearchForm\" name=\"SearchForm\" method=\"GET\">
                            <input type=\"text\" id=\"SearchBox\" name=\"SearchBox\" value=\"\" title=\"Search Villas!!\" placeholder=\"Search Villas!!!\" /><input type=\"submit\" id=\"subSearchmit\" name=\"subSearchmit\" Value=\"Search\" />
                        </form></span>
                     <span id=\"loginRegister\">
                         ";
        // line 30
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username"), null)) : (null)) != null)) {
            // line 31
            echo "                             <ul><li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo "</li>
                                    <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_LogOut");
            echo "\"><li>Log Out</li></a></ul>
                    ";
        } else {
            // line 34
            echo "                       <ul><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_log_in");
            echo "\"><li>Login</li></a> <span style=\"font-size: xx-large;\">/</span> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("_Register");
            echo "\"><li>Register</li></a></ul>
                    ";
        }
        // line 36
        echo "                    </span>
                </div>
            </div>
                <div id=\"CenterContain\">
            <div id=\"Menu\">
                <ul> 
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\"><li>Home</li></a>
                   <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("_Contact");
        echo "\"><li>Contact</li></a>
                 <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("_Villas");
        echo "\"><li>Villas</li></a>
                   <a href=\"#WebServices\"><li>WebService</li></a>  
                    
                </ul>
                <br/>
            </div>
            <div id=\"Main\">
        ";
        // line 51
        $this->displayBlock('MainCont', $context, $blocks);
        // line 54
        echo "            </div>
                </div>
           
            <div id=\"Footer\">
                <br/>
                <span style=\"margin:0 auto; text-align: center; font-size: larger;\"> Copyrights ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Νικόλαος Πολυδερόπουλος </span>
                <span style=\"text-align: right; float:right; margin: 0 0.5em 0; font-size: large;\">Server Date: ";
        // line 60
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

    // line 13
    public function block_Head($context, array $blocks = array())
    {
        echo "    
            <title>WebVillas - Home</title>
            
            ";
    }

    // line 51
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
        return array (  150 => 51,  126 => 60,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 34,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 2,  87 => 36,  72 => 16,  55 => 23,  21 => 1,  26 => 4,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 16,  27 => 4,  40 => 8,  44 => 13,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 54,  105 => 40,  101 => 32,  91 => 27,  69 => 31,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 7,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 13,  133 => 55,  130 => 41,  125 => 44,  122 => 59,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 44,  99 => 43,  95 => 42,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 7,);
    }
}
