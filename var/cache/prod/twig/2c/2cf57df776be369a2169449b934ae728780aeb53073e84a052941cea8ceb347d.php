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

/* default/index.html.twig */
class __TwigTemplate_b3f356776d132f453cf0d76fca632360d93765cb2ec62fe671fe5283f69e26eb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello DefaultController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    <div class=\"main\">
        <div class=\"content\">
            <div class=\"content_top\">
                <div class=\"heading\">
                    <h3>New Products</h3>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"section group\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "                <div class=\"grid_1_of_4 images_1_of_4\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"><img width=\"212\" height=\"212\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/images/") . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" alt=\"\" /></a>
                    <h2>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h2>
                    <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                    <p><span class=\"strike\">\$";
            // line 22
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22) * 1.1), "html", null, true);
            echo "</span><span class=\"price\">\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22), "html", null, true);
            echo "</span></p>
                    <div class=\"button\"><span>
                            ";
            // line 24
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24), 0)) {
                // line 25
                echo "                                <span>Out of Stock</span>
                            ";
            } else {
                // line 27
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cart.jpg"), "html", null, true);
                echo "\" alt=\"\" />
                                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\"  class=\"cart-button\">Ավելացնել</a>
                            ";
            }
            // line 30
            echo "                        </span> </div>
                    <div class=\"button\"><span><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"details\">Մանրամասն</a></span></div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
        <div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  118 => 31,  115 => 30,  110 => 28,  105 => 27,  101 => 25,  99 => 24,  92 => 22,  88 => 21,  84 => 20,  78 => 19,  75 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "/var/www/symfony-project/templates/default/index.html.twig");
    }
}
