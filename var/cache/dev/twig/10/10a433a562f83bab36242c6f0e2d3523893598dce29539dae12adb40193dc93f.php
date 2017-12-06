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
        $__internal_cf1fb162bc810b756ab67aaf47b34cba0ceff0504d68531ac1d92b79de5eaab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1fb162bc810b756ab67aaf47b34cba0ceff0504d68531ac1d92b79de5eaab7->enter($__internal_cf1fb162bc810b756ab67aaf47b34cba0ceff0504d68531ac1d92b79de5eaab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_416c346361da9456be3b9452e1e5fcc8ae7d4ab1cb213160477e30d7ac513cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416c346361da9456be3b9452e1e5fcc8ae7d4ab1cb213160477e30d7ac513cca->enter($__internal_416c346361da9456be3b9452e1e5fcc8ae7d4ab1cb213160477e30d7ac513cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1fb162bc810b756ab67aaf47b34cba0ceff0504d68531ac1d92b79de5eaab7->leave($__internal_cf1fb162bc810b756ab67aaf47b34cba0ceff0504d68531ac1d92b79de5eaab7_prof);

        
        $__internal_416c346361da9456be3b9452e1e5fcc8ae7d4ab1cb213160477e30d7ac513cca->leave($__internal_416c346361da9456be3b9452e1e5fcc8ae7d4ab1cb213160477e30d7ac513cca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eba905ace78d6a80176e0f260aeb489baa5b1d89c364a1d14a92fa72049f2e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba905ace78d6a80176e0f260aeb489baa5b1d89c364a1d14a92fa72049f2e63->enter($__internal_eba905ace78d6a80176e0f260aeb489baa5b1d89c364a1d14a92fa72049f2e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc6526b743b358b83992bae54a8adb3e4128b82e0db1220304f9d65e7660fe85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6526b743b358b83992bae54a8adb3e4128b82e0db1220304f9d65e7660fe85->enter($__internal_bc6526b743b358b83992bae54a8adb3e4128b82e0db1220304f9d65e7660fe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bc6526b743b358b83992bae54a8adb3e4128b82e0db1220304f9d65e7660fe85->leave($__internal_bc6526b743b358b83992bae54a8adb3e4128b82e0db1220304f9d65e7660fe85_prof);

        
        $__internal_eba905ace78d6a80176e0f260aeb489baa5b1d89c364a1d14a92fa72049f2e63->leave($__internal_eba905ace78d6a80176e0f260aeb489baa5b1d89c364a1d14a92fa72049f2e63_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/simplon/symfony_exo/symfony-biblio/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
