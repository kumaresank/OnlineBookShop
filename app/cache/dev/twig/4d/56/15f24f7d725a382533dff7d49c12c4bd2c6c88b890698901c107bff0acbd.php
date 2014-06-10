<?php

/* searchBundle:Default:index.html.twig */
class __TwigTemplate_4d5615f24f7d725a382533dff7d49c12c4bd2c6c88b890698901c107bff0acbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'begin' => array($this, 'block_begin'),
            'style' => array($this, 'block_style'),
            'script' => array($this, 'block_script'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('begin', $context, $blocks);
        // line 10
        echo "      
";
        // line 11
        $this->displayBlock('style', $context, $blocks);
        // line 104
        $this->displayBlock('script', $context, $blocks);
        // line 163
        echo "      ";
        $this->displayBlock('menu', $context, $blocks);
        // line 233
        $this->displayBlock('content', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        if (array_key_exists("total_pages", $context)) {
            // line 252
            $this->displayBlock('navigation', $context, $blocks);
        }
        // line 274
        echo "    </div>
    
    
    <div id=\"login-box\" class=\"login-popup\">
        <a href=\"#\" class=\"close\">x</a>
          <form action =\"";
        // line 279
        echo $this->env->getExtension('routing')->getPath("bookshop_login");
        echo "\" name=\"form1\" id=\"form1\" method=\"post\">
\t\t\t<input type=\"email\" placeholder=\"Enter Email Address\" name=\"username\" required></br>
\t\t\t<input type=\"password\" placeholder=\"Enter Password\" name=\"pass\" required></br>
\t\t\t<input class=\"login_button\" type=\"submit\" value=\"Login\">
\t\t</form>
\t\t</div>
\t\t<div id=\"signup-box\" class=\"signup-popup\">
        <a href=\"#\" class=\"close\">x</a>
          <form name=\"form2\" id=\"form2\"  action=\"";
        // line 287
        echo $this->env->getExtension('routing')->getPath("bookshop_signup");
        echo "\" method=\"post\">
\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Enter Your Name\" required></br>
\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Enter your Email Address\" required></br>
\t\t\t<input type=\"password\" name=\"new_pass\" placeholder=\"Type New Password\" required></br>
\t\t\t<input type=\"password\" name=\"retype_pass\" placeholder=\"Retype Password\" required></br>
\t\t\t<input class=\"signup_button\" type=\"submit\" value=\"Create Account\">
\t\t</form>
\t\t</div>
\t\t
\t\t</body>
\t\t</html>
";
    }

    // line 1
    public function block_begin($context, array $blocks = array())
    {
        // line 2
        echo "<html>
\t<head>
\t\t<title>Welcome To Online Shopping
\t\t</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"icon\" 
      type=\"image/png\" 
      href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/favicon.jpg"), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_style($context, array $blocks = array())
    {
        // line 12
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signup.css"), "html", null, true);
        echo "\"/>
      <style>
\t\t\t\t.pagination li
\t\t\t\t{
\t\t\t\t\tbackground-color:green;
\t\t\t\t\tcolor:white;
\t\t\t\t\tpadding:10px;
\t\t\t\t\tborder:2px solid;
\t\t\t\t\tborder-radius:15px;
\t\t\t\t\tdisplay:inline;
\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
<style>
@media screen and (max-width:980px)
{
.container
{
width:94%;
}
.menu
{
width:90%;
}
.header
{
width:94%;
}
.content
{
width:60%;
}
}
@media screen and (max-width:700px)
{
.container
{
width:auto;
}
.menu
{
width:auto;
}
.header
{
width:auto;
}
.content
{
width:auto;
}
.banner
{
width:auto;
}
.searchtext
{
width:auto;
}
}
@media screen and (max-width:480px)
{
.container
{
width:auto;
}
.header
{
width:auto;
}
.menu
{
width:auto;
}
.content
{
width:auto;
}
.banner
{
width:auto;
}
.searchtext
{
width:auto;
}
}
</style>\t\t\t\t
\t\t\t\t
";
    }

    // line 104
    public function block_script($context, array $blocks = array())
    {
        // line 105
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popwindow.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popsignup.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>   
      <link rel=\"stylesheet\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />
      <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"), "html", null, true);
        echo "\"></script>
\t  <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
";
        // line 121
        echo "<script>
\$.widget( \"custom.catcomplete\", \$.ui.autocomplete, {
\t\t_create: function() {
\t\t\tthis._super();
\t\t\tthis.widget().menu( \"option\", \"items\", \"> :not(.ui-autocomplete-category)\" );
\t\t},
\t\t_renderMenu: function( ul, items ) {
\t\t\tvar that = this,
\t\t\t\tcurrentCategory = \"\";
\t\t\t\$.each( items, function( index, item ) {
\t\t\t\tvar li;
\t\t\t\tif ( item.category != currentCategory ) {
\t\t\t\t\tul.append( \"<b><li class='ui-autocomplete-category'>\" + item.category + \"</li></b>\" );
\t\t\t\t\tcurrentCategory = item.category;
\t\t\t\t}
\t\t\t\tli = that._renderItemData( ul, item );
\t\t\t\tif ( item.category ) {
\t\t\t\t\tli.attr( \"aria-label\", item.category + \" : \" + item.label);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t</script>
\t<script>
\t\$(function() {
\t\t
\t\tvar data = \"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("search_auto");
        echo "\" ;
\t\t\$( \"#searchtext\" ).catcomplete({
\t\t\tdelay: 0,
\t\t\tmax:10,
\t\t\tsource: data,
\t\t\tselect:function(event,ui)
\t\t\t{
\t\t\t\$(this).val(ui.item.value);
\t\t\t\$('.search').submit();
\t\t\t}
\t\t});
\t\t
\t});
\t</script>

       ";
    }

    // line 163
    public function block_menu($context, array $blocks = array())
    {
        // line 164
        echo "      <body>
\t\t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<img class=\"banner\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/header.jpg"), "html", null, true);
        echo "\" style=\"width:1000px;height:130px;\">
\t\t\t</div>
\t\t\t<div class=\"menu\">
             <div class=\"home\">
\t\t\t\t
\t\t\t\t\t<a class=\"hm\" href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("search_homepage");
        echo "\">Home</a>
\t\t\t\t\t</div>
\t\t\t\t\t<style>
\t\t\t\t\t.search
\t\t\t\t\t{
\t\t\t\t\tmargin-left:100px;
\t\t\t\t\t}
\t\t\t\t\t.search li
\t\t\t\t\t{
\t\t\t\t\tfloat:left;
\t\t\t\t\tpadding-top:3px;
\t\t\t\t\tdiplay:inline;
\t\t\t\t\t}
\t\t\t\t\t#searchtext
\t\t\t\t\t{
\t\t\t\t\toutline: none;
\t\t\t\t\tborder: none;
\t\t\t\t\twidth:400px
\t\t\t\t\t}
\t\t\t\t\t#searchbutton
\t\t\t\t\t{
\t\t\t\t\tcolor:white;
\t\t\t\t\tbackground-color:#1BBA9A;
\t\t\t\t\toutline: none;
\t\t\t\t\tborder: none;
\t\t\t\t\t}
\t\t\t\t\t#searchbutton:hover
\t\t\t\t\t{
\t\t\t\t\tcolor:white;
\t\t\t\t\tbackground-color:green;
\t\t\t\t\toutline: none;
\t\t\t\t\tborder: none;
\t\t\t\t\t}
\t\t\t\t\tfieldset 
\t\t\t\t\t{
\t\t\t\t\tborder: 0;
\t\t\t\t\tmargin: 0;
\t\t\t\t\tpadding: 0;
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t</style>
\t\t\t\t\t<fieldset>
<form action=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("search_search");
        echo "\" class=\"search\">
<ul type=\"none\">
        <li><input id=\"searchtext\" type=\"text\" name = \"srtxt\" placeholder=\"Search here..\" required=\"\" autocomplete=\"off\"></li>
        <li><input id=\"searchbutton\" type=\"submit\" value=\"Search\"></li>
</ul>
</form>
</fieldset>
<div class=\"login\">
";
        // line 222
        if (array_key_exists("name", $context)) {
            // line 223
            echo "<span style=\"line-height:30px;padding-left:30px;color:white\">Hi! ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </span>
<a href=\"";
            // line 224
            echo $this->env->getExtension('routing')->getPath("bookshop_logout");
            echo "\" class=\"username\">Logout</a> &nbsp;&nbsp; 
<a href=\"";
            // line 225
            echo $this->env->getExtension('routing')->getPath("bookshop_products");
            echo "\" class=\"cart-count\">Cart(";
            if (array_key_exists("cart", $context)) {
                echo twig_escape_filter($this->env, (isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "html", null, true);
            } else {
                echo "0";
            }
            echo ")</a>
";
        } else {
            // line 227
            echo "<a href=\"#signup-box\" class=\"login-window\">SignUp</a> &nbsp;&nbsp; 
<a href=\"#login-box\" class=\"signup-window\">SignIn</a>
";
        }
        // line 230
        echo "</div>
</div>
";
    }

    // line 233
    public function block_content($context, array $blocks = array())
    {
        // line 234
        echo "<div class=\"contetnt\">
";
        // line 235
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 236
            echo "<div class=\"booklist\">
    <img id=\"img\" src=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookpath")), "html", null, true);
            echo "\">
\t</div>
\t<div class=\"book_details\">
\t<br/>
\t\t<b>Book Name:</b> &nbsp; <span class=\"bookname\" style=\"color:#888888\">";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookname"), "html", null, true);
            echo "</span>
\t\t<p><b>Publisher Name:</b> &nbsp; <span class=\"publishername\" style=\"color:#888888\">";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookpublisher"), "html", null, true);
            echo "</span><a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" class=\"buy\" href=\"#\" >Buy</a></p>
\t\t<p><b>Author Name:</b> &nbsp; <span style=\"color:#888888\"></span><span class=\"author\" style=\"color:#888888\">";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookauthor"), "html", null, true);
            echo "</span></p>
\t\t<p><b>Price:</b> &nbsp; <span style=\"color:#888888\">Rs.</span><span class=\"price4\" style=\"color:#888888\">";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookprice"), "html", null, true);
            echo "</span></p>
\t</div>
\t<hr style=\"clear:both\"/>            
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "</div>
";
    }

    // line 252
    public function block_navigation($context, array $blocks = array())
    {
        // line 253
        echo "<div class=\"row\">
        <div class=\"span4\">
        <center>
            ";
        // line 256
        if (((isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages")) > 0)) {
            echo "            
            <div class=\"pagination\">
                <ul>
                    ";
            // line 259
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages"))));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 260
                echo "                        ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                    // line 261
                    echo "                    <li class=\"prev ";
                    if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == 1)) {
                        echo " disabled";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bookshop_homepage", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) - 1))), "html", null, true);
                    echo "\">← Previous</a></li>
                        ";
                }
                // line 263
                echo "                    <li ";
                if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"))) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bookshop_homepage", array("page" => $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "</a></li> 
                   
                    ";
                // line 265
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                    // line 266
                    echo "                    <li class=\"next";
                    if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == (isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages")))) {
                        echo " disabled ";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bookshop_homepage", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) + 1))), "html", null, true);
                    echo "\">Next → </a></li>
                      ";
                }
                // line 268
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                </ul>
            </div>
             ";
        }
        // line 272
        echo "        </div>
        </center>";
    }

    public function getTemplateName()
    {
        return "searchBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 272,  542 => 269,  528 => 268,  518 => 266,  516 => 265,  504 => 263,  494 => 261,  491 => 260,  474 => 259,  468 => 256,  463 => 253,  460 => 252,  455 => 248,  437 => 244,  433 => 243,  427 => 242,  423 => 241,  416 => 237,  413 => 236,  396 => 235,  393 => 234,  390 => 233,  384 => 230,  379 => 227,  368 => 225,  364 => 224,  359 => 223,  357 => 222,  346 => 214,  301 => 172,  293 => 167,  288 => 164,  285 => 163,  265 => 147,  237 => 121,  233 => 111,  229 => 110,  225 => 109,  221 => 108,  217 => 107,  213 => 106,  208 => 105,  205 => 104,  111 => 14,  107 => 13,  102 => 12,  99 => 11,  93 => 9,  84 => 2,  81 => 1,  65 => 287,  54 => 279,  47 => 274,  44 => 252,  42 => 251,  39 => 250,  37 => 233,  34 => 163,  32 => 104,  30 => 11,  27 => 10,  25 => 1,);
    }
}
