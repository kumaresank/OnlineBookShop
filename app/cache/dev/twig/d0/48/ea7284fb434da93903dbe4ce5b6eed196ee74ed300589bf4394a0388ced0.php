<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d048ea7284fb434da93903dbe4ce5b6eed196ee74ed300589bf4394a0388ced0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 29,  205 => 25,  197 => 23,  190 => 21,  186 => 20,  155 => 82,  134 => 75,  127 => 72,  114 => 66,  110 => 64,  104 => 62,  97 => 59,  77 => 53,  70 => 51,  58 => 46,  34 => 32,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 76,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 77,  135 => 53,  119 => 69,  102 => 61,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  93 => 28,  88 => 6,  78 => 21,  201 => 24,  196 => 90,  183 => 82,  171 => 61,  166 => 2,  163 => 1,  158 => 67,  156 => 66,  151 => 80,  142 => 59,  138 => 54,  136 => 56,  121 => 70,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 58,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  87 => 25,  21 => 1,  46 => 7,  26 => 6,  44 => 12,  31 => 5,  25 => 3,  28 => 3,  24 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 78,  139 => 45,  131 => 74,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 49,  55 => 45,  52 => 44,  50 => 43,  43 => 39,  41 => 7,  35 => 5,  32 => 11,  29 => 3,  209 => 26,  203 => 78,  199 => 67,  193 => 22,  189 => 71,  187 => 84,  182 => 66,  176 => 12,  173 => 11,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 60,  95 => 28,  92 => 21,  86 => 56,  82 => 22,  80 => 54,  73 => 52,  64 => 14,  60 => 47,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 40,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
