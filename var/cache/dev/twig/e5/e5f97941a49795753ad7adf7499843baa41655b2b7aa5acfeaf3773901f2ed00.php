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
        $__internal_1b09c4e7c40babe82f6a196f49efce9c092c2c6b9ea49cfa27ab61d75a1bcc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b09c4e7c40babe82f6a196f49efce9c092c2c6b9ea49cfa27ab61d75a1bcc2c->enter($__internal_1b09c4e7c40babe82f6a196f49efce9c092c2c6b9ea49cfa27ab61d75a1bcc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f4c8654e1e30da63b7eab9e72e91269a9cfd55f898a6b18595f923b278b5f031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c8654e1e30da63b7eab9e72e91269a9cfd55f898a6b18595f923b278b5f031->enter($__internal_f4c8654e1e30da63b7eab9e72e91269a9cfd55f898a6b18595f923b278b5f031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b09c4e7c40babe82f6a196f49efce9c092c2c6b9ea49cfa27ab61d75a1bcc2c->leave($__internal_1b09c4e7c40babe82f6a196f49efce9c092c2c6b9ea49cfa27ab61d75a1bcc2c_prof);

        
        $__internal_f4c8654e1e30da63b7eab9e72e91269a9cfd55f898a6b18595f923b278b5f031->leave($__internal_f4c8654e1e30da63b7eab9e72e91269a9cfd55f898a6b18595f923b278b5f031_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb4197bc96cef0a242766fedc6215374836d9008313b194b6515e07f3f4e6323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4197bc96cef0a242766fedc6215374836d9008313b194b6515e07f3f4e6323->enter($__internal_eb4197bc96cef0a242766fedc6215374836d9008313b194b6515e07f3f4e6323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6dedeee2ad0e3b551de3a7c898877a4e2bdc022b3f33f5c2e26dbf2af511297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6dedeee2ad0e3b551de3a7c898877a4e2bdc022b3f33f5c2e26dbf2af511297->enter($__internal_c6dedeee2ad0e3b551de3a7c898877a4e2bdc022b3f33f5c2e26dbf2af511297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c6dedeee2ad0e3b551de3a7c898877a4e2bdc022b3f33f5c2e26dbf2af511297->leave($__internal_c6dedeee2ad0e3b551de3a7c898877a4e2bdc022b3f33f5c2e26dbf2af511297_prof);

        
        $__internal_eb4197bc96cef0a242766fedc6215374836d9008313b194b6515e07f3f4e6323->leave($__internal_eb4197bc96cef0a242766fedc6215374836d9008313b194b6515e07f3f4e6323_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
