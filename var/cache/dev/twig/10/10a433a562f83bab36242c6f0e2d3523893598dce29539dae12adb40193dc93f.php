<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b44dcac227a1c90fe1d661a90fa6419e49cefae1b74073ebc18062459b634df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0baced584ef1f1b675f8b9a2ffa3a4acdba8eadfeea05d06073c0892ef8bc5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0baced584ef1f1b675f8b9a2ffa3a4acdba8eadfeea05d06073c0892ef8bc5fd->enter($__internal_0baced584ef1f1b675f8b9a2ffa3a4acdba8eadfeea05d06073c0892ef8bc5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e9cc1a4e25c3d29c612d703f9d450eb5dcae72d84db951b4cbb87b208a70bbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cc1a4e25c3d29c612d703f9d450eb5dcae72d84db951b4cbb87b208a70bbef->enter($__internal_e9cc1a4e25c3d29c612d703f9d450eb5dcae72d84db951b4cbb87b208a70bbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0baced584ef1f1b675f8b9a2ffa3a4acdba8eadfeea05d06073c0892ef8bc5fd->leave($__internal_0baced584ef1f1b675f8b9a2ffa3a4acdba8eadfeea05d06073c0892ef8bc5fd_prof);

        
        $__internal_e9cc1a4e25c3d29c612d703f9d450eb5dcae72d84db951b4cbb87b208a70bbef->leave($__internal_e9cc1a4e25c3d29c612d703f9d450eb5dcae72d84db951b4cbb87b208a70bbef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ef0ebb43591df547c49bd073e6cd1bb3eaa0d8fbfe261b6f5a705735bfb2721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef0ebb43591df547c49bd073e6cd1bb3eaa0d8fbfe261b6f5a705735bfb2721->enter($__internal_5ef0ebb43591df547c49bd073e6cd1bb3eaa0d8fbfe261b6f5a705735bfb2721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f2f7e219d9953a18c1fc8039733f73145ea75966b2bb13b17255e0f89d0a1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2f7e219d9953a18c1fc8039733f73145ea75966b2bb13b17255e0f89d0a1fa->enter($__internal_5f2f7e219d9953a18c1fc8039733f73145ea75966b2bb13b17255e0f89d0a1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5f2f7e219d9953a18c1fc8039733f73145ea75966b2bb13b17255e0f89d0a1fa->leave($__internal_5f2f7e219d9953a18c1fc8039733f73145ea75966b2bb13b17255e0f89d0a1fa_prof);

        
        $__internal_5ef0ebb43591df547c49bd073e6cd1bb3eaa0d8fbfe261b6f5a705735bfb2721->leave($__internal_5ef0ebb43591df547c49bd073e6cd1bb3eaa0d8fbfe261b6f5a705735bfb2721_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
