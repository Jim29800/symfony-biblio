<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4e708e1bb221d8ebaf5e165ec07db6a38b6e32edf09c882de9dba2280b8fc4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_d1c0be693d8340466d21bd6d7ce12ebc31ade5d298e35acd33b56d6338d7ee98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c0be693d8340466d21bd6d7ce12ebc31ade5d298e35acd33b56d6338d7ee98->enter($__internal_d1c0be693d8340466d21bd6d7ce12ebc31ade5d298e35acd33b56d6338d7ee98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_bb2dda9d71301123c17612402531d1eba7ac380c0b2193f5f20e1f99115c89bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2dda9d71301123c17612402531d1eba7ac380c0b2193f5f20e1f99115c89bc->enter($__internal_bb2dda9d71301123c17612402531d1eba7ac380c0b2193f5f20e1f99115c89bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c0be693d8340466d21bd6d7ce12ebc31ade5d298e35acd33b56d6338d7ee98->leave($__internal_d1c0be693d8340466d21bd6d7ce12ebc31ade5d298e35acd33b56d6338d7ee98_prof);

        
        $__internal_bb2dda9d71301123c17612402531d1eba7ac380c0b2193f5f20e1f99115c89bc->leave($__internal_bb2dda9d71301123c17612402531d1eba7ac380c0b2193f5f20e1f99115c89bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7f34ca0d6b608c3c56437083c7449112ccfd7c47bf72bdaf6695f0b77b8dc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f34ca0d6b608c3c56437083c7449112ccfd7c47bf72bdaf6695f0b77b8dc61->enter($__internal_c7f34ca0d6b608c3c56437083c7449112ccfd7c47bf72bdaf6695f0b77b8dc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_519d78277a1401826790bfd45a7329042e3905a8e6d8c00c0f624f5ef74f31ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519d78277a1401826790bfd45a7329042e3905a8e6d8c00c0f624f5ef74f31ab->enter($__internal_519d78277a1401826790bfd45a7329042e3905a8e6d8c00c0f624f5ef74f31ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_519d78277a1401826790bfd45a7329042e3905a8e6d8c00c0f624f5ef74f31ab->leave($__internal_519d78277a1401826790bfd45a7329042e3905a8e6d8c00c0f624f5ef74f31ab_prof);

        
        $__internal_c7f34ca0d6b608c3c56437083c7449112ccfd7c47bf72bdaf6695f0b77b8dc61->leave($__internal_c7f34ca0d6b608c3c56437083c7449112ccfd7c47bf72bdaf6695f0b77b8dc61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
