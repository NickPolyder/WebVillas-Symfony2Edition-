<?php

/* WebVLWebVillasBundle:Villas:map.html.twig */
class __TwigTemplate_f266a7001f9137c06ae5d6d4668b7325787aad647caed9bab74986c0d3eece4c extends Twig_Template
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
        echo "<html>
<head>
            <title>WebVillas - Map </title>
           <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/layoutcss.css"), "html", null, true);
        echo "\" /> 

                
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/js/jquery.js"), "html", null, true);
        echo "\">
</script> 
            
            <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
 <script>
     var counter=0;
           \$(document).ready(function() {

   //listen for the form beeing submitted
   \$(\"#butid\").click(function(){
      //get the url for the form
      var url=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("_my_app_greeting");
        echo "\";
   
      //start send the post request
       \$.post(url,function(data){
           //the response is in the data variable
   
            if(data != \"\" ){  
             \$('#output').html(data);
                \$('#output').css(\"color\",\"red\");
            }
          
           else{
              //if we got to this point we know that the controller
              //did not return a json_encoded array. We can assume that           
              //an unexpected PHP error occured
              alert(\"An unexpeded error occured.\");

              //if you want to print the error:
              
           }
       });//It is silly. But you should not write 'json' or any thing as the fourth parameter. It should be undefined. I'll explain it futher down

      //we dont what the browser to submit the form
      return false;
   });


});
 var marker;
function initialize() {
  var mapOptions = {
    zoom: 5,
    center: new google.maps.LatLng(39.57182223734374,22.183595895767212),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

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

\t
}


google.maps.event.addDomListener(window, 'load', initialize);

    </script>
            </head>
    <body>
        <button id=\"butid\">
            Click Me!
        </button>

 <div id=\"output\"></div>
    <div style=\"width:10em; height: 10em; margin:0 auto;\"><div id=\"map-canvas\"></div></div>
         </body>
</html>";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Villas:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 132,  257 => 130,  249 => 127,  236 => 122,  231 => 121,  223 => 118,  216 => 114,  210 => 111,  188 => 97,  181 => 95,  165 => 89,  157 => 86,  114 => 70,  100 => 26,  84 => 23,  76 => 21,  96 => 31,  77 => 22,  65 => 18,  53 => 13,  97 => 33,  58 => 14,  52 => 12,  37 => 5,  150 => 51,  126 => 60,  113 => 51,  74 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 69,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 125,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 77,  131 => 75,  119 => 71,  108 => 27,  102 => 32,  71 => 20,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 31,  85 => 25,  79 => 34,  75 => 17,  68 => 19,  56 => 16,  50 => 11,  29 => 2,  87 => 36,  72 => 20,  55 => 13,  21 => 1,  26 => 2,  98 => 31,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 4,  40 => 8,  44 => 18,  35 => 5,  31 => 3,  43 => 7,  41 => 6,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 72,  121 => 46,  117 => 44,  115 => 54,  105 => 36,  101 => 33,  91 => 30,  69 => 19,  66 => 15,  62 => 17,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 99,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 92,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 83,  147 => 58,  144 => 49,  141 => 80,  133 => 55,  130 => 41,  125 => 73,  122 => 59,  116 => 28,  112 => 42,  109 => 36,  106 => 33,  103 => 44,  99 => 60,  95 => 42,  92 => 25,  86 => 28,  82 => 26,  80 => 22,  73 => 22,  64 => 18,  60 => 17,  57 => 11,  54 => 10,  51 => 12,  48 => 10,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
