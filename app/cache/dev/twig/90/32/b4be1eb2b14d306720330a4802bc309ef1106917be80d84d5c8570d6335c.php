<?php

/* bookshopBundle:Default:productdetails.html.twig */
class __TwigTemplate_9032b4be1eb2b14d306720330a4802bc309ef1106917be80d84d5c8570d6335c extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<style>
\t.bookdetails
{
padding:20px;
background-color:#FDC3B4;
}
img
{
width:100px;
height:100px;
padding: 5px;
border: 1px solid white;
}
.book
{
padding:20px;
width:120px;
float:left;
margin:0px;
}
#menu
{
\theight:30px;
\tbackground-color:#002918;
}
#menu a
{
\ttext-decoration:none;
\tfloat:right;
\tpadding-left:15px;
\tpadding-right:15px;
\tcolor:white;
\tline-height:30px;
}
#menu a:hover{background-color:#F67423}
.cancel
{
text-decoration:none;
color:white;
background-color:#AD54B0;
height:50px;width:75px;text-align:center;
line-height:50px;float:right;
}
.cancel:hover{
background-color:#430525;
}

</style>
\t<body>
\t\t<div id=\"container\">
\t\t\t<div id=\"menu\"><a style=\"float:left\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("bookshop_homepage");
        echo "\">Home</a>
";
        // line 53
        if (array_key_exists("name", $context)) {
            // line 54
            echo "<span style=\"line-height:30px;padding-left:30px;color:white\">Hi! ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </span>
<a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("bookshop_logout");
            echo "\" class=\"username\">Logout</a> &nbsp;&nbsp; 
<a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("bookshop_products");
            echo "\" class=\"cart-count\">Cart(";
            if (array_key_exists("cart", $context)) {
                echo twig_escape_filter($this->env, (isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "html", null, true);
            } else {
                echo "0";
            }
            echo ")</a>
";
        }
        // line 58
        echo "\t\t\t</div><br/>
 ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["key"] => $context["bk"]) {
            // line 60
            echo " ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bk"]) ? $context["bk"] : $this->getContext($context, "bk")));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 61
                echo " </br>
<div class=\"book\">
\t<img id=\"img1\" src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookpath")), "html", null, true);
                echo "\">
\t</div>
\t<div class=\"bookdetails\">
\t\t<b>Book Name:</b> &nbsp; <span class=\"bookname_first\" style=\"color:#888888\">";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookname"), "html", null, true);
                echo "</span><span style=\"float:right;color:red;padding-right:20px;\" id=\"qty\">Qty&nbsp;:&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qty"]) ? $context["qty"] : $this->getContext($context, "qty")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), "html", null, true);
                echo "</span>
\t\t<p><b>Publisher Name:</b> &nbsp; <span class=\"publishername_first\" style=\"color:#888888\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookpublisher"), "html", null, true);
                echo "</span><a id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\" class=\"cancel\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bookshop_removecart", array("id" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                echo "\" >Cancel</a></p>
\t\t<p><b>Author Name:</b> &nbsp; <span style=\"color:#888888\"></span><span class=\"author\" style=\"color:#888888\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookauthor"), "html", null, true);
                echo "</span></p>
\t\t<p><b>Price:</b> &nbsp; <span style=\"color:#888888\">Rs.</span><span class=\"price_first\" style=\"color:#888888\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookprice"), "html", null, true);
                echo "</span><span style=\"float:right\">Rs:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qtyprice"]) ? $context["qtyprice"] : $this->getContext($context, "qtyprice")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), "html", null, true);
                echo "</span></p>
\t</div>
\t<hr style=\"clear:both\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['bk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "<style>
\t#total
\t{ 
\t\tbackground-color:red;color:white;
\t\tpadding:15px;
\t}
\t#total:hover{background-color:green}
</style><br/>
<div style=\"height:30px\">
<span style=\"float:right\"><b>Total:</b>&nbsp;&nbsp;<a id=\"total\" class=\"purcahse\" href=\"#\" >";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
        echo "</a></span>\t
</div>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "bookshopBundle:Default:productdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 83,  156 => 74,  140 => 69,  136 => 68,  128 => 67,  122 => 66,  116 => 63,  112 => 61,  107 => 60,  103 => 59,  100 => 58,  89 => 56,  85 => 55,  80 => 54,  78 => 53,  74 => 52,  19 => 1,);
    }
}
