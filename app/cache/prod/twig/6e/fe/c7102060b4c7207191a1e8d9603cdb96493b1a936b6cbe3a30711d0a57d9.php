<?php

/* WebVLWebVillasBundle:Villas:Villas.html.twig */
class __TwigTemplate_6efec7102060b4c7207191a1e8d9603cdb96493b1a936b6cbe3a30711d0a57d9 extends Twig_Template
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
            <title>WebVillas - Villa's</title>
           <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/villas.css"), "html", null, true);
        echo "\" /> 
           
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/js/jquery.js"), "html", null, true);
        echo "\">
</script> 
         <script>
    
           \$(document).ready(function() {

      //get the url for the form
      
      var url=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("_villataker");
        echo "\";
   
      //start send the post request
       \$.post(url,function(data){
           //the response is in the data variable
   
            if(data != \"\" ){  
             \$('#output').html(data);
               
            }
          
           else{
              //if we got to this point we know that the controller
              //did not return a json_encoded array. We can assume that           
              //an unexpected PHP error occured
              alert(\"An unexpeded error occured.\");

              //if you want to print the error:
              
           }
       //we dont what the browser to submit the form
      return false;
   });


});

function click_change(start,end)
{
    

     var url=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_villataker", array("start" => "pl_start", "end" => "pl_end")), "html", null, true);
        echo "\";
   url = url.replace(\"pl_start\",start);
   url= url.replace(\"pl_end\",end);
      //start send the post request
       \$.post(url,function(data){
           //the response is in the data variable
   
            if(data != \"\" ){  
             \$('#output').html(data);
               
            }
          
           else{
              //if we got to this point we know that the controller
              //did not return a json_encoded array. We can assume that           
              //an unexpected PHP error occured
              alert(\"An unexpeded error occured.\");

              //if you want to print the error:
              
           }
       //we dont what the browser to submit the form
      return false;
   });
}
</script>
            ";
    }

    // line 73
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
         <br/>
        <h1>Villa's</h1>
           <br/>
           
        ";
        // line 79
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo " 
       ";
            // line 80
            if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Success"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Success"), "method"), (-1))) : ((-1))) != (-1)) && preg_match("{^[!+ A-Za-z0-9]+\$}", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "Success"), "method")))) {
                // line 81
                echo "       <div class=\"success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "Success"), "method"), "html", null, true);
                echo "</div>
              <br/>
                     <br/>
       ";
            }
            // line 85
            echo "         ";
            if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Errors"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Errors"), "method"), (-1))) : ((-1))) != (-1)) && preg_match("{^[!+ A-Za-z0-9]+\$}", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "Errors"), "method")))) {
                // line 86
                echo "       <div class=\"errorrs\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "Errors"), "method"), "html", null, true);
                echo "</div>
       ";
            }
            // line 88
            echo "     
        <div id=\"bartool\">
            <ul>
                 ";
            // line 91
            if ((!$this->env->getExtension('security')->isGranted("ROLE_OWNER"))) {
                // line 92
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("_AddVilla");
                echo "\"><li>Add</li></a> 
                ";
            }
            // line 93
            echo " 
                ";
            // line 94
            if (($this->env->getExtension('security')->isGranted("ROLE_OWNER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 95
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("_EditVilla");
                echo "\"><li>Edit</li></a>
                <a href=\"";
                // line 96
                echo $this->env->getExtension('routing')->getPath("_DeleteVilla");
                echo "\"><li>Delete</li></a>
                ";
            }
            // line 98
            echo "            </ul>
        </div>
                ";
        }
        // line 100
        echo " 
                <br />
                
                <div id=\"output\"></div>
                 <br />
        
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Villas:Villas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 100,  167 => 94,  145 => 86,  118 => 73,  174 => 96,  146 => 66,  134 => 81,  34 => 3,  263 => 132,  257 => 130,  249 => 127,  236 => 122,  231 => 121,  223 => 118,  216 => 114,  210 => 111,  188 => 97,  181 => 95,  165 => 89,  157 => 86,  114 => 70,  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 22,  65 => 18,  53 => 15,  97 => 33,  58 => 15,  52 => 12,  37 => 5,  150 => 67,  126 => 61,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 95,  140 => 55,  132 => 80,  128 => 79,  111 => 54,  107 => 52,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 125,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 61,  143 => 56,  135 => 77,  131 => 75,  119 => 71,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 4,  94 => 28,  89 => 31,  85 => 25,  79 => 34,  75 => 17,  68 => 19,  56 => 16,  50 => 11,  29 => 2,  87 => 46,  72 => 20,  55 => 13,  21 => 1,  26 => 2,  98 => 47,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 3,  40 => 8,  44 => 18,  35 => 5,  31 => 3,  43 => 7,  41 => 6,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 70,  163 => 62,  158 => 92,  156 => 91,  151 => 88,  142 => 85,  138 => 64,  136 => 56,  123 => 60,  121 => 46,  117 => 44,  115 => 55,  105 => 51,  101 => 33,  91 => 44,  69 => 19,  66 => 15,  62 => 17,  49 => 12,  24 => 2,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 99,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 72,  164 => 93,  162 => 59,  154 => 68,  149 => 83,  147 => 58,  144 => 49,  141 => 80,  133 => 55,  130 => 62,  125 => 73,  122 => 59,  116 => 28,  112 => 42,  109 => 36,  106 => 33,  103 => 44,  99 => 60,  95 => 42,  92 => 25,  86 => 28,  82 => 26,  80 => 22,  73 => 22,  64 => 18,  60 => 17,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
