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

/* search/index.html.twig */
class __TwigTemplate_05083bbed80aad1f1f476e65a154a96c912a07e2be7d073561ca159d7eed511c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello SearchController!";
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
                    <h3>Search Result</h3>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"section group\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "                    <div class=\"grid_1_of_4 images_1_of_4\">
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"><img width=\"212\" height=\"212\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/images/") . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 17)), "html", null, true);
            echo "\" alt=\"\" /></a>
                        <h2>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h2>
                        <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                        <p><span class=\"strike\">\$";
            // line 20
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 20) * 1.1), "html", null, true);
            echo "</span><span class=\"price\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo "</span></p>
                        <div class=\"button\"><span>
                            ";
            // line 22
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22), 0)) {
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\"  class=\"cart-button\">Add to Cart</a>
                            ";
            }
            // line 28
            echo "                        </span> </div>
                        <div class=\"button\"><span><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"details\">Details</a></span></div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
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
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  116 => 29,  113 => 28,  108 => 26,  103 => 25,  99 => 23,  97 => 22,  90 => 20,  86 => 19,  82 => 18,  76 => 17,  73 => 16,  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search/index.html.twig", "/var/www/symfony-project/templates/search/index.html.twig");
    }
}
