<?php

/* WebVLWebVillasBundle:Villas:Villas.html.twig */
class __TwigTemplate_82165f1cd693c35c899e94c7fd19a6075c151d8f6ac297726d162abd56b79c78 extends Twig_Template
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
           ";
        // line 5
        if (preg_match("{^[0-9]\$}", (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")))) {
            // line 6
            if (((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")) == 0)) {
                // line 7
                echo "   <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/villas.css"), "html", null, true);
                echo "\" /> 
   ";
            } else {
                // line 9
                echo "       ";
                if (((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")) == 1)) {
                    // line 10
                    echo "            <link rel=\"stylesheet\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/villas2.css"), "html", null, true);
                    echo "\" /> 
          
       ";
                }
                // line 13
                echo "   ";
            }
            // line 14
            echo "   
";
        } else {
            // line 15
            echo " 
  <link rel=\"stylesheet\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/villas.css"), "html", null, true);
            echo "\" /> 
";
        }
        // line 18
        echo "           


         <script>
    
           \$(document).ready(function() {

      //get the url for the form
      
      var url=\"";
        // line 27
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
        // line 58
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

    // line 85
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
         <br/> <br/>
        <h1>Villa's</h1>
           <br/> <br/>
           
        ";
        // line 91
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo " 
       ";
            // line 92
            if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Success"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Success"), "method"), (-1))) : ((-1))) != (-1)) && preg_match("{^['\"!+:\\/ A-Za-z0-9]+\$}", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "Success"), "method")))) {
                // line 93
                echo "       <div class=\"success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "Success"), "method"), "html", null, true);
                echo "</div>
              <br/>
                     <br/>
       ";
            }
            // line 97
            echo "         ";
            if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Errors"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "Errors"), "method"), (-1))) : ((-1))) != (-1)) && preg_match("{^['\":!+\\/ A-Za-z0-9]+\$}", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "Errors"), "method")))) {
                // line 98
                echo "       <div class=\"errorrs\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "Errors"), "method"), "html", null, true);
                echo "</div>
       ";
            }
            // line 100
            echo "     
        <div id=\"bartool\">
            <ul>
                 ";
            // line 103
            if ((!$this->env->getExtension('security')->isGranted("ROLE_OWNER"))) {
                // line 104
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("_AddVilla");
                echo "\"><li>Add</li></a> 
                ";
            }
            // line 105
            echo " 
                ";
            // line 106
            if (($this->env->getExtension('security')->isGranted("ROLE_OWNER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 107
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("_AddPhoto");
                echo "\"><li>Add Photo</li></a>
                <a href=\"";
                // line 108
                echo $this->env->getExtension('routing')->getPath("_EditPhoto");
                echo "\"><li>Edit Photo</li></a>
                 <a href=\"";
                // line 109
                echo $this->env->getExtension('routing')->getPath("_DeletePhoto");
                echo "\"><li>Delete Photo</li></a>
                <a href=\"";
                // line 110
                echo $this->env->getExtension('routing')->getPath("_EditVilla");
                echo "\"><li>Edit</li></a>
                <a href=\"";
                // line 111
                echo $this->env->getExtension('routing')->getPath("_DeleteVilla");
                echo "\"><li>Delete</li></a>
                ";
            }
            // line 113
            echo "            </ul>
        </div>
                ";
        }
        // line 115
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
        return array (  226 => 115,  221 => 113,  216 => 111,  212 => 110,  208 => 109,  204 => 108,  199 => 107,  197 => 106,  194 => 105,  188 => 104,  186 => 103,  181 => 100,  175 => 98,  172 => 97,  164 => 93,  162 => 92,  158 => 91,  148 => 85,  117 => 58,  83 => 27,  72 => 18,  67 => 16,  64 => 15,  60 => 14,  57 => 13,  50 => 10,  47 => 9,  41 => 7,  39 => 6,  37 => 5,  31 => 3,  26 => 2,);
    }
}
