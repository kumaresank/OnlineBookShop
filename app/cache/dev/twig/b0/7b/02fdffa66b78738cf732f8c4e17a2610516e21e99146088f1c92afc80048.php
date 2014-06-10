<?php

/* bookshopBundle:Default:loginerror.html.twig */
class __TwigTemplate_b07b02fdffa66b78738cf732f8c4e17a2610516e21e99146088f1c92afc80048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'error' => array($this, 'block_error'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('error', $context, $blocks);
    }

    public function block_error($context, array $blocks = array())
    {
        // line 2
        echo "<h1> Login Error </h1> 
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("bookshop_homepage");
        echo "\"> Try again </a>
";
    }

    public function getTemplateName()
    {
        return "bookshopBundle:Default:loginerror.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
