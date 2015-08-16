<?php

/* WebVLWebVillasBundle:UserF:LogIn.html.twig */
class __TwigTemplate_fca32e199e989b6d0bbc2f38134e051f8c4509c1ea6ccc2ce0ccbddecd878c0c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Head($context, array $blocks = array())
    {
        echo "    
            <title>WebVillas - Log in </title>
        
 <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/Forms.css"), "html", null, true);
        echo "\" /> 
            ";
    }

    // line 7
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
        <br/>
        <h1>Log - In</h1>
          <br/>
          ";
        // line 12
        if ((((array_key_exists("Product", $context)) ? (_twig_default_filter((isset($context["Product"]) ? $context["Product"] : null), "")) : ("")) != "")) {
            // line 13
            echo "         
          ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["Product"]) ? $context["Product"] : null), "html", null, true);
            echo "
         
          ";
        }
        // line 17
        echo "          ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 18
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 20
        echo "       <form id=\"LogIn\" class=\"CreateForms\" action=\"";
        echo $this->env->getExtension('routing')->getPath("_login_check");
        echo "\" method=\"POST\" name=\"LogIn\" onsubmit=\"return valid_login()\">
            <table class=\"TableForms\">
                        <tr>
                            <td>Username:</td><td><input type=\"text\" placeholder=\"Username\" pattern=\"^[a-zA-Z0-9_-]+\$\" id=\"username\" name=\"_username\"  value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" size=\"25\" maxlength=\"45\"  /> <span id=\"Nameerr\" class=\"error\"></span></td>
                        </tr> 
                        <tr>
                            <td>Password:</td><td><input type=\"password\" placeholder=\"Password\" pattern=\"^[a-zA-Z0-9_@!]+\$\" id=\"password\" name=\"_password\"  value=\"\" size=\"25\" maxlength=\"45\"  /> <span class=\"error\" id=\"Passerr\"></span></td>
                        </tr>
                        <tr>
                            <td><a href=\"ResetPassword.php\" target=\"_self\">Forgot Password?</a></td>
                        </tr>
                        <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                        <tr><td class=\"buttons\"></td><td class=\"buttons\"><input id=\"submit\" name=\"submit\" type=\"submit\" value=\"Submit\" />
                      <input id=\"reset\" name=\"reset\" type=\"Reset\" value=\"Reset\" /></td></tr>
                    </table> 
        </form>
  <br/>
    <br/>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:UserF:LogIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  53 => 13,  97 => 33,  58 => 14,  52 => 12,  37 => 6,  150 => 51,  126 => 60,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 31,  85 => 25,  79 => 34,  75 => 17,  68 => 14,  56 => 14,  50 => 11,  29 => 2,  87 => 36,  72 => 16,  55 => 23,  21 => 1,  26 => 4,  98 => 31,  93 => 28,  88 => 6,  78 => 23,  46 => 9,  27 => 4,  40 => 8,  44 => 13,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 54,  105 => 36,  101 => 32,  91 => 30,  69 => 31,  66 => 15,  62 => 17,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 13,  133 => 55,  130 => 41,  125 => 44,  122 => 59,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 44,  99 => 43,  95 => 42,  92 => 21,  86 => 28,  82 => 26,  80 => 19,  73 => 22,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
