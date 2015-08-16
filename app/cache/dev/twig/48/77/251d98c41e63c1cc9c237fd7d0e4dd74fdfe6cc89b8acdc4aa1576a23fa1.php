<?php

/* WebVLWebVillasBundle:UserF:Account.html.twig */
class __TwigTemplate_4877251d98c41e63c1cc9c237fd7d0e4dd74fdfe6cc89b8acdc4aa1576a23fa1 extends Twig_Template
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
            <title>WebVillas - Account </title>
        
 <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webvlwebvillas/css/Forms.css"), "html", null, true);
        echo "\" /> 
 <script>
      function ChangePass()
     {
          \$(\"#PasswordForm\").submit(function(){
                return false;
            });
         \$(document).ready(function(){
       var url=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("_updPass");
        echo "\";
   
      //start send the post request
      if(passcheck())
      {
      var pass = document.getElementById('Password').value; 
      var repass = document.getElementById('RePassword').value; 
      }else{
       var pass = null;
        var repass = null;
    }
       \$.post(url,{\"Password\": pass,\"RePassword\":repass},function(data){
           //the response is in the data variable
   
            if(data != \"\" ){ 
               
                if(data.responseCode != 400)
                {
             \$('#outputPass').html(data.Success);
             \$('#outputPass').css({'padding':'0','background-color': 'darkgreen',
                 'border': 'green thin solid', 'color':'white', 'margin':'0.5em'});
         }else{
         \$('#outputPass').html(data.Error);
         \$('#outputPass').css({'padding':'0','background-color': 'darkred',
                 'border': 'red thin solid', 'color':'white', 'margin':'0.5em'});
            }
            
        
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
     }
     
    function ChangeMail()
     {
          \$(\"#MailForm\").submit(function(){
                return false;
            });
         \$(document).ready(function(){
       var url=\"";
        // line 66
        echo $this->env->getExtension('routing')->getUrl("_updMail");
        echo "\";
   
      //start send the post request
      if(mailcheck())
      {
      var mail = document.getElementById('Email').value; 
      var remail = document.getElementById('Emailreenter').value; 
      }else{
       var mail = null;
        var remail = null;
    }
       \$.post(url,{\"Email\": mail,\"Emailreenter\":remail},function(data){
           //the response is in the data variable
   
            if(data != \"\" ){ 
               
                if(data.responseCode != 400)
                {
             \$('#outputMail').html(data.Success);
             \$('#outputMail').css({'padding':'0','background-color': 'darkgreen',
                 'border': 'green thin solid', 'color':'white', 'margin':'0.5em'});
         }else{
         \$('#outputMail').html(data.Error);
         \$('#outputMail').css({'padding':'0','background-color': 'darkred',
                 'border': 'red thin solid', 'color':'white', 'margin':'0.5em'});
            }
            
        
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
     }
    
     function ChangeTheme()
     {
          \$(\"#ThemeForm\").submit(function(){
                return false;
            });
         \$(document).ready(function(){
       var url=\"";
        // line 119
        echo $this->env->getExtension('routing')->getUrl("_updTheme");
        echo "\";
   
      //start send the post request
      if(themecheck())
      {
      var thm = document.getElementById('ThemeSelector').value;    
      }else{
       var thm = 0;
    }
       \$.post(url,{\"ThemeSelector\": thm},function(data){
           //the response is in the data variable
   
            if(data != \"\" ){ 
               
                if(data.responseCode != 400)
                {
             \$('#outputTheme').html(data.Success);
             \$('#outputTheme').css({'padding':'0','background-color': 'darkgreen',
                 'border': 'green thin solid', 'color':'white', 'margin':'0.5em'});
         }else{
         \$('#outputTheme').html(data.Error);
         \$('#outputTheme').css({'padding':'0','background-color': 'darkred',
                 'border': 'red thin solid', 'color':'white', 'margin':'0.5em'});
            }
            
        
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
     }
     </script>
            ";
    }

    // line 165
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
        <br/>
        <h1>Account of ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</h1>
          <br/>
      
          <div id=\"ThemeDiv\" >
              <h3>Set Theme</h3>
          <form id=\"ThemeForm\" name=\"ThemeForm\" method=\"post\" action=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("_updTheme");
        echo "\" onsubmit='return themecheck()'>
              <table class=\"fields\">
                  <tr>
                      <td id='outputTheme'></td>
                      <td>
                          Choose a Theme:
                      </td>
                      <td>
                          <select id=\"ThemeSelector\" name=\"ThemeSelector\">
                            ";
        // line 182
        if (((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")) == 0)) {
            // line 183
            echo "                                <option value=\"0\" selected=\"selected\"> Default</option>
                                <option value=\"1\"> Green </option>
                                ";
        } else {
            // line 186
            echo "                                     <option value=\"0\" > Default</option>
                                    <option value=\"1\" selected=\"selected\"> Green </option>
                                    ";
        }
        // line 189
        echo "                          </select>
                      </td><td><span id='SelErr'></span></td>
                 
                
                      <td>
                          <input type=\"submit\" id=\"ThemeButton\" onclick='ChangeTheme()' value=\"Change Theme!\" />  
                      </td>
                      <td>
                          
                      </td>
                  </tr>
              </table>
          </form>
    </div>
        <br/> <br/>
          <div id=\"ChangeEmail\" >
              <h3>Change Email</h3>
              <form id=\"MailForm\" name=\"MailForm\" action=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("_updMail");
        echo "\" method=\"post\" onsubmit=\"return mailcheck()\">
                  <table class=\"fields\">
                      <tr><td  id='outputMail'></td></tr>
                      <tr> 
                          <td>Email:</td><td><input type=\"email\" id=\"Email\" name=\"Email\" placeholder=\"E-mail\"/></td><td><span id=\"Mailerr\"></span></td></tr>
                      <tr><td>Re-Enter Email:</td><td><input type=\"email\" id=\"Emailreenter\" name=\"Emailreenter\" placeholder=\"Re-enter E-mail\"/></td><td><span id=\"remailerr\"></span></td></tr>
                      <tr><td><input type=\"submit\" id=\"MailButton\" onclick=\"ChangeMail()\" Value=\"Change Email!\" /></td></tr>
                  </table>
              </form>
          </div>
          <br/> <br/>
        <div id=\"ChangePassword\" >
            <h3>Change Password</h3>
              <form id=\"PasswordForm\" name=\"PasswordForm\" action=\"";
        // line 219
        echo $this->env->getExtension('routing')->getPath("_updPass");
        echo "\" method=\"post\" onsubmit = 'return passcheck()'>
                  <table class=\"fields\">
                      <tr><td id=\"outputPass\"></td></tr>
                      <tr><td>Password:</td><td><input type=\"password\" id=\"Password\" name=\"Password\" placeholder=\"Password\"/></td><td><span id=\"PassErr\"></span></td></tr>
                       <tr><td>Re-Enter Password:</td><td><input type=\"password\" id=\"RePassword\" name=\"RePassword\" placeholder=\"Re-enter Password\"/></td><td><span id=\"RePassErr\"></span></td></tr>
                       <tr><td><input type=\"submit\" id=\"PasswordButton\" onclick=\"ChangePass()\" Value=\"Change Password!\" /></td></tr>
                  </table>
              </form>
          </div>
         
        <br/>
    <br/>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:UserF:Account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 219,  267 => 206,  248 => 189,  243 => 186,  238 => 183,  236 => 182,  224 => 173,  216 => 168,  209 => 165,  159 => 119,  103 => 66,  47 => 13,  36 => 5,  29 => 2,);
    }
}
