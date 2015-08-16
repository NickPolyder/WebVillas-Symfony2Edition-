<?php

/* WebVLWebVillasBundle:Villas:EditVillas.html.twig */
class __TwigTemplate_c4042283b3ce01f0ec35a3d9b2ee1978fc6ed94ad75545363c27f87111536577 extends Twig_Template
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
            <title>WebVillas - Edit Villa</title>
       <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/villas.css"), "html", null, true);
        echo "\" /> 
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/Forms.css"), "html", null, true);
        echo "\" /> 
  <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp\"></script>
 <script>
   
function initialize() {
    var marker;
var x= document.getElementById(\"GeoX\").value;
var y= document.getElementById('GeoY').value;
var myCenter = new google.maps.LatLng(x,y);
var Name = 'Location ' + document.getElementById('EditVilForm_address').value;
  
        var mapOptions = {
    zoom: 6,
    center: myCenter,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  marker = new google.maps.Marker({
  position:myCenter,
  title: Name
  });
marker.setMap(map);
    
  google.maps.event.addListener(map, 'click', function(e) {
  var x = \"\"+e.latLng+ \"\";
  var y = x.split(\",\");
  var lat = y[0].split(\"(\");
  var Lng = y[1].split(\")\");
  document.getElementById('GeoX').value= lat[1]; 
  document.getElementById('GeoY').value =Lng[0];
  
if(marker)
    {
        marker.setPosition(e.latLng);
    }else{
  marker = new google.maps.Marker({
  position:e.latLng,
  title: 'Your Business Location'
  });
marker.setMap(map);
    }
    
 
  });
}


google.maps.event.addDomListener(window, 'load', initialize);

   
</script>
            ";
    }

    // line 60
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
        <br/>
        <h1>Edit Villa</h1>
           <br/>
          
     
       
     ";
        // line 69
        echo "     ";
        if (((isset($context["form"]) ? $context["form"] : null) != null)) {
            // line 70
            echo "           ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("_EditVillaCheck", array("id" => ((array_key_exists("idval", $context)) ? (_twig_default_filter((isset($context["idval"]) ? $context["idval"] : null), (-1))) : ((-1))))), "method" => "POST", "attr" => array("onsubmit" => "return validate_addvilla()")));
            echo "
       <div class=\"errors\"> ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo " </div>
       ";
            // line 72
            if ((((array_key_exists("statere", $context)) ? (_twig_default_filter((isset($context["statere"]) ? $context["statere"] : null), (-1))) : ((-1))) != (-1))) {
                // line 73
                echo "           <div class=\"errorrs\">";
                echo twig_escape_filter($this->env, (isset($context["statere"]) ? $context["statere"] : null), "html", null, true);
                echo "</div>
       ";
            }
            // line 75
            echo " <table class=\"TableForms\">
<tr>
    <td><input type=\"hidden\" id=\"id_vil\" name=\"id_vil\"  value=\"";
            // line 77
            echo twig_escape_filter($this->env, ((array_key_exists("idval", $context)) ? (_twig_default_filter((isset($context["idval"]) ? $context["idval"] : null), (-1))) : ((-1))), "html", null, true);
            echo "\" /> </td>
</tr>
     <tr>
    <td>";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "size"), 'label');
            echo "</td><td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "size"), 'widget');
            echo "</td><td><span id=\"Sizeerr\" class=\"error\"></span></td>
</tr> 
<tr>
<td>";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rooms"), 'label');
            echo "</td><td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rooms"), 'widget');
            echo "</td><td><span class=\"error\" id=\"Roomerr\"></span></td>
</tr>
<tr>
<td>";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restrooms"), 'label');
            echo "</td><td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "restrooms"), 'widget');
            echo "</td><td><span class=\"error\" id=\"restrmerr\"></span></td>
</tr>
<tr>
<td>";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "view"), 'label');
            echo "</td><td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "view"), 'widget');
            echo "</td><td><span class=\"error\" id=\"viewerr\"></span></td>
</tr>
 <tr>
<td>";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'label');
            echo "</td><td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'widget');
            echo "</td><td><span class=\"error\" id=\"addreserr\"></span></td>
</tr>
<tr>
<td>";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price"), 'label');
            echo "</td><td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "price"), 'widget');
            echo "</td><td><span class=\"error\" id=\"priceerr\"></span></td>
</tr>
";
            // line 97
            echo $context["vill"]->getState(((array_key_exists("Query", $context)) ? (_twig_default_filter((isset($context["Query"]) ? $context["Query"] : null), (-1))) : ((-1))), ((array_key_exists("selected", $context)) ? (_twig_default_filter((isset($context["selected"]) ? $context["selected"] : null), (-1))) : ((-1))));
            echo "
<tr>
    <td>";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "details"), 'label');
            echo "</td><td colspan=\"2\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "details"), 'widget');
            echo "</td><td><span class=\"error\" id=\"Detailerr\"></span></td>
</tr>
        <tr><td>
                <br/>
                Villa's Location
    </td>
            <td style=\"width: 15em; height: 15em;\">
                <div><div id=\"map-canvas\"></div></div></td><td><span class=\"error\" id=\"GeoLocErr\"></span>
            </td>
        
        </tr>
<tr>
<td></td><td>";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "geoX"), 'widget', array("id" => "GeoX"));
            echo "</td>
</tr>
<tr>
<td></td><td>";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "geoY"), 'widget', array("id" => "GeoY"));
            echo "</td>
</tr>
<tr><td></td><td colspan=\"2\">Provide?!</td></tr>
<tr>
    <td>";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parking"), 'label');
            echo "</td><td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parking"), 'widget', array("type" => "number", "attr" => array("min" => "0", "value" => ((array_key_exists("ParkValue", $context)) ? (_twig_default_filter((isset($context["ParkValue"]) ? $context["ParkValue"] : null), 0)) : (0)), "style" => "padding:0.5em;")));
            echo "</td><td><span class=\"error\" id=\"Parkerror\"></span></td>
</tr>
<tr>
    <td>";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pool"), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pool"), 'widget');
            echo "</td>
    <td>";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sauna"), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sauna"), 'widget');
            echo "</td>
</tr>
<tr>
    <td>";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gym"), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gym"), 'widget');
            echo "</td>
</tr>
<tr><td class=\"buttons\"></td><td class=\"buttons\">";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Edit"), 'widget');
            echo "  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Reset"), 'widget');
            echo "</td></tr>
</table> 

";
            // line 130
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo " 
            
";
        }
        // line 132
        echo "         
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Villas:EditVillas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 132,  257 => 130,  249 => 127,  236 => 122,  231 => 121,  223 => 118,  216 => 114,  210 => 111,  188 => 97,  181 => 95,  165 => 89,  157 => 86,  114 => 70,  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 22,  65 => 18,  53 => 13,  97 => 33,  58 => 14,  52 => 12,  37 => 5,  150 => 51,  126 => 60,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 69,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 125,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 77,  131 => 75,  119 => 71,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 31,  85 => 25,  79 => 34,  75 => 17,  68 => 19,  56 => 16,  50 => 11,  29 => 2,  87 => 36,  72 => 20,  55 => 13,  21 => 1,  26 => 2,  98 => 31,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 4,  40 => 8,  44 => 13,  35 => 5,  31 => 3,  43 => 7,  41 => 6,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 72,  121 => 46,  117 => 44,  115 => 54,  105 => 36,  101 => 33,  91 => 30,  69 => 19,  66 => 15,  62 => 17,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 99,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 83,  147 => 58,  144 => 49,  141 => 80,  133 => 55,  130 => 41,  125 => 73,  122 => 59,  116 => 28,  112 => 42,  109 => 36,  106 => 33,  103 => 44,  99 => 60,  95 => 42,  92 => 25,  86 => 28,  82 => 26,  80 => 22,  73 => 22,  64 => 18,  60 => 17,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
