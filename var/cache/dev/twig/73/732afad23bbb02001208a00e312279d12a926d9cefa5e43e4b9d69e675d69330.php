<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_83612777d6ceb7fbc3ad4b1402673ca739d01457c480209ae3a23a96374a5b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_1ccca3576ed65282c195b3dac9fde971b9f5267c708a154148c1b6f4c68c16b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccca3576ed65282c195b3dac9fde971b9f5267c708a154148c1b6f4c68c16b3->enter($__internal_1ccca3576ed65282c195b3dac9fde971b9f5267c708a154148c1b6f4c68c16b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d90c20a071559498f8d34f038cc37da10c235d3276399c2b4a8225b24f3a3838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90c20a071559498f8d34f038cc37da10c235d3276399c2b4a8225b24f3a3838->enter($__internal_d90c20a071559498f8d34f038cc37da10c235d3276399c2b4a8225b24f3a3838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ccca3576ed65282c195b3dac9fde971b9f5267c708a154148c1b6f4c68c16b3->leave($__internal_1ccca3576ed65282c195b3dac9fde971b9f5267c708a154148c1b6f4c68c16b3_prof);

        
        $__internal_d90c20a071559498f8d34f038cc37da10c235d3276399c2b4a8225b24f3a3838->leave($__internal_d90c20a071559498f8d34f038cc37da10c235d3276399c2b4a8225b24f3a3838_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84c71835cc2c9f8a7e8766c04e236f090d75402c61da97c3c3bad87d74c00159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c71835cc2c9f8a7e8766c04e236f090d75402c61da97c3c3bad87d74c00159->enter($__internal_84c71835cc2c9f8a7e8766c04e236f090d75402c61da97c3c3bad87d74c00159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82bebf8046be46d5a093e5a8c958e5e1e4cf8acb887d68e3819efa42d7d58e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bebf8046be46d5a093e5a8c958e5e1e4cf8acb887d68e3819efa42d7d58e69->enter($__internal_82bebf8046be46d5a093e5a8c958e5e1e4cf8acb887d68e3819efa42d7d58e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_82bebf8046be46d5a093e5a8c958e5e1e4cf8acb887d68e3819efa42d7d58e69->leave($__internal_82bebf8046be46d5a093e5a8c958e5e1e4cf8acb887d68e3819efa42d7d58e69_prof);

        
        $__internal_84c71835cc2c9f8a7e8766c04e236f090d75402c61da97c3c3bad87d74c00159->leave($__internal_84c71835cc2c9f8a7e8766c04e236f090d75402c61da97c3c3bad87d74c00159_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
