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

/* cart/index.html.twig */
class __TwigTemplate_7f4a043d9638e34e7ec8692065a451d0a518057a5b33905d363b6a2b98d81d27 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello CartController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (1 === twig_compare(twig_length_filter($this->env, ($context["items"] ?? null)), 0)) {
            // line 7
            echo "<table class=\"table\">
    <thead>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "        <tr>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 21), "price", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 23), "price", [], "any", false, false, false, 23) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 23)), "html", null, true);
                echo "</td>
            <td>
                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
                    <i class=\"fas fa-trash\">Delete</i>
                </a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"3\" class=\"text-right\">Total :</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-primary\">Order</a></td>
    </tr>
    </tfoot>
</table>
";
        } else {
            // line 41
            echo "    <p><h1 style=\"text-align: center\">Cart is empty!</h1></p>
";
        }
        // line 43
        echo "    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
";
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  127 => 41,  119 => 36,  115 => 35,  109 => 31,  97 => 25,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  77 => 19,  73 => 18,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/var/www/symfony-project/templates/cart/index.html.twig");
    }
}
