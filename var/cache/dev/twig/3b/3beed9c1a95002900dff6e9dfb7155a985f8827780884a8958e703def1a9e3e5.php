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

/* login.html.twig */
class __TwigTemplate_c682ae5d833094213dd8ada68263369d3a76c1ada0fc7b8c8b1d6e75664d6ad6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "login.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["vm"]) || array_key_exists("vm", $context) ? $context["vm"] : (function () { throw new RuntimeError('Variable "vm" does not exist.', 4, $this->source); })()), "errorMessage", [], "any", false, false, false, 4))) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vm"]) || array_key_exists("vm", $context) ? $context["vm"] : (function () { throw new RuntimeError('Variable "vm" does not exist.', 5, $this->source); })()), "errorMessage", [], "any", false, false, false, 5), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "    <form method=\"post\" class=\"login-form\">
        <label>
            Adresse email :
            <input name=\"username\" type=\"email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vm"]) || array_key_exists("vm", $context) ? $context["vm"] : (function () { throw new RuntimeError('Variable "vm" does not exist.', 10, $this->source); })()), "lastUsername", [], "any", false, false, false, 10), "html", null, true);
        echo "\" placeholder=\"Adresse email\" required />
        </label>
        <label>
            Mot de passe :
            <input name=\"password\" type=\"password\" required />
        </label>
        <div>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ask_password_reset");
        echo "\" class=\"\">Mot de passe oublié ?</a>
        </div>
        <button>Se connecter</button>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  82 => 10,  77 => 7,  71 => 5,  68 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'base.html.twig' %}

{% block body %}
    {% if vm.errorMessage is not null %}
        {{ vm.errorMessage }}
    {% endif %}
    <form method=\"post\" class=\"login-form\">
        <label>
            Adresse email :
            <input name=\"username\" type=\"email\" value=\"{{ vm.lastUsername }}\" placeholder=\"Adresse email\" required />
        </label>
        <label>
            Mot de passe :
            <input name=\"password\" type=\"password\" required />
        </label>
        <div>
            <a href=\"{{ path('ask_password_reset') }}\" class=\"\">Mot de passe oublié ?</a>
        </div>
        <button>Se connecter</button>
    </form>

{% endblock %}
", "login.html.twig", "E:\\Documents\\Sites\\SDS-CLEAN\\templates\\login.html.twig");
    }
}
