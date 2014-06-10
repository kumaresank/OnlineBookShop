<?php

/* bookshopBundle:Default:signupsuccess.html.twig */
class __TwigTemplate_7e2d31cd480e25c9b374e72a90ebc5ca83a6bf270266d203dc5828adfb815762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('style', $context, $blocks);
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_style($context, array $blocks = array())
    {
        // line 2
        echo "<style>
#success
{
background-color:#0C2718;
margin-top:100px;
padding:100px;
color:white;
}
</style>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div id=\"success\">
Hi! ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
</br>
<h1>Successfully Account created! </h1>
</br>
The Page Will Be automatically redirect to home page in 5 Seconds or 
<meta http-equiv=\"refresh\" content=\"5; URL=";
        // line 19
        echo $this->env->getExtension('routing')->getPath("bookshop_homepage");
        echo "\">
<a href=\"\">Click here to Go home page Manually</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "bookshopBundle:Default:signupsuccess.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  49 => 14,  46 => 13,  43 => 12,  30 => 2,  27 => 1,  23 => 12,  21 => 1,);
    }
}
