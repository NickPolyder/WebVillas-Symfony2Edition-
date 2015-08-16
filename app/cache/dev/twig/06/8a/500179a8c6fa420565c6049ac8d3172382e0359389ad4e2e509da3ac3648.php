<?php

/* WebVLWebVillasBundle:WSV:WebService.html.twig */
class __TwigTemplate_068a500179a8c6fa420565c6049ac8d3172382e0359389ad4e2e509da3ac3648 extends Twig_Template
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
            <title>WebVillas - Web Services </title>
             <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/Forms.css"), "html", null, true);
        echo "\" /> 
      
<script>
    function AddressSearch()
{
    var result = true;
    var illegalgrchars = /^[\\u0374-\\u03FF A-Za-z0-9\\.\\\"\\'\\!\\n\\t\\r\\<br\\/\\>]+\$/;
    var addr = document.getElementById('Address');
    addr.style.backgroundColor=\"\";
    addr.style.border = \"\";
    if(!illegalgrchars.test(addr.value))
    {
        result = false;
         addr.style.backgroundColor=\"yellow\";
    addr.style.border = \"thin solid red\";
    }
    if(result)
    {
    

     \$(document).ready(function() {
var Check = document.getElementById('AvEq');
 var url=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("_xmltry", array("Address" => "pl_start"));
        echo "\";
   url = url.replace(\"pl_start\",addr.value);
   \$(\"#output\").empty();
    if(Check.checked)
   {
   url+='/1';
   }else{
    url +='/0';
    }
  var frame = document.createElement(\"iframe\");
  frame.id= \"Serv\";
  frame.style = \"margin:4em; width:90%; height:25em;\";
  frame.src = url;
   
 \$(\"#output\").append(frame);
      //start send the post request
     
    
   });

    }
    return result;
}


  function StateSearch()
{
    var result = true;
  var illegalgrchars = /^[\\u0374-\\u03FF A-Za-z0-9\\.\\\"\\'\\!\\n\\t\\r\\<br\\/\\>]+\$/;
    var State = document.getElementById('State');
    State.style.backgroundColor=\"\";
    State.style.border = \"\";
    if(!illegalgrchars.test(State.value))
    {
        result = false;
         State.style.backgroundColor=\"yellow\";
    State.style.border = \"thin solid red\";
    }
    if(result)
    {
    

  \$(document).ready(function() {
var Check = document.getElementById('AvEq');
 var url1=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_xmltry", array("Address" => "''", "State" => "pl_st")), "html", null, true);
        echo "\";
   url1 = url1.replace(\"pl_st\",State.value);
   if(Check.checked)
   {
   url1+='/1';
   }else{
    url1 +='/0';
    }
        \$(\"#output\").empty();
  var frame = document.createElement(\"iframe\");
  frame.id= \"Serv\";
  frame.style = \"margin:4em; width:90%; height:25em;\";
  frame.src = url1;

 \$(\"#output\").append(frame);
      //start send the post request
     
    
});

    }
    return result;
}

function getWebService()
{
    var result = true;
    var addresschk = false;
    var StateChk = false;
    var illegalgrchars = /^[\\u0374-\\u03FF A-Za-z0-9\\.\\\"\\'\\!\\n\\t\\r\\<br\\/\\>]+\$/;
    var addr = document.getElementById('Address');
    addr.style.backgroundColor=\"\";
    addr.style.border = \"\";
    if(illegalgrchars.test(addr.value) || addr.value != \"\")
    {
        addresschk = true;
        
    }
    
      var State = document.getElementById('State');
    State.style.backgroundColor=\"\";
    State.style.border = \"\";
    if(illegalgrchars.test(State.value) || State.value != \"-1\")
    {
        StateChk = true;
    
    }
   
        result = addresschk || StateChk;
    
    
   if(addresschk && !StateChk)
   {

     \$(document).ready(function() {

 var url3=\"";
        // line 127
        echo $this->env->getExtension('routing')->getUrl("_xmltry", array("Address" => "pl_start"));
        echo "\";
   url3 = url3.replace(\"pl_start\",addr.value);
   \$(\"#output\").empty();
  var frame = document.createElement(\"iframe\");
  frame.id= \"Serv\";
  frame.style = \"margin:4em; width:90%; height:25em;\";
  frame.src = url3;
   var txtarea = document.getElementById('Stringexport');
   txtarea.innerHTML = frame.outerHTML;
 \$(\"#output\").append(frame);
      //start send the post request
     
    
   });

    }
    
     if(StateChk && !addresschk)
    {
    

  \$(document).ready(function() {
var Check = document.getElementById('AvEq');
 var url2=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_xmltry", array("Address" => "''", "State" => "pl_st")), "html", null, true);
        echo "\";
   url2 = url2.replace(\"pl_st\",State.value);
   if(Check.checked)
   {
   url2+='/1';
   }else{
    url2 +='/0';
    }
        \$(\"#output\").empty();
  var frame = document.createElement(\"iframe\");
  frame.id= \"Serv\";
  frame.style = \"margin:4em; width:90%; height:25em;\";
  frame.src = url2;
    var txtarea = document.getElementById('Stringexport');
   txtarea.innerHTML = frame.outerHTML;
 \$(\"#output\").append(frame);
      //start send the post request
     
    
});

    }
    
    if(StateChk && addresschk)
    {
    \$(document).ready(function() {
var Check = document.getElementById('AvEq');
 var url4=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_xmltry", array("Address" => "pl_ad", "State" => "pl_st")), "html", null, true);
        echo "\";
   url4 = url4.replace(\"pl_st\",State.value);
   url4 = url4.replace(\"pl_ad\",addr.value)
   if(Check.checked)
   {
   url4+='/1';
   }else{
    url4 +='/0';
    }
        \$(\"#output\").empty();
  var frame = document.createElement(\"iframe\");
  frame.id= \"Serv\";
  frame.style = \"margin:4em; width:90%; height:25em;\";
  frame.src = url4;
    var txtarea = document.getElementById('Stringexport');
   txtarea.innerHTML = frame.outerHTML;
 \$(\"#output\").append(frame);
      //start send the post request
    });
    }
    return result;
}
          
    </script>
            ";
    }

    // line 202
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
        <br/><br/><h1>Web Service Creator</h1><br/><br/>
        <form id=\"WebServiceForm\" name=\"WebServiceForm\" action=\"\" method=\"GET \"> 
        <table class=\"TableForms\">
               <tr><td>With Available Equipment?</td>
                   <td><input type=\"checkbox\" id=\"AvEq\" name=\"AvEq\" value=\"0\"  checked/></td></tr>
            <tr><td>
                Search Address:
                </td><td><input type=\"text\" id=\"Address\" name=\"Address\" placeholder=\"Some Address\" value=\"\" onchange=\"return AddressSearch()\" />
                </td></tr>
            <tr><td>Search Based on State</td><td>";
        // line 213
        echo $context["vill"]->getState(((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : $this->getContext($context, "Query")), (-1))) : ((-1))), (-1), 1);
        echo "</td></tr>
            <tr><td><input type=\"button\" id=\"buttonsearch\" name=\"buttonsearch\" value=\"Create Web Service string\" onclick=\"getWebService()\" onkeypress=\"getWebService()\"/></td>
            </tr>
         <tr>
   <td> <h5>String for Other page</h5><br />
      <textarea  id=\"Stringexport\" name=\"Stringexport\" rows=\"5\" cols=\"42\" readonly></textarea></td>
        </tr></table>
            </form>
       
        <div id=\"output\"></div>
        
        <!-- ";
        // line 224
        echo "-->
<br /><br /><br /><br /><br /><br /><br />
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:WSV:WebService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 224,  268 => 213,  253 => 202,  224 => 177,  194 => 150,  168 => 127,  109 => 71,  62 => 27,  37 => 5,  31 => 3,  26 => 2,);
    }
}
