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
class __TwigTemplate_99f092afea4ab2c782a58cc8f90e93f19671272ce675b5bcb4d731d8603ca6f0 extends Template
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
            if (0 === twig_compare("/admin", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 56), "getRequestUri", [], "method", false, false, false, 56))) {
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
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "            ";
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  185 => 71,  181 => 66,  177 => 65,  171 => 8,  164 => 7,  158 => 73,  156 => 71,  150 => 67,  148 => 65,  141 => 62,  135 => 60,  132 => 59,  126 => 57,  123 => 56,  121 => 55,  111 => 48,  108 => 47,  103 => 42,  99 => 40,  94 => 38,  89 => 37,  87 => 36,  58 => 9,  56 => 8,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.html.twig", "/var/www/symfony-project/templates/admin.html.twig");
    }
}
