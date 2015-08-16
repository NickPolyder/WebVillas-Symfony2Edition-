<?php

/* WebVLWebVillasBundle:Villas:VillaTaker.html.twig */
class __TwigTemplate_1926d335c1c725c56b6e52489209b448299a528b944b41fa3035180f02de2bd3 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "   
    ";
            // line 9
            if ((((array_key_exists("curpage", $context)) ? (_twig_default_filter((isset($context["curpage"]) ? $context["curpage"] : $this->getContext($context, "curpage")), 1)) : (1)) == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 10
                echo "<a>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a>
";
            } else {
                // line 12
                echo "    <a onclick='click_change(";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ",document.getElementById(\"Records\").value)'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<a onclick='click_change(";
        echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "html", null, true);
        echo ",document.getElementById(\"Records\").value)'> Last </a>

</div><label for=\"Records\">Records/Page</label><select id=\"Records\" >
    ";
        // line 18
        if ((((array_key_exists("recs", $context)) ? (_twig_default_filter((isset($context["recs"]) ? $context["recs"] : $this->getContext($context, "recs")), 5)) : (5)) == 5)) {
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
        if ((((array_key_exists("recs", $context)) ? (_twig_default_filter((isset($context["recs"]) ? $context["recs"] : $this->getContext($context, "recs")), 5)) : (5)) == 10)) {
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
        if ((((array_key_exists("recs", $context)) ? (_twig_default_filter((isset($context["recs"]) ? $context["recs"] : $this->getContext($context, "recs")), 5)) : (5)) == 15)) {
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
        echo $context["vi"]->getvillas((isset($context["Villas"]) ? $context["Villas"] : $this->getContext($context, "Villas")));
        echo "

<div class=\"pagination\">
    <a onclick='click_change(1,document.getElementById(\"Records\").value)'> First </a>
";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            if ((((array_key_exists("curpage", $context)) ? (_twig_default_filter((isset($context["curpage"]) ? $context["curpage"] : $this->getContext($context, "curpage")), 1)) : (1)) == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 41
                echo "<a>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a>
";
            } else {
                // line 43
                echo "    <a onclick='click_change(";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ",document.getElementById(\"Records\").value)'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "<a onclick='click_change(";
        echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), "html", null, true);
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
        return array (  129 => 46,  117 => 43,  111 => 41,  109 => 40,  105 => 39,  98 => 35,  94 => 33,  90 => 31,  86 => 29,  83 => 28,  79 => 26,  75 => 24,  72 => 23,  68 => 21,  64 => 19,  62 => 18,  55 => 15,  43 => 12,  37 => 10,  35 => 9,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
