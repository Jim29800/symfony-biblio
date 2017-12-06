<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98ffb4ed34c0e01447cad8c56d8f2be4cfaa75cd3c25e874cb40923928d17b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ffb4ed34c0e01447cad8c56d8f2be4cfaa75cd3c25e874cb40923928d17b7e->enter($__internal_98ffb4ed34c0e01447cad8c56d8f2be4cfaa75cd3c25e874cb40923928d17b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_59415eadba08b0fe7fd12c41854ddba005f172ef73b73411b89f62f0e52db47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59415eadba08b0fe7fd12c41854ddba005f172ef73b73411b89f62f0e52db47d->enter($__internal_59415eadba08b0fe7fd12c41854ddba005f172ef73b73411b89f62f0e52db47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98ffb4ed34c0e01447cad8c56d8f2be4cfaa75cd3c25e874cb40923928d17b7e->leave($__internal_98ffb4ed34c0e01447cad8c56d8f2be4cfaa75cd3c25e874cb40923928d17b7e_prof);

        
        $__internal_59415eadba08b0fe7fd12c41854ddba005f172ef73b73411b89f62f0e52db47d->leave($__internal_59415eadba08b0fe7fd12c41854ddba005f172ef73b73411b89f62f0e52db47d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da3a96f19cd9b4bb172c772bb2ceb99760632870475a75365efead89c1873acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3a96f19cd9b4bb172c772bb2ceb99760632870475a75365efead89c1873acf->enter($__internal_da3a96f19cd9b4bb172c772bb2ceb99760632870475a75365efead89c1873acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c2d7ffb0e9addf21ef6878868d94416b4f7b8fa1fec88e928944c974e456b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2d7ffb0e9addf21ef6878868d94416b4f7b8fa1fec88e928944c974e456b6b->enter($__internal_9c2d7ffb0e9addf21ef6878868d94416b4f7b8fa1fec88e928944c974e456b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9c2d7ffb0e9addf21ef6878868d94416b4f7b8fa1fec88e928944c974e456b6b->leave($__internal_9c2d7ffb0e9addf21ef6878868d94416b4f7b8fa1fec88e928944c974e456b6b_prof);

        
        $__internal_da3a96f19cd9b4bb172c772bb2ceb99760632870475a75365efead89c1873acf->leave($__internal_da3a96f19cd9b4bb172c772bb2ceb99760632870475a75365efead89c1873acf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f72cbcb94d220a99e2b3a26963fad6aa86d3ecc4aa36a3dc35bc9119acfd09c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72cbcb94d220a99e2b3a26963fad6aa86d3ecc4aa36a3dc35bc9119acfd09c6->enter($__internal_f72cbcb94d220a99e2b3a26963fad6aa86d3ecc4aa36a3dc35bc9119acfd09c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_866bf820b982fb75d786b2a7d8e01526aea3e48a2a6aeef20b2db93d66c72e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866bf820b982fb75d786b2a7d8e01526aea3e48a2a6aeef20b2db93d66c72e73->enter($__internal_866bf820b982fb75d786b2a7d8e01526aea3e48a2a6aeef20b2db93d66c72e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_866bf820b982fb75d786b2a7d8e01526aea3e48a2a6aeef20b2db93d66c72e73->leave($__internal_866bf820b982fb75d786b2a7d8e01526aea3e48a2a6aeef20b2db93d66c72e73_prof);

        
        $__internal_f72cbcb94d220a99e2b3a26963fad6aa86d3ecc4aa36a3dc35bc9119acfd09c6->leave($__internal_f72cbcb94d220a99e2b3a26963fad6aa86d3ecc4aa36a3dc35bc9119acfd09c6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59cdf20fd0fd297a8285a6dbc99c0da47f88d1596fedd706e4cbf309b314c405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59cdf20fd0fd297a8285a6dbc99c0da47f88d1596fedd706e4cbf309b314c405->enter($__internal_59cdf20fd0fd297a8285a6dbc99c0da47f88d1596fedd706e4cbf309b314c405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de9f2fe3da8b636d434012e1556db58297d823478045c19a39c35da48499a914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9f2fe3da8b636d434012e1556db58297d823478045c19a39c35da48499a914->enter($__internal_de9f2fe3da8b636d434012e1556db58297d823478045c19a39c35da48499a914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_de9f2fe3da8b636d434012e1556db58297d823478045c19a39c35da48499a914->leave($__internal_de9f2fe3da8b636d434012e1556db58297d823478045c19a39c35da48499a914_prof);

        
        $__internal_59cdf20fd0fd297a8285a6dbc99c0da47f88d1596fedd706e4cbf309b314c405->leave($__internal_59cdf20fd0fd297a8285a6dbc99c0da47f88d1596fedd706e4cbf309b314c405_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/simplon/symfony_exo/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
