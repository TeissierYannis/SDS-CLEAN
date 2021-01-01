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

/* @email/zurb_2/notification/body.html.twig */
class __TwigTemplate_abc4fa82ae30e45bd8ed8d87b018e774e7af3207be354169caca43dd4210fbb4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
            'footer' => [$this, 'block_footer'],
            'footer_content' => [$this, 'block_footer_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@email/zurb_2/notification/body.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@email/zurb_2/notification/body.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<html>
<head>
<style>
    ";
        // line 5
        $this->displayBlock('style', $context, $blocks);
        // line 9
        echo "</style>
</head>
<body>
<spacer size=\"32\"></spacer>
<wrapper class=\"body\">
    <container class=\"body_";
        // line 14
        echo (((0 === twig_compare("urgent", (isset($context["importance"]) || array_key_exists("importance", $context) ? $context["importance"] : (function () { throw new RuntimeError('Variable "importance" does not exist.', 14, $this->source); })())))) ? ("alert") : ((((0 === twig_compare("high", (isset($context["importance"]) || array_key_exists("importance", $context) ? $context["importance"] : (function () { throw new RuntimeError('Variable "importance" does not exist.', 14, $this->source); })())))) ? ("warning") : ("default"))));
        echo "\">
        <spacer size=\"16\"></spacer>
        <row>
            <columns large=\"12\" small=\"12\">
                ";
        // line 18
        $this->displayBlock('lead', $context, $blocks);
        // line 24
        echo "
                ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
                ";
        // line 33
        $this->displayBlock('action', $context, $blocks);
        // line 39
        echo "
                ";
        // line 40
        $this->displayBlock('exception', $context, $blocks);
        // line 46
        echo "            </columns>
        </row>

        <wrapper class=\"secondary\">
            <spacer size=\"16\"></spacer>
            ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "        </wrapper>
    </container>
</wrapper>
</body>
</html>
";
        $___internal_a5c70e4afb9cab655bcc78547bc26676d321dbb138bc1fa0ac9ec16e85992252_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css(Twig\Extra\Inky\twig_inky($___internal_a5c70e4afb9cab655bcc78547bc26676d321dbb138bc1fa0ac9ec16e85992252_));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "        ";
        echo twig_source($this->env, "@email/zurb_2/main.css");
        echo "
        ";
        // line 7
        echo twig_source($this->env, "@email/zurb_2/notification/local.css");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_lead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lead"));

        // line 19
        echo "                    <small><strong>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["importance"]) || array_key_exists("importance", $context) ? $context["importance"] : (function () { throw new RuntimeError('Variable "importance" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "</strong></small>
                    <p class=\"lead\">
                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })()), "subject", [], "any", false, false, false, 21), "html", null, true);
        echo "
                    </p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "                    ";
        if ((isset($context["markdown"]) || array_key_exists("markdown", $context) ? $context["markdown"] : (function () { throw new RuntimeError('Variable "markdown" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "                        ";
            echo twig_include($this->env, $context, "@email/zurb_2/notification/content_markdown.html.twig");
            echo "
                    ";
        } else {
            // line 29
            echo "                        ";
            echo nl2br(twig_escape_filter($this->env, (((isset($context["raw"]) || array_key_exists("raw", $context) ? $context["raw"] : (function () { throw new RuntimeError('Variable "raw" does not exist.', 29, $this->source); })())) ? ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 29, $this->source); })())) : ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 29, $this->source); })()))), "html", null, true));
            echo "
                    ";
        }
        // line 31
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        // line 34
        echo "                    ";
        if ((isset($context["action_url"]) || array_key_exists("action_url", $context) ? $context["action_url"] : (function () { throw new RuntimeError('Variable "action_url" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                        <spacer size=\"16\"></spacer>
                        <button href=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["action_url"]) || array_key_exists("action_url", $context) ? $context["action_url"] : (function () { throw new RuntimeError('Variable "action_url" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["action_text"]) || array_key_exists("action_text", $context) ? $context["action_text"] : (function () { throw new RuntimeError('Variable "action_text" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "</button>
                    ";
        }
        // line 38
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_exception($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "exception"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "exception"));

        // line 41
        echo "                    ";
        if ((isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                        <spacer size=\"16\"></spacer>
                        <p><em>Exception stack trace attached.</em></p>
                    ";
        }
        // line 45
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "                <row>
                    <columns small=\"12\" large=\"6\">
                        ";
        // line 54
        $this->displayBlock('footer_content', $context, $blocks);
        // line 57
        echo "                    </columns>
                </row>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_footer_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_content"));

        // line 55
        echo "                            <p><small>Notification e-mail sent by Symfony</small></p>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@email/zurb_2/notification/body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 55,  297 => 54,  285 => 57,  283 => 54,  279 => 52,  269 => 51,  259 => 45,  254 => 42,  251 => 41,  241 => 40,  231 => 38,  224 => 36,  221 => 35,  218 => 34,  208 => 33,  198 => 31,  192 => 29,  186 => 27,  183 => 26,  173 => 25,  160 => 21,  154 => 19,  144 => 18,  132 => 7,  127 => 6,  117 => 5,  107 => 1,  99 => 60,  97 => 51,  90 => 46,  88 => 40,  85 => 39,  83 => 33,  80 => 32,  78 => 25,  75 => 24,  73 => 18,  66 => 14,  59 => 9,  57 => 5,  52 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inky_to_html|inline_css %}
<html>
<head>
<style>
    {% block style %}
        {{ source(\"@email/zurb_2/main.css\") }}
        {{ source(\"@email/zurb_2/notification/local.css\") }}
    {% endblock %}
</style>
</head>
<body>
<spacer size=\"32\"></spacer>
<wrapper class=\"body\">
    <container class=\"body_{{ (\"urgent\" == importance ? \"alert\" : (\"high\" == importance ? \"warning\" : \"default\")) }}\">
        <spacer size=\"16\"></spacer>
        <row>
            <columns large=\"12\" small=\"12\">
                {% block lead %}
                    <small><strong>{{ importance|upper }}</strong></small>
                    <p class=\"lead\">
                        {{ email.subject }}
                    </p>
                {% endblock %}

                {% block content %}
                    {% if markdown %}
                        {{ include('@email/zurb_2/notification/content_markdown.html.twig') }}
                    {% else %}
                        {{ (raw ? content|raw : content)|nl2br }}
                    {% endif %}
                {% endblock %}

                {% block action %}
                    {% if action_url %}
                        <spacer size=\"16\"></spacer>
                        <button href=\"{{ action_url }}\">{{ action_text }}</button>
                    {% endif %}
                {% endblock %}

                {% block exception %}
                    {% if exception %}
                        <spacer size=\"16\"></spacer>
                        <p><em>Exception stack trace attached.</em></p>
                    {% endif %}
                {% endblock %}
            </columns>
        </row>

        <wrapper class=\"secondary\">
            <spacer size=\"16\"></spacer>
            {% block footer %}
                <row>
                    <columns small=\"12\" large=\"6\">
                        {% block footer_content %}
                            <p><small>Notification e-mail sent by Symfony</small></p>
                        {% endblock %}
                    </columns>
                </row>
            {% endblock %}
        </wrapper>
    </container>
</wrapper>
</body>
</html>
{% endapply %}
", "@email/zurb_2/notification/body.html.twig", "E:\\Documents\\Sites\\SDS-CLEAN\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\body.html.twig");
    }
}
