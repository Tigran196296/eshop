<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_6ebf09261af4957aab546b4a6e0b1eb237d7cefda9ec63f9ba761855a3349368 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>
<div class=\"wrap\">
    <div class=\"header\">
        <div class=\"header_top\">
            <div class=\"logo\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
            </div>
            <div class=\"header_top_right\">
                <div class=\"search_box\">
                    <form method=\"post\">
                        <input placeholder=\"Search product\" type=\"text\" name=\"search\"><input type=\"submit\" value=\"Փնտրել\" style=\"height: 41px\">
                    </form>
                </div>
                <div class=\"shopping_cart\">
                    <div class=\"cart\">
                        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" title=\"View my shopping cart\" rel=\"nofollow\">
                            <strong class=\"opencart\"> </strong>
                            <span class=\"cart_title\">Զամբյուղ</span>
                            ";
        // line 32
        ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 32), "get", [0 => "cart", 1 => []], "method", false, false, false, 32))) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 32), "get", [0 => "cart", 1 => []], "method", false, false, false, 32)), "html", null, true))) : (print ("(empty)")));
        echo "
                        </a>
                    </div>
                </div>
                <div class=\"currency\" title=\"currency\">
                    <script type=\"text/javascript\">
                        function DropDown(el) {
                            this.dd = el;
                            this.initEvents();
                        }
                        DropDown.prototype = {
                            initEvents : function() {
                                var obj = this;

                                obj.dd.on('click', function(event){
                                    \$(this).toggleClass('active');
                                    event.stopPropagation();
                                });
                            }
                        }

                        \$(function() {

                            var dd = new DropDown( \$('#currency') );

                            \$(document).click(function() {
                                // all dropdowns
                                \$('.wrapper-dropdown').removeClass('active');
                            });

                        });

                    </script>
                </div>
                <div class=\"login\">
                    <span><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/login.png"), "html", null, true);
        echo "\" alt=\"\" title=\"login\"/></a></span>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"h_menu\">
            <a id=\"touch-menu\" class=\"mobile-menu\" href=\"#\">Menu</a>
            <nav>
                <ul class=\"menu list-unstyled\">
                    <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Գլխավոր</a></li>
                    <li class=\"activate\"><a href=\"#\">Պրոդուկտներ</a>
                        <ul class=\"sub-menu list-unstyled\">
                            <div class=\"nag-mother-list\">
                                <div class=\"navg-drop-main\">
                                    <div class=\"nav-drop\">
                                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 83), "get", [0 => "categories", 1 => []], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 84
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories", ["title" => twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 84), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">Մեր մասին</a></li>
                    <div class=\"clear\"> </div>
                </ul>
            </nav>
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        </div>
        ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "
        <div class=\"footer\">
            <div class=\"wrapper\">
                <div class=\"section group\">
                    <div class=\"col_1_of_4 span_1_of_4\">
                        <h4>Information</h4>
                        <ul>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">Customer Service</a></li>
                            <li><a href=\"#\"><span>Advanced Search</span></a></li>
                            <li><a href=\"#\">Orders and Returns</a></li>
                            <li><a href=\"#\"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    <div class=\"col_1_of_4 span_1_of_4\">
                        <h4>Why buy from us</h4>
                        <ul>
                            <li><a href=\"about.html\">About Us</a></li>
                            <li><a href=\"faq.html\">Customer Service</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"contact.html\"><span>Site Map</span></a></li>
                            <li><a href=\"preview-2.html\"><span>Search Terms</span></a></li>
                        </ul>
                    </div>
                    <div class=\"col_1_of_4 span_1_of_4\">
                        <h4>My account</h4>
                        <ul>
                            <li><a href=\"contact.html\">Sign In</a></li>
                            <li><a href=\"index.html\">View Cart</a></li>
                            <li><a href=\"#\">My Wishlist</a></li>
                            <li><a href=\"#\">Track My Order</a></li>
                            <li><a href=\"faq.html\">Help</a></li>
                        </ul>
                    </div>
                    <div class=\"col_1_of_4 span_1_of_4\">
                        <h4>Contact</h4>
                        <ul>
                            <li><span>+91-123-456789</span></li>
                            <li><span>+00-123-000000</span></li>
                        </ul>
                        <div class=\"social-icons\">
                            <h4>Follow Us</h4>
                            <ul>
                                <li class=\"facebook\"><a href=\"#\" target=\"_blank\"> </a></li>
                                <li class=\"twitter\"><a href=\"#\" target=\"_blank\"> </a></li>
                                <li class=\"googleplus\"><a href=\"#\" target=\"_blank\"> </a></li>
                                <li class=\"contact\"><a href=\"#\" target=\"_blank\"> </a></li>
                                <div class=\"clear\"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"copy_right\">
                    <p>&copy; 2020 Արման Պապյան Դիպլոմային ԵԿՄ ԻԿՄ 5-րդ կուռս հեռակա </p>
                </div>
            </div>
        </div>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                /*
                var defaults = {
                      containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                 };
                */

                \$().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href=\"#\" id=\"toTop\" style=\"display: block;\"><span id=\"toTopHover\" style=\"opacity: 1;\"></span></a>
        <link href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <script defer src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(function(){
                SyntaxHighlighter.all();
            });
            \$(window).load(function(){
                \$('.flexslider').flexslider({
                    animation: \"slide\",
                    start: function(slider){
                        \$('body').removeClass('loading');
                    }
                });
            });
        </script>
        <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/move-top.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/easing.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 199
        $this->displayBlock('javascripts', $context, $blocks);
        // line 200
        echo "</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "







        ";
    }

    // line 199
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 199,  329 => 98,  325 => 97,  319 => 12,  312 => 4,  306 => 200,  304 => 199,  300 => 198,  296 => 197,  292 => 196,  288 => 195,  271 => 181,  267 => 180,  192 => 107,  190 => 97,  185 => 95,  178 => 91,  171 => 86,  160 => 84,  156 => 83,  147 => 77,  132 => 67,  94 => 32,  88 => 29,  73 => 19,  65 => 13,  63 => 12,  56 => 8,  52 => 7,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/symfony-project/templates/base.html.twig");
    }
}
