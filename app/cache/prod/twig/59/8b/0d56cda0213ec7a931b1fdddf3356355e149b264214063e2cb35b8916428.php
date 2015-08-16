<?php

/* WebVLWebVillasBundle:Villas:ShowVilla.html.twig */
class __TwigTemplate_598b0d56cda0213ec7a931b1fdddf3356355e149b264214063e2cb35b8916428 extends Twig_Template
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
            <title>WebVillas - Show Villa ";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address"), "value")) : ("value")), "html", null, true);
        echo "</title>
   <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/villas.css"), "html", null, true);
        echo "\" /> 
  
  <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp\"></script>
<script type=\"text/javascript\" >


function initialize() {
    var marker;
var x= ";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "geox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "geox"), "39.57182223734374")) : ("39.57182223734374")), "html", null, true);
        echo " +'' ;
var y= ";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "geoy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "geoy"), "22.183595895767212")) : ("22.183595895767212")), "html", null, true);
        echo " +'' ;
var myCenter = new google.maps.LatLng(x,y);
var Name = 'Location ";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address"), "value")) : ("value")), "html", null, true);
        echo "' ;
  
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
    
    google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(12);
    map.setCenter(marker.getPosition());
  });

}


google.maps.event.addDomListener(window, 'load', initialize);

   
</script>
            ";
    }

    // line 44
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
        <br/>
        <h1>Address: ";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "address"), "value")) : ("value")), "html", null, true);
        echo "</h1>
           <br/>
         <div class=\"VillasMainSite\">
    <br/>
   ";
        // line 51
        if ((($this->env->getExtension('security')->isGranted("ROLE_OWNER") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") == $this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "users"), "id"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 52
            echo "        <div id=\"bartool\">
            <ul>
                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_EditVilla", array("id" => $this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "idVillas"))), "html", null, true);
            echo "\"><li>Edit</li></a>
                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_DeleteVilla", array("id" => $this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "idVillas"))), "html", null, true);
            echo "\"><li>Delete</li></a>
              
            </ul>
        </div>
                ";
        }
        // line 60
        echo "<table>
     <tr class=\"CaptionDesc\"><td> Description: ";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "details", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "details"), "None Description")) : ("None Description")), "html", null, true);
        echo " <br/>
          Price: ";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "Price"), "No price")) : ("No price")), "html", null, true);
        echo " <br/>
           Size: ";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "size"), "Zero")) : ("Zero")), "html", null, true);
        echo " <br/>
           Rooms: ";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "rooms", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "rooms"), "Zero")) : ("Zero")), "html", null, true);
        echo " <br/>
           Restrooms: ";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "restrooms", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "restrooms"), "Zero")) : ("Zero")), "html", null, true);
        echo " <br/>
           View: ";
        // line 66
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "view", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "view"), "No View")) : ("No View")), "html", null, true);
        echo " <br/>
           State: ";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["villa"]) ? $context["villa"] : null), "states", array(), "any", false, true), "state"), "No State")) : ("No State")), "html", null, true);
        echo " <br/>
  </td><td>Parking: ";
        // line 68
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "parking", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "parking"), "No")) : ("No")), "html", null, true);
        echo " <br/>
           Pool: ";
        // line 69
        if (((($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "pool", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "pool"), 0)) : (0)) != 0)) {
            echo " Yes! ";
        } else {
            echo " No! ";
        }
        echo " <br/>
           Gym: ";
        // line 70
        if (((($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "gym", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "gym"), 0)) : (0)) != 0)) {
            echo " Yes! ";
        } else {
            echo " No! ";
        }
        echo " <br/>
           Sauna: ";
        // line 71
        if (((($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "sauna", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["Avail"]) ? $context["Avail"] : null), "sauna"), 0)) : (0)) != 0)) {
            echo " Yes! ";
        } else {
            echo " No! ";
        }
        echo " <br/>
   </td></tr>
                
                
        <tr class=\"CaptionNam\"><td>
                <br/>
                Villa's Location
    </td>
            <td style=\"width: 15em; height: 15em;\">
                <div><div id=\"map-canvas\"></div></div></td>
        
        </tr>
 </table>
         </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Villas:ShowVilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  146 => 66,  134 => 63,  34 => 3,  263 => 132,  257 => 130,  249 => 127,  236 => 122,  231 => 121,  223 => 118,  216 => 114,  210 => 111,  188 => 97,  181 => 95,  165 => 89,  157 => 86,  114 => 70,  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 22,  65 => 18,  53 => 13,  97 => 33,  58 => 15,  52 => 12,  37 => 5,  150 => 67,  126 => 61,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 54,  107 => 52,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 125,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 77,  131 => 75,  119 => 71,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 4,  94 => 28,  89 => 31,  85 => 25,  79 => 34,  75 => 17,  68 => 19,  56 => 16,  50 => 11,  29 => 2,  87 => 36,  72 => 20,  55 => 13,  21 => 1,  26 => 2,  98 => 47,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 4,  40 => 8,  44 => 18,  35 => 5,  31 => 3,  43 => 7,  41 => 6,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 70,  163 => 62,  158 => 69,  156 => 66,  151 => 63,  142 => 65,  138 => 64,  136 => 56,  123 => 60,  121 => 46,  117 => 44,  115 => 55,  105 => 51,  101 => 33,  91 => 44,  69 => 19,  66 => 15,  62 => 17,  49 => 12,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 99,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 72,  164 => 59,  162 => 59,  154 => 68,  149 => 83,  147 => 58,  144 => 49,  141 => 80,  133 => 55,  130 => 62,  125 => 73,  122 => 59,  116 => 28,  112 => 42,  109 => 36,  106 => 33,  103 => 44,  99 => 60,  95 => 42,  92 => 25,  86 => 28,  82 => 26,  80 => 22,  73 => 22,  64 => 18,  60 => 17,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
