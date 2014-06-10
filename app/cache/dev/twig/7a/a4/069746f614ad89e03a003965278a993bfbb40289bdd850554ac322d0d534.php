<?php

/* bookshopBundle:Default:loginsuccess.html.twig */
class __TwigTemplate_7aa4069746f614ad89e03a003965278a993bfbb40289bdd850554ac322d0d534 extends Twig_Template
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
        echo "<h1> Hi! ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " </h1> 
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("bookshop_homepage");
        echo "\"> Click Here to go home Page </a>
";
    }

    public function getTemplateName()
    {
        return "bookshopBundle:Default:loginsuccess.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,);
    }
}
