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
class __TwigTemplate_a977d70976c49a1fdd01a5c470e15258 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"example-wrapper\">

    ";
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["t_array"]) || array_key_exists("t_array", $context) ? $context["t_array"] : (function () { throw new RuntimeError('Variable "t_array" does not exist.', 10, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["team"]) {
            // line 11
            echo "
        ";
            // line 13
            echo "        ";
            $context["hierarchie"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "hierarchie", [], "any", false, false, false, 13), "/");
            // line 14
            echo "
        ";
            // line 16
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["hierarchie"] ?? null), 0, [], "array", true, true, false, 16)) {
                // line 17
                echo "            ";
                // line 18
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["hierarchie"]) || array_key_exists("hierarchie", $context) ? $context["hierarchie"] : (function () { throw new RuntimeError('Variable "hierarchie" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18) === "2")) {
                    // line 19
                    echo "                ";
                    // line 20
                    echo "                ";
                    $context["className"] = "deuxieme";
                    // line 21
                    echo "
            ";
                    // line 23
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["hierarchie"]) || array_key_exists("hierarchie", $context) ? $context["hierarchie"] : (function () { throw new RuntimeError('Variable "hierarchie" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23) === "3")) {
                    // line 24
                    echo "                ";
                    $context["className"] = "troisieme";
                    // line 25
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["hierarchie"]) || array_key_exists("hierarchie", $context) ? $context["hierarchie"] : (function () { throw new RuntimeError('Variable "hierarchie" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25) === "4")) {
                    // line 26
                    echo "                ";
                    $context["className"] = "quatrieme";
                    // line 27
                    echo "
            ";
                }
                // line 29
                echo "        ";
            }
            // line 30
            echo "        ";
            // line 31
            echo "        <div class=\"collab\">
            <a class=\"collabs ";
            // line 32
            if (array_key_exists("className", $context)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 32, $this->source); })()), "html", null, true);
                echo " ";
            }
            echo "\" href=\"model?teamId=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">

            <img class=\"photo-profil\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["team"], "photo", [], "any", false, false, false, 34)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "firstname", [], "any", false, false, false, 34), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "lastname", [], "any", false, false, false, 34), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["team"], "position", [], "any", false, false, false, 34), 0, [], "array", false, false, false, 34), "getLabel", [], "method", false, false, false, 34), "html", null, true);
            echo "

            ";
            // line 37
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["team"], "position", [], "any", false, false, false, 37));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 38
                echo "                ";
                // line 39
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39) >= 1)) {
                    // line 40
                    echo "                    ";
                    // line 41
                    echo "                    /";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["team"], "position", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41), [], "array", false, false, false, 41), "getLabel", [], "method", false, false, false, 41), "html", null, true);
                    echo "
                ";
                }
                // line 43
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            ";
            // line 45
            echo "            )</a>
        </div>

        ";
            // line 49
            echo "            ";
            // line 50
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  250 => 51,  236 => 50,  234 => 49,  229 => 45,  227 => 44,  213 => 43,  207 => 41,  205 => 40,  202 => 39,  200 => 38,  182 => 37,  171 => 34,  160 => 32,  157 => 31,  155 => 30,  152 => 29,  148 => 27,  145 => 26,  142 => 25,  139 => 24,  136 => 23,  133 => 21,  130 => 20,  128 => 19,  125 => 18,  123 => 17,  120 => 16,  117 => 14,  114 => 13,  111 => 11,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Acceuil{% endblock %}

{% block body %}

<div class=\"example-wrapper\">

    {# Boucle du tableaux t_array envoyer du controller #}
    {% for key, team in t_array %}

        {# équivalent php \"explode()\" #}
        {% set hierarchie = team.hierarchie|split('/') %}

        {# Si le tableau hierarchie possède une ligne a l'index 0 #}
        {% if hierarchie[0] is defined %}
            {# same as() (équivalent php \"===\") #}
            {% if hierarchie[0] is same as('2') %}
                {# Alors création de variable className #}
                {% set className = 'deuxieme' %}

            {# Idem #}
            {% elseif hierarchie[0] is same as('3') %}
                {% set className = 'troisieme' %}
            {% elseif hierarchie[0] is same as('4') %}
                {% set className = 'quatrieme' %}

            {% endif %}
        {% endif %}
        {# Ouvreture d'un block <a> avec un attribut class qui si la variable className est defini alors appel de la variable className #}
        <div class=\"collab\">
            <a class=\"collabs {% if className is defined %} {{className}} {% endif %}\" href=\"model?teamId={{team.id}}\">

            <img class=\"photo-profil\" src=\"{{asset(team.photo)}}\">{{team.firstname}} {{team.lastname}} ( {{team.position[0].getLabel()}}

            {# Boucle du tableau team.position #}
            {% for position in team.position %}
                {# Si l'index de la loop en partant de 0 est supérieur ou égal a 1 #}
                {% if loop.index0 >= 1 %}
                    {# Alors affichage des autres label #}
                    /{{team.position[loop.index0].getLabel()}}
                {% endif %}
            {% endfor %}
            {# Fermeture des parenthèses et de la balise <a> #}
            )</a>
        </div>

        {# équivalent php \"var_dump()\" #}
            {# {{dump(loop)}} #}
    {% endfor %}
</div>
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\tp-symfony\\templates\\default\\index.html.twig");
    }
}
