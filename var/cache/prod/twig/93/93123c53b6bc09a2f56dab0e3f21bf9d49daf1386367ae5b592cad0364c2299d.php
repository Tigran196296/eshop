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

/* categories/index.html.twig */
class __TwigTemplate_84c7f38d9d2cf22b527d5cadf3bba23528694e71c999a44ffd7c432049e75f29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "categories/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello CategoriesController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"main\">
        <div class=\"content\">
            <div class=\"content_top\">
                <div class=\"heading\">
                    <h3>";
        // line 10
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["title"] ?? null)), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"section group\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "                    <div class=\"grid_1_of_4 images_1_of_4\">
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"><img height=\"212\" width=\"212\"  src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/images/") . twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 17)), "html", null, true);
            echo "\" alt=\"\" /></a>
                        <h2>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h2>
                        <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                        <p><span class=\"strike\">\$";
            // line 20
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 20) * 1.1), "html", null, true);
            echo "</span><span class=\"price\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo "</span></p>
                        <div class=\"button\"><span>
                            ";
            // line 22
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "quantity", [], "any", false, false, false, 22), 0)) {
                // line 23
                echo "                                <span>Out of Stock</span>
                            ";
            } else {
                // line 25
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cart.jpg"), "html", null, true);
                echo "\" alt=\"\" />
                                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\"  class=\"cart-button\">Add to Cart</a>
                            ";
            }
            // line 28
            echo "                        </span> </div>
                        <div class=\"button\"><span><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"details\">Details</a></span></div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>
        <div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  119 => 29,  116 => 28,  111 => 26,  106 => 25,  102 => 23,  100 => 22,  93 => 20,  89 => 19,  85 => 18,  79 => 17,  76 => 16,  72 => 15,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "categories/index.html.twig", "/var/www/symfony-project/templates/categories/index.html.twig");
    }
}
