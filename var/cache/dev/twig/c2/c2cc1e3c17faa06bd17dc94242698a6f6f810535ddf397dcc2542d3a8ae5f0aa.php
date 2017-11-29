<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ee4cf77c90a9774f4dcbe102fdd11baef75925125a10d3147c9c6863b7bce8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4cf77c90a9774f4dcbe102fdd11baef75925125a10d3147c9c6863b7bce8dc->enter($__internal_ee4cf77c90a9774f4dcbe102fdd11baef75925125a10d3147c9c6863b7bce8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c01cfab71aad1b62ec1a3df556c09126a849ca2e33b60214c2ed08570c3e6415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01cfab71aad1b62ec1a3df556c09126a849ca2e33b60214c2ed08570c3e6415->enter($__internal_c01cfab71aad1b62ec1a3df556c09126a849ca2e33b60214c2ed08570c3e6415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee4cf77c90a9774f4dcbe102fdd11baef75925125a10d3147c9c6863b7bce8dc->leave($__internal_ee4cf77c90a9774f4dcbe102fdd11baef75925125a10d3147c9c6863b7bce8dc_prof);

        
        $__internal_c01cfab71aad1b62ec1a3df556c09126a849ca2e33b60214c2ed08570c3e6415->leave($__internal_c01cfab71aad1b62ec1a3df556c09126a849ca2e33b60214c2ed08570c3e6415_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_580faef8d163b995ca6c9757f8cbadbe3d49eb431565f3589edf79e1c053fcdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580faef8d163b995ca6c9757f8cbadbe3d49eb431565f3589edf79e1c053fcdf->enter($__internal_580faef8d163b995ca6c9757f8cbadbe3d49eb431565f3589edf79e1c053fcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c85e511f58e63177e0a89fc3eefb88c0382286b0b7671a6a9211b2978df90fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85e511f58e63177e0a89fc3eefb88c0382286b0b7671a6a9211b2978df90fca->enter($__internal_c85e511f58e63177e0a89fc3eefb88c0382286b0b7671a6a9211b2978df90fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c85e511f58e63177e0a89fc3eefb88c0382286b0b7671a6a9211b2978df90fca->leave($__internal_c85e511f58e63177e0a89fc3eefb88c0382286b0b7671a6a9211b2978df90fca_prof);

        
        $__internal_580faef8d163b995ca6c9757f8cbadbe3d49eb431565f3589edf79e1c053fcdf->leave($__internal_580faef8d163b995ca6c9757f8cbadbe3d49eb431565f3589edf79e1c053fcdf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eda8e0691e32f67b40e12ea8e8ac8c0e7ac89522dd94973166faca1c7521fa6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda8e0691e32f67b40e12ea8e8ac8c0e7ac89522dd94973166faca1c7521fa6d->enter($__internal_eda8e0691e32f67b40e12ea8e8ac8c0e7ac89522dd94973166faca1c7521fa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f3bd317beae4f324032799899bb2cab03874d0a1c04e2fcf0f6d9be7eff202cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bd317beae4f324032799899bb2cab03874d0a1c04e2fcf0f6d9be7eff202cc->enter($__internal_f3bd317beae4f324032799899bb2cab03874d0a1c04e2fcf0f6d9be7eff202cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3bd317beae4f324032799899bb2cab03874d0a1c04e2fcf0f6d9be7eff202cc->leave($__internal_f3bd317beae4f324032799899bb2cab03874d0a1c04e2fcf0f6d9be7eff202cc_prof);

        
        $__internal_eda8e0691e32f67b40e12ea8e8ac8c0e7ac89522dd94973166faca1c7521fa6d->leave($__internal_eda8e0691e32f67b40e12ea8e8ac8c0e7ac89522dd94973166faca1c7521fa6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d30430cc61c619904db8a02488e92af5bf76737c86b354f47c1872b54111aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d30430cc61c619904db8a02488e92af5bf76737c86b354f47c1872b54111aea->enter($__internal_5d30430cc61c619904db8a02488e92af5bf76737c86b354f47c1872b54111aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb94dca82fc140a8d440d838a2cd967d0fb3a6bc8b33dbe100f671263c715fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb94dca82fc140a8d440d838a2cd967d0fb3a6bc8b33dbe100f671263c715fb9->enter($__internal_cb94dca82fc140a8d440d838a2cd967d0fb3a6bc8b33dbe100f671263c715fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cb94dca82fc140a8d440d838a2cd967d0fb3a6bc8b33dbe100f671263c715fb9->leave($__internal_cb94dca82fc140a8d440d838a2cd967d0fb3a6bc8b33dbe100f671263c715fb9_prof);

        
        $__internal_5d30430cc61c619904db8a02488e92af5bf76737c86b354f47c1872b54111aea->leave($__internal_5d30430cc61c619904db8a02488e92af5bf76737c86b354f47c1872b54111aea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
