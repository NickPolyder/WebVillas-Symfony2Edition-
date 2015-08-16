<?php

/* WebVLWebVillasBundle:Villas:VillaTaker.html.twig */
class __TwigTemplate_8a5c3fddd545bca225a1d346cd4f85941481a5ae1e2aef2095d77751808adca7 extends Twig_Template
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
        // line 1
        $context["vi"] = $this->env->loadTemplate("WebVLWebVillasBundle::villastemplate.html.twig");
        // line 2
        echo "<html>
<div class=\"pagination\">
 

<a onclick='click_change(1,document.getElementById(\"Records\").value)'> First </a>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "   
    ";
            // line 9
            if ((((array_key_exists("curpage", $context)) ? (_twig_default_filter((isset($context["curpage"]) ? $context["curpage"] : null), 1)) : (1)) == (isset($context["i"]) ? $context["i"] : null))) {
                // line 10
                echo "<a>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a>
";
            } else {
                // line 12
                echo "    <a onclick='click_change(";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo ",document.getElementById(\"Records\").value)'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<a onclick='click_change(";
        echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
        echo ",document.getElementById(\"Records\").value)'> Last </a>

</div><label for=\"Records\">Records/Page</label><select id=\"Records\" >
    ";
        // line 18
        if ((((array_key_exists("recs", $context)) ? (_twig_default_filter((isset($context["recs"]) ? $context["recs"] : null), 5)) : (5)) == 5)) {
            // line 19
            echo "    <option selected=\"selected\"  value=\"5\"  >5</option>
    ";
        } else {
            // line 21
            echo "         <option  value=\"5\" >5</option>
    ";
        }
        // line 23
        echo "    ";
        if ((((array_key_exists("recs", $context)) ? (_twig_default_filter((isset($context["recs"]) ? $context["recs"] : null), 5)) : (5)) == 10)) {
            // line 24
            echo "    <option selected=\"selected\"  value=\"10\" >10</option>
    ";
        } else {
            // line 26
            echo "         <option value=\"10\" >10</option>
    ";
        }
        // line 28
        echo "     ";
        if ((((array_key_exists("recs", $context)) ? (_twig_default_filter((isset($context["recs"]) ? $context["recs"] : null), 5)) : (5)) == 15)) {
            // line 29
            echo "    <option selected=\"selected\"  value=\"15\" >15</option>
    ";
        } else {
            // line 31
            echo "         <option value=\"15\" >15</option>
    ";
        }
        // line 33
        echo "</select><button onclick='click_change(1,document.getElementById(\"Records\").value)'>Change It</button>
    <br/>
";
        // line 35
        echo $context["vi"]->getvillas((isset($context["Villas"]) ? $context["Villas"] : null));
        echo "

<div class=\"pagination\">
    <a onclick='click_change(1,document.getElementById(\"Records\").value)'> First </a>
";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            if ((((array_key_exists("curpage", $context)) ? (_twig_default_filter((isset($context["curpage"]) ? $context["curpage"] : null), 1)) : (1)) == (isset($context["i"]) ? $context["i"] : null))) {
                // line 41
                echo "<a>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a>
";
            } else {
                // line 43
                echo "    <a onclick='click_change(";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo ",document.getElementById(\"Records\").value)'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "<a onclick='click_change(";
        echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
        echo ",document.getElementById(\"Records\").value)'> Last </a>
</div>

<br/>
";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Villas:VillaTaker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  90 => 31,  83 => 28,  184 => 100,  167 => 94,  145 => 86,  118 => 73,  174 => 96,  146 => 66,  134 => 81,  34 => 3,  263 => 132,  257 => 130,  249 => 127,  236 => 122,  231 => 121,  223 => 118,  216 => 114,  210 => 111,  188 => 97,  181 => 95,  165 => 89,  157 => 86,  114 => 70,  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 22,  65 => 18,  53 => 15,  97 => 33,  58 => 15,  52 => 12,  37 => 10,  150 => 67,  126 => 61,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 95,  140 => 55,  132 => 80,  128 => 79,  111 => 41,  107 => 52,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 125,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 61,  143 => 56,  135 => 77,  131 => 75,  119 => 71,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 4,  94 => 33,  89 => 31,  85 => 25,  79 => 26,  75 => 24,  68 => 21,  56 => 16,  50 => 11,  29 => 2,  87 => 46,  72 => 23,  55 => 15,  21 => 2,  26 => 2,  98 => 35,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 3,  40 => 8,  44 => 18,  35 => 9,  31 => 3,  43 => 12,  41 => 6,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 70,  163 => 62,  158 => 92,  156 => 91,  151 => 88,  142 => 85,  138 => 64,  136 => 56,  123 => 60,  121 => 46,  117 => 43,  115 => 55,  105 => 39,  101 => 33,  91 => 44,  69 => 19,  66 => 15,  62 => 18,  49 => 12,  24 => 2,  32 => 8,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 99,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 72,  164 => 93,  162 => 59,  154 => 68,  149 => 83,  147 => 58,  144 => 49,  141 => 80,  133 => 55,  130 => 62,  125 => 73,  122 => 59,  116 => 28,  112 => 42,  109 => 40,  106 => 33,  103 => 44,  99 => 60,  95 => 42,  92 => 25,  86 => 29,  82 => 26,  80 => 22,  73 => 22,  64 => 19,  60 => 17,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
