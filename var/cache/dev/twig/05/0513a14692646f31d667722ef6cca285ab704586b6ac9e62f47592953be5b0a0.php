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

/* admin.html.twig */
class __TwigTemplate_577df7cfae866c2309a6e3201427862ffa502643d7e9dc926977975183ab5015 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/admin/admin.css"), "html", null, true);
        echo "\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</head>
<div class=\"container\">
</div>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container-fluid fixed-top bg-primary py-3\">
    <div class=\"row collapse show no-gutters d-flex h-100 position-relative\">
        <div class=\"col-3 px-0 w-sidebar navbar-collapse collapse d-none d-md-flex\">
            <!-- spacer col -->
        </div>
        <div class=\"col px-3 px-md-0\">
            <!-- toggler -->
            <a data-toggle=\"collapse\" href=\"#\" data-target=\".collapse\" role=\"button\" class=\"text-white p-1\">
                <i class=\"fa fa-bars fa-lg\"></i>
            </a>
        </div>
    </div>
</div>
<div class=\"container-fluid px-0\">
    <div class=\"row collapse show no-gutters d-flex h-100 position-relative\">
        <div class=\"col-3 p-0 h-100 w-sidebar navbar-collapse collapse d-none d-md-flex sidebar\">
            <!-- fixed sidebar -->
            <div class=\"navbar-dark bg-dark text-white position-fixed h-100 align-self-start w-sidebar\">
                <br><br>
                <h6 class=\"px-3 pt-3\">Admin<a data-toggle=\"collapse\" class=\"px-1 d-inline d-md-none text-white\" href=\"#\" data-target=\".collapse\"><i class=\"fa fa-bars\"></i></a></h6>
                <ul class=\"nav flex-column flex-nowrap text-truncate\">
                    <li class=\"nav-item\">
                        ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                        <a class=\"btn btn-link nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Products</a>
                        <a class=\"btn btn-link nav-link\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_content");
            echo "\">About us</a>
                        ";
        }
        // line 40
        echo "                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-link nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        echo "\">Categories</a>
                    </li>
";
        // line 47
        echo "                    <li>
                        <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
        echo "\" class=\"btn btn-link nav-link\">Order's</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col p-3\">
            <div class=\"product\" style=\"float: right;\">
                ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "                    ";
            if (0 === twig_compare("/admin", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "getRequestUri", [], "method", false, false, false, 56))) {
                // line 57
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_new");
                echo "\" class=\"btn btn-success\">Add product</a>
                        ";
            }
            // line 59
            echo "                ";
        } else {
            // line 60
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seller_insert");
            echo "\" class=\"btn btn-success\">Add product</a>
                ";
        }
        // line 62
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-danger\">Logout</a>
            </div>
            <br><br><br>
            ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        </div>
    </div>
</div>

";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 66
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 71,  223 => 66,  213 => 65,  195 => 8,  176 => 7,  164 => 73,  162 => 71,  156 => 67,  154 => 65,  147 => 62,  141 => 60,  138 => 59,  132 => 57,  129 => 56,  127 => 55,  117 => 48,  114 => 47,  109 => 42,  105 => 40,  100 => 38,  95 => 37,  93 => 36,  64 => 9,  62 => 8,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/admin/admin.css') }}\">
    <title>{% block title %}Admin!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
</head>
<div class=\"container\">
</div>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container-fluid fixed-top bg-primary py-3\">
    <div class=\"row collapse show no-gutters d-flex h-100 position-relative\">
        <div class=\"col-3 px-0 w-sidebar navbar-collapse collapse d-none d-md-flex\">
            <!-- spacer col -->
        </div>
        <div class=\"col px-3 px-md-0\">
            <!-- toggler -->
            <a data-toggle=\"collapse\" href=\"#\" data-target=\".collapse\" role=\"button\" class=\"text-white p-1\">
                <i class=\"fa fa-bars fa-lg\"></i>
            </a>
        </div>
    </div>
</div>
<div class=\"container-fluid px-0\">
    <div class=\"row collapse show no-gutters d-flex h-100 position-relative\">
        <div class=\"col-3 p-0 h-100 w-sidebar navbar-collapse collapse d-none d-md-flex sidebar\">
            <!-- fixed sidebar -->
            <div class=\"navbar-dark bg-dark text-white position-fixed h-100 align-self-start w-sidebar\">
                <br><br>
                <h6 class=\"px-3 pt-3\">Admin<a data-toggle=\"collapse\" class=\"px-1 d-inline d-md-none text-white\" href=\"#\" data-target=\".collapse\"><i class=\"fa fa-bars\"></i></a></h6>
                <ul class=\"nav flex-column flex-nowrap text-truncate\">
                    <li class=\"nav-item\">
                        {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"btn btn-link nav-link\" href=\"{{ path('admin') }}\">Products</a>
                        <a class=\"btn btn-link nav-link\" href=\"{{ path('admin_content') }}\">About us</a>
                        {% endif %}
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-link nav-link\" href=\"{{ path('admin_categories') }}\">Categories</a>
                    </li>
{#                    <li class=\"nav-item\">#}
{#                        <a class=\"btn btn-link nav-link\" href=\"#\">Seller</a>#}
{#                    </li>#}
                    <li>
                        <a href=\"{{ path('admin_order') }}\" class=\"btn btn-link nav-link\">Order's</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col p-3\">
            <div class=\"product\" style=\"float: right;\">
                {% if is_granted('ROLE_ADMIN') %}
                    {% if '/admin' == app.request.getRequestUri() %}
                    <a href=\"{{ path('add_new') }}\" class=\"btn btn-success\">Add product</a>
                        {% endif %}
                {% else %}
                    <a href=\"{{ path('seller_insert') }}\" class=\"btn btn-success\">Add product</a>
                {% endif %}
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">Logout</a>
            </div>
            <br><br><br>
            {% block body %}
            {% endblock %}
        </div>
    </div>
</div>

{% block javascripts %}
{% endblock %}
</body>
</html>
", "admin.html.twig", "/var/www/symfony-project/templates/admin.html.twig");
    }
}
