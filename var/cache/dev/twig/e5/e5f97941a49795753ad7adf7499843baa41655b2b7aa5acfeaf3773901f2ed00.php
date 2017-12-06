<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29e16d3bbb350641b645b9ac67d3aff48a4a8b0c526bef46e22351c58ae6bbb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e16d3bbb350641b645b9ac67d3aff48a4a8b0c526bef46e22351c58ae6bbb8->enter($__internal_29e16d3bbb350641b645b9ac67d3aff48a4a8b0c526bef46e22351c58ae6bbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2337d1b1fb12b69b6a57e8e231f7b4474e0aa7c1678c7d1cff6be4eb19502d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2337d1b1fb12b69b6a57e8e231f7b4474e0aa7c1678c7d1cff6be4eb19502d7e->enter($__internal_2337d1b1fb12b69b6a57e8e231f7b4474e0aa7c1678c7d1cff6be4eb19502d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e16d3bbb350641b645b9ac67d3aff48a4a8b0c526bef46e22351c58ae6bbb8->leave($__internal_29e16d3bbb350641b645b9ac67d3aff48a4a8b0c526bef46e22351c58ae6bbb8_prof);

        
        $__internal_2337d1b1fb12b69b6a57e8e231f7b4474e0aa7c1678c7d1cff6be4eb19502d7e->leave($__internal_2337d1b1fb12b69b6a57e8e231f7b4474e0aa7c1678c7d1cff6be4eb19502d7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_651bdad63e96dc50c2c2ce2fda977fc92adff1ac04a2a34285240189418091e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651bdad63e96dc50c2c2ce2fda977fc92adff1ac04a2a34285240189418091e9->enter($__internal_651bdad63e96dc50c2c2ce2fda977fc92adff1ac04a2a34285240189418091e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6bd6f646388348a2a82e3e7b9fab57498db4700fce9792ed236393682f18c77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd6f646388348a2a82e3e7b9fab57498db4700fce9792ed236393682f18c77a->enter($__internal_6bd6f646388348a2a82e3e7b9fab57498db4700fce9792ed236393682f18c77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6bd6f646388348a2a82e3e7b9fab57498db4700fce9792ed236393682f18c77a->leave($__internal_6bd6f646388348a2a82e3e7b9fab57498db4700fce9792ed236393682f18c77a_prof);

        
        $__internal_651bdad63e96dc50c2c2ce2fda977fc92adff1ac04a2a34285240189418091e9->leave($__internal_651bdad63e96dc50c2c2ce2fda977fc92adff1ac04a2a34285240189418091e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/simplon/symfony_exo/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
