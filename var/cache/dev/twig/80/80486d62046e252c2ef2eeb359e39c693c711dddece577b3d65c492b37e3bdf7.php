<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c4239c3474829ebb4b3b273cc0e2d1024117b2907d2789c52e57a84167a62e29 extends Twig_Template
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
        $__internal_d6f442b7434bb1aaeee4eb9b9e5088ea41efff3a18cde867f27e23506b7f61a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f442b7434bb1aaeee4eb9b9e5088ea41efff3a18cde867f27e23506b7f61a4->enter($__internal_d6f442b7434bb1aaeee4eb9b9e5088ea41efff3a18cde867f27e23506b7f61a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_86ab768ddd5f00d679f791131e01354e765ca4a3c185f95c41d420ad8c269b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ab768ddd5f00d679f791131e01354e765ca4a3c185f95c41d420ad8c269b2e->enter($__internal_86ab768ddd5f00d679f791131e01354e765ca4a3c185f95c41d420ad8c269b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f442b7434bb1aaeee4eb9b9e5088ea41efff3a18cde867f27e23506b7f61a4->leave($__internal_d6f442b7434bb1aaeee4eb9b9e5088ea41efff3a18cde867f27e23506b7f61a4_prof);

        
        $__internal_86ab768ddd5f00d679f791131e01354e765ca4a3c185f95c41d420ad8c269b2e->leave($__internal_86ab768ddd5f00d679f791131e01354e765ca4a3c185f95c41d420ad8c269b2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e79f820f5fce36866ce701f69a571f1ad2bd001ec2862d27a3aedec3020df333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79f820f5fce36866ce701f69a571f1ad2bd001ec2862d27a3aedec3020df333->enter($__internal_e79f820f5fce36866ce701f69a571f1ad2bd001ec2862d27a3aedec3020df333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08da0d651430d058f353aaf047ab48ad878e2ae61b94b2a6cc7f519dc12fbf37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08da0d651430d058f353aaf047ab48ad878e2ae61b94b2a6cc7f519dc12fbf37->enter($__internal_08da0d651430d058f353aaf047ab48ad878e2ae61b94b2a6cc7f519dc12fbf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_08da0d651430d058f353aaf047ab48ad878e2ae61b94b2a6cc7f519dc12fbf37->leave($__internal_08da0d651430d058f353aaf047ab48ad878e2ae61b94b2a6cc7f519dc12fbf37_prof);

        
        $__internal_e79f820f5fce36866ce701f69a571f1ad2bd001ec2862d27a3aedec3020df333->leave($__internal_e79f820f5fce36866ce701f69a571f1ad2bd001ec2862d27a3aedec3020df333_prof);

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
