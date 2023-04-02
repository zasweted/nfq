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

/* pages/edit.html.twig */
class __TwigTemplate_55284c7ccf541db2503409beda63125e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'edit' => [$this, 'block_edit'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        // line 4
        echo "    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"fw-light\">Edit Page</h1>
                <h2 class=\"fw-light\">for</h2>
                <h2 class=\"fw-light\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
            </div>
        </div>
    </section>
    <section class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17), "html", null, true);
        echo "\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                
                        <p class=\"card-text\">
                            ";
        // line 22
        $context["cutoff"] = 200;
        // line 23
        echo "                            ";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "text", [], "any", false, false, false, 23)) > (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 23, $this->source); })()))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "text", [], "any", false, false, false, 23), 0, (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 23, $this->source); })())) . "...")) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "text", [], "any", false, false, false, 23))), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-12 mb-5\">
                <div class=\"container\" style=\"padding: 25px 25px 0 25px; border: 1px solid #00000050; border-radius: 0.5rem; box-shadow: 0 0 10px #00000050;\">
            <h2 class=\"text-center mb-2\"> Edit Form</h2>
                        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'widget');
        echo "
                        <div class=\"btn-group my-4\">
                            <button type=\"submit\" class=\"btn btn-warning px-4\">Update</button>
                            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary\">Back</a>
                        </div>
                        ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
                    ";
        // line 39
        echo "                </div>
            </div>
        </div>
    </section>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  117 => 37,  112 => 35,  106 => 32,  102 => 31,  90 => 23,  88 => 22,  82 => 19,  77 => 17,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block edit %}
    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"fw-light\">Edit Page</h1>
                <h2 class=\"fw-light\">for</h2>
                <h2 class=\"fw-light\">{{ article.title }}</h2>
            </div>
        </div>
    </section>
    <section class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <img src=\"{{ article.image }}\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ article.title }}</h5>
                
                        <p class=\"card-text\">
                            {% set cutoff = 200 %}
                            {{ article.text|length > cutoff ? article.text|slice(0, cutoff) ~ '...' : article.text  }}
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-12 mb-5\">
                <div class=\"container\" style=\"padding: 25px 25px 0 25px; border: 1px solid #00000050; border-radius: 0.5rem; box-shadow: 0 0 10px #00000050;\">
            <h2 class=\"text-center mb-2\"> Edit Form</h2>
                        {{ form_start(form) }}
                        {{ form_widget(form) }}
                        <div class=\"btn-group my-4\">
                            <button type=\"submit\" class=\"btn btn-warning px-4\">Update</button>
                            <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary\">Back</a>
                        </div>
                        {{ form_end(form) }}
                    {# </form> #}
                </div>
            </div>
        </div>
    </section>
    
{% endblock %}", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
