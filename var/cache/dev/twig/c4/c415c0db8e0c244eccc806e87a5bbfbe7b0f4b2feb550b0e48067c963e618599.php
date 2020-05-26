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
class __TwigTemplate_36fadcc0e1bf4e1074c24d74a4f7696cad3d3e3db4fb1af4c3c0059fb542f0eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CategoriesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"main\">
        <div class=\"content\">
            <div class=\"content_top\">
                <div class=\"heading\">
                    <h3>";
        // line 10
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"section group\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 15, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  158 => 32,  149 => 29,  146 => 28,  141 => 26,  136 => 25,  132 => 23,  130 => 22,  123 => 20,  119 => 19,  115 => 18,  109 => 17,  106 => 16,  102 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CategoriesController!{% endblock %}

{% block body %}
    <div class=\"main\">
        <div class=\"content\">
            <div class=\"content_top\">
                <div class=\"heading\">
                    <h3>{{ title | upper }}</h3>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"section group\">
                {% for category in categories %}
                    <div class=\"grid_1_of_4 images_1_of_4\">
                        <a href=\"{{ path('product', {slug: category.slug}) }}\"><img height=\"212\" width=\"212\"  src=\"{{ asset('assets/uploads/images/') ~ category.image }}\" alt=\"\" /></a>
                        <h2>{{ category.title }}</h2>
                        <p>{{ category.description }}</p>
                        <p><span class=\"strike\">\${{ category.price * 1.1 }}</span><span class=\"price\">\${{ category.price }}</span></p>
                        <div class=\"button\"><span>
                            {% if category.quantity == 0 %}
                                <span>Out of Stock</span>
                            {% else %}
                                <img src=\"{{ asset('assets/images/cart.jpg') }}\" alt=\"\" />
                                <a href=\"{{ path('cart_add', {id: category.id}) }}\"  class=\"cart-button\">Add to Cart</a>
                            {% endif %}
                        </span> </div>
                        <div class=\"button\"><span><a href=\"{{ path('product', {slug: category.slug}) }}\" class=\"details\">Details</a></span></div>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div>
        </div>
    </div>
{% endblock %}
", "categories/index.html.twig", "/var/www/symfony-project/templates/categories/index.html.twig");
    }
}
