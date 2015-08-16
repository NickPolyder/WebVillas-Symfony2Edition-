<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_e5b4c1058ce3db4d4d8da5832a26897714fee82e71271707538572d25774c776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        // line 21
        echo "
";
    }

    // line 1
    public function block_captcha_widget($context, array $blocks = array())
    {
        // line 2
        if ((isset($context["is_human"]) ? $context["is_human"] : null)) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img id=\"";
            echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_code"]) ? $context["captcha_code"] : null), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_width"]) ? $context["captcha_width"] : null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_height"]) ? $context["captcha_height"] : null), "html", null, true);
            echo "\" />
    ";
            // line 7
            if ((isset($context["reload"]) ? $context["reload"] : null)) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : null), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : null), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["captcha_code"]) ? $context["captcha_code"] : null), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["image_id"]) ? $context["image_id"] : null), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Renew", array(), "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    <br />
    ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "GregwarCaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  200 => 55,  197 => 54,  190 => 52,  161 => 44,  139 => 38,  137 => 37,  81 => 19,  129 => 46,  90 => 31,  83 => 28,  184 => 100,  167 => 94,  145 => 86,  118 => 73,  174 => 48,  146 => 66,  134 => 36,  34 => 3,  263 => 132,  257 => 130,  249 => 127,  236 => 122,  231 => 121,  223 => 118,  216 => 114,  210 => 111,  188 => 97,  181 => 95,  165 => 89,  157 => 86,  114 => 70,  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 18,  65 => 18,  53 => 15,  97 => 33,  58 => 10,  52 => 12,  37 => 10,  150 => 67,  126 => 61,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 95,  140 => 55,  132 => 35,  128 => 33,  111 => 41,  107 => 52,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 125,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 61,  143 => 56,  135 => 77,  131 => 75,  119 => 71,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 7,  38 => 6,  94 => 33,  89 => 31,  85 => 20,  79 => 26,  75 => 16,  68 => 14,  56 => 10,  50 => 8,  29 => 2,  87 => 46,  72 => 17,  55 => 15,  21 => 2,  26 => 2,  98 => 35,  93 => 28,  88 => 24,  78 => 17,  46 => 9,  27 => 1,  40 => 5,  44 => 18,  35 => 2,  31 => 3,  43 => 12,  41 => 6,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 47,  166 => 46,  163 => 62,  158 => 43,  156 => 91,  151 => 88,  142 => 85,  138 => 64,  136 => 56,  123 => 60,  121 => 46,  117 => 43,  115 => 55,  105 => 39,  101 => 26,  91 => 44,  69 => 19,  66 => 15,  62 => 11,  49 => 7,  24 => 1,  32 => 3,  25 => 3,  22 => 21,  19 => 31,  209 => 82,  203 => 78,  199 => 67,  193 => 99,  189 => 71,  187 => 84,  182 => 50,  176 => 64,  173 => 92,  168 => 72,  164 => 45,  162 => 59,  154 => 68,  149 => 83,  147 => 40,  144 => 39,  141 => 80,  133 => 55,  130 => 62,  125 => 73,  122 => 59,  116 => 32,  112 => 42,  109 => 40,  106 => 33,  103 => 44,  99 => 60,  95 => 25,  92 => 24,  86 => 29,  82 => 26,  80 => 22,  73 => 22,  64 => 12,  60 => 11,  57 => 11,  54 => 9,  51 => 8,  48 => 10,  45 => 8,  42 => 6,  39 => 5,  36 => 5,  33 => 4,  30 => 2,);
    }
}
