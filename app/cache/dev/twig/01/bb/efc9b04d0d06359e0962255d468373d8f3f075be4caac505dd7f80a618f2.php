<?php

/* WebVLWebVillasBundle:Default:Contact.html.twig */
class __TwigTemplate_01bbefc9b04d0d06359e0962255d468373d8f3f075be4caac505dd7f80a618f2 extends Twig_Template
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
            <title>WebVillas - Contact</title>
            
            ";
    }

    // line 6
    public function block_MainCont($context, array $blocks = array())
    {
        echo " 
    <div id=\"MainContent\">
        <br/>
        <h1>Contact Information</h1>
        <table>
            <tr><td>Name:</td><td>Νικόλαος Πολυδερόπουλος</td></tr>
            <tr><td>Email:</td><td><a href=\"mailto:cs4411081@teilar.gr\">cs4411081@teilar.gr</a></td></tr>
              </table>
        <table style=\"margin: 0 auto;width: 50em;\">
             <tr style=\"width:100%;\"><th style=\"width:100%;\">Ask me something</th></tr>
            <tr style=\"width:100%;\"><td style=\"width:100%;\"><iframe src=\"http://ask.fm/widget/e0fec0aacc07963abcf859c44b8f30bc55ede93d?stylesheet=large&fgcolor=%23000000&bgcolor=%23EFEFEF&lang=39\" frameborder=\"0\" scrolling=\"no\" width=\"100%\" height=\"275\" style=\"border:none;\"></iframe></td></tr>
     
        </table>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "WebVLWebVillasBundle:Default:Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  29 => 2,);
    }
}
