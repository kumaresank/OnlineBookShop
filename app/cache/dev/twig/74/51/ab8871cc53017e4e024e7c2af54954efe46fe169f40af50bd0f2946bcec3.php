<?php

/* bookshopBundle:Default:index.html.twig */
class __TwigTemplate_7451ab8871cc53017e4e024e7c2af54954efe46fe169f40af50bd0f2946bcec3 extends Twig_Template
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
        // line 9
        echo "      
";
        // line 10
        $this->displayBlock('style', $context, $blocks);
        // line 27
        $this->displayBlock('script', $context, $blocks);
        // line 111
        echo "      ";
        $this->displayBlock('menu', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('content', $context, $blocks);
        // line 201
        echo "

";
        // line 203
        $this->displayBlock('navigation', $context, $blocks);
        // line 249
        echo "\t\t</body>
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
\t\t<link rel=\"icon\" 
      type=\"image/png\" 
      href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/favicon.jpg"), "html", null, true);
        echo "\"/>
";
    }

    // line 10
    public function block_style($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signup.css"), "html", null, true);
        echo "\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />
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
";
    }

    // line 27
    public function block_script($context, array $blocks = array())
    {
        // line 28
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popwindow.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popsignup.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
      <script>
      \$(document).ready(function() {   
      \$(\".buy\").click(function() {
\t\t\t\t var id = \$(this).attr(\"id\");
\t\t\t\t  \t  \$.ajax({ 
\t\t\t\t\t  url : \"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("bookshop_cart");
        echo "\" ,
\t\t\t\t\t  type : \"POST\" ,
\t\t\t\t\t  dataType : 'json' ,
\t\t\t\t\t  ";
        // line 41
        if (array_key_exists("current_page", $context)) {
            // line 42
            echo "\t\t\t\t\t  data : {'page':";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo " , 'id': id } ,
\t\t\t\t\t  ";
        }
        // line 44
        echo "\t\t\t\t\t  ";
        if (array_key_exists("page", $context)) {
            // line 45
            echo "\t\t\t\t\t  data : {'page':1 , 'id': ";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo " } ,
\t\t\t\t\t  ";
        }
        // line 47
        echo "\t\t\t\t\t   success : function(msg)
\t\t\t\t\t  {
\t\t\t\t\t\t  if(msg == \"Please Login First\")
\t\t\t\t\t\t  {
\t\t\t\t\t\t\t  alert(msg);
\t\t\t\t\t\t  }
\t\t\t\t\t\t  else
\t\t\t\t\t\t  {
\t\t\t\t\t\t  \$(\".cart-count\").html(\"Cart(\" +msg+ \")\");\t
\t\t\t\t\t\t  }
\t\t\t\t\t  }\t,
\t\t\t\t\t  error : function()
\t\t\t\t\t  {
\t\t\t\t\t  alert(\"error\");
\t\t\t\t\t  }\t\t\t\t  
\t\t\t\t\t  });
\t\t\t\t  });
\t\t\t
\t});

      </script>
   <script>
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
        // line 94
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

    // line 111
    public function block_menu($context, array $blocks = array())
    {
        // line 112
        echo "      <body>
\t\t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/header.jpg"), "html", null, true);
        echo "\" style=\"width:1000px;height:130px;\">
\t\t\t</div>
\t\t\t<div class=\"menu\">
<div class=\"home\">
\t\t\t\t
\t\t\t\t\t<a class=\"hm\" href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("bookshop_homepage");
        echo "\">Home</a>
\t\t\t\t\t</div>
\t\t\t\t\t<style>
\t\t\t\t\t.search
\t\t\t\t\t{
\t\t\t\t\tmargin-left:200px;
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
\t\t\t\t\twidth:300px
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
        // line 162
        echo $this->env->getExtension('routing')->getPath("search_search");
        echo "\" class=\"search\">
<ul type=\"none\">
        <li><input id=\"searchtext\" type=\"text\" name = \"srtxt\" placeholder=\"Search here..\" required=\"\" autocomplete=\"off\"></li>
        <li><input id=\"searchbutton\" type=\"submit\" value=\"Search\"></li>
</ul>
</form>
</fieldset>
\t\t\t\t\t
<div class=\"login\">
";
        // line 171
        if (array_key_exists("name", $context)) {
            // line 172
            echo "<span style=\"line-height:30px;padding-left:30px;color:white\">Hi! ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " </span>
<a href=\"";
            // line 173
            echo $this->env->getExtension('routing')->getPath("bookshop_logout");
            echo "\" class=\"username\">Logout</a> &nbsp;&nbsp; 
<a href=\"";
            // line 174
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
            // line 176
            echo "<a href=\"#signup-box\" class=\"login-window\">SignUp</a> &nbsp;&nbsp; 
<a href=\"#login-box\" class=\"signup-window\">SignIn</a>
";
        }
        // line 179
        echo "</div>
</div>
";
    }

    // line 183
    public function block_content($context, array $blocks = array())
    {
        // line 184
        echo "<div class=\"contetnt\">
";
        // line 185
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
            // line 186
            echo "<div class=\"booklist\">
    <img id=\"img\" src=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookpath")), "html", null, true);
            echo "\">
\t</div>
\t<div class=\"book_details\">
\t<br/>
\t\t<b>Book Name:</b> &nbsp; <span class=\"bookname\" style=\"color:#888888\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookname"), "html", null, true);
            echo "</span>
\t\t<p><b>Publisher Name:</b> &nbsp; <span class=\"publishername\" style=\"color:#888888\">";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookpublisher"), "html", null, true);
            echo "</span><a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" class=\"buy\" href=\"#\" >Buy</a></p>
\t\t<p><b>Author Name:</b> &nbsp; <span style=\"color:#888888\"></span><span class=\"author\" style=\"color:#888888\">";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookauthor"), "html", null, true);
            echo "</span></p>
\t\t<p><b>Price:</b> &nbsp; <span style=\"color:#888888\">Rs.</span><span class=\"price4\" style=\"color:#888888\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "bookprice"), "html", null, true);
            echo "</span></p>
\t</div>
\t<hr style=\"clear:both\"/>            
\t
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
        // line 199
        echo "</div>
";
    }

    // line 203
    public function block_navigation($context, array $blocks = array())
    {
        // line 204
        echo "<div class=\"row\">
        <div class=\"span4\">
        <center>
        ";
        // line 207
        if (array_key_exists("total_pages", $context)) {
            // line 208
            echo "            ";
            if (((isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages")) > 0)) {
                echo "            
            <div class=\"pagination\">
                <ul>
                    ";
                // line 211
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
                    // line 212
                    echo "                        ";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 213
                        echo "                    <li class=\"prev ";
                        if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == 1)) {
                            echo " disabled";
                        }
                        echo "\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bookshop_homepage", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) - 1))), "html", null, true);
                        echo "\">← Previous</a></li>
                        ";
                    }
                    // line 215
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
                    // line 217
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                        // line 218
                        echo "                    <li class=\"next";
                        if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == (isset($context["total_pages"]) ? $context["total_pages"] : $this->getContext($context, "total_pages")))) {
                            echo " disabled ";
                        }
                        echo "\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bookshop_homepage", array("page" => ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) + 1))), "html", null, true);
                        echo "\">Next → </a></li>
                      ";
                    }
                    // line 220
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
                // line 221
                echo "                </ul>
            </div>
             ";
            }
            // line 224
            echo "             ";
        }
        // line 225
        echo "        </div>
        </center>
    </div>
    
    
    <div id=\"login-box\" class=\"login-popup\">
        <a href=\"#\" class=\"close\">x</a>
          <form action =\"";
        // line 232
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
        // line 240
        echo $this->env->getExtension('routing')->getPath("bookshop_signup");
        echo "\" method=\"post\">
\t\t\t<input type=\"text\" name=\"name\" placeholder=\"Enter Your Name\" required></br>
\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Enter your Email Address\" required></br>
\t\t\t<input type=\"password\" name=\"new_pass\" placeholder=\"Type New Password\" required></br>
\t\t\t<input type=\"password\" name=\"retype_pass\" placeholder=\"Retype Password\" required></br>
\t\t\t<input class=\"signup_button\" type=\"submit\" value=\"Create Account\">
\t\t</form>
\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "bookshopBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  516 => 240,  505 => 232,  496 => 225,  493 => 224,  488 => 221,  474 => 220,  464 => 218,  462 => 217,  450 => 215,  440 => 213,  437 => 212,  420 => 211,  413 => 208,  411 => 207,  406 => 204,  403 => 203,  398 => 199,  379 => 194,  375 => 193,  369 => 192,  365 => 191,  358 => 187,  355 => 186,  338 => 185,  335 => 184,  332 => 183,  326 => 179,  321 => 176,  310 => 174,  306 => 173,  301 => 172,  299 => 171,  287 => 162,  242 => 120,  234 => 115,  229 => 112,  226 => 111,  205 => 94,  156 => 47,  150 => 45,  147 => 44,  141 => 42,  139 => 41,  133 => 38,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  107 => 28,  104 => 27,  87 => 14,  83 => 13,  79 => 12,  74 => 11,  71 => 10,  65 => 8,  57 => 2,  54 => 1,  48 => 249,  46 => 203,  42 => 201,  40 => 183,  37 => 182,  34 => 111,  32 => 27,  30 => 10,  27 => 9,  25 => 1,);
    }
}
