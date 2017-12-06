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
        $__internal_6121f3f902cbd96da13967d99eb389252cc101aa853e573414a2ab37a4c82ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6121f3f902cbd96da13967d99eb389252cc101aa853e573414a2ab37a4c82ab2->enter($__internal_6121f3f902cbd96da13967d99eb389252cc101aa853e573414a2ab37a4c82ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5c01f3d835f84c2220903212fff7d51b72748116ef62b7d26dbf9413a85683e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c01f3d835f84c2220903212fff7d51b72748116ef62b7d26dbf9413a85683e1->enter($__internal_5c01f3d835f84c2220903212fff7d51b72748116ef62b7d26dbf9413a85683e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6121f3f902cbd96da13967d99eb389252cc101aa853e573414a2ab37a4c82ab2->leave($__internal_6121f3f902cbd96da13967d99eb389252cc101aa853e573414a2ab37a4c82ab2_prof);

        
        $__internal_5c01f3d835f84c2220903212fff7d51b72748116ef62b7d26dbf9413a85683e1->leave($__internal_5c01f3d835f84c2220903212fff7d51b72748116ef62b7d26dbf9413a85683e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23ef161316f280b0916eb09e774349c507774de8c5d86101a0696b206f9ab128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ef161316f280b0916eb09e774349c507774de8c5d86101a0696b206f9ab128->enter($__internal_23ef161316f280b0916eb09e774349c507774de8c5d86101a0696b206f9ab128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a1253f57e9db413b530e0f38309329f7a1a2662befd7e061cf85b1a5695049fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1253f57e9db413b530e0f38309329f7a1a2662befd7e061cf85b1a5695049fe->enter($__internal_a1253f57e9db413b530e0f38309329f7a1a2662befd7e061cf85b1a5695049fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1253f57e9db413b530e0f38309329f7a1a2662befd7e061cf85b1a5695049fe->leave($__internal_a1253f57e9db413b530e0f38309329f7a1a2662befd7e061cf85b1a5695049fe_prof);

        
        $__internal_23ef161316f280b0916eb09e774349c507774de8c5d86101a0696b206f9ab128->leave($__internal_23ef161316f280b0916eb09e774349c507774de8c5d86101a0696b206f9ab128_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e5f4b5f2010ff8cbf34a837d428388de5d7017a7e4e7ecf70cd257c64919f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5f4b5f2010ff8cbf34a837d428388de5d7017a7e4e7ecf70cd257c64919f9c->enter($__internal_5e5f4b5f2010ff8cbf34a837d428388de5d7017a7e4e7ecf70cd257c64919f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97ff9db0629ebdf5fee14df44bd596e7d8fa4c5f225b30ef61468bdf9fe7166e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff9db0629ebdf5fee14df44bd596e7d8fa4c5f225b30ef61468bdf9fe7166e->enter($__internal_97ff9db0629ebdf5fee14df44bd596e7d8fa4c5f225b30ef61468bdf9fe7166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97ff9db0629ebdf5fee14df44bd596e7d8fa4c5f225b30ef61468bdf9fe7166e->leave($__internal_97ff9db0629ebdf5fee14df44bd596e7d8fa4c5f225b30ef61468bdf9fe7166e_prof);

        
        $__internal_5e5f4b5f2010ff8cbf34a837d428388de5d7017a7e4e7ecf70cd257c64919f9c->leave($__internal_5e5f4b5f2010ff8cbf34a837d428388de5d7017a7e4e7ecf70cd257c64919f9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4188207d2467f8310aebadb5a49104eef7c76cc2e81c0d96148bf95524e9997f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4188207d2467f8310aebadb5a49104eef7c76cc2e81c0d96148bf95524e9997f->enter($__internal_4188207d2467f8310aebadb5a49104eef7c76cc2e81c0d96148bf95524e9997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ecd1324084139134cca4088c93b3ce3f208761fe7d5317443b042c96f2e3fc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd1324084139134cca4088c93b3ce3f208761fe7d5317443b042c96f2e3fc2e->enter($__internal_ecd1324084139134cca4088c93b3ce3f208761fe7d5317443b042c96f2e3fc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ecd1324084139134cca4088c93b3ce3f208761fe7d5317443b042c96f2e3fc2e->leave($__internal_ecd1324084139134cca4088c93b3ce3f208761fe7d5317443b042c96f2e3fc2e_prof);

        
        $__internal_4188207d2467f8310aebadb5a49104eef7c76cc2e81c0d96148bf95524e9997f->leave($__internal_4188207d2467f8310aebadb5a49104eef7c76cc2e81c0d96148bf95524e9997f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/simplon/symfony_exo/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
