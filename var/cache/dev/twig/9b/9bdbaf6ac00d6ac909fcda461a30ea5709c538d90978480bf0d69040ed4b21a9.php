<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_99e66025423283d79a3595909538a8fb86be3c88ea363753326b5c086c891cdf extends Twig_Template
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
        $__internal_1b77df480320eb731af325f217caf8a91de5b688230d98cf300542ae9e50fc2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b77df480320eb731af325f217caf8a91de5b688230d98cf300542ae9e50fc2d->enter($__internal_1b77df480320eb731af325f217caf8a91de5b688230d98cf300542ae9e50fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_afe486331b54b391cd008cb777b327331fb4d0cf5ebd230e45074eb47c93dce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe486331b54b391cd008cb777b327331fb4d0cf5ebd230e45074eb47c93dce5->enter($__internal_afe486331b54b391cd008cb777b327331fb4d0cf5ebd230e45074eb47c93dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b77df480320eb731af325f217caf8a91de5b688230d98cf300542ae9e50fc2d->leave($__internal_1b77df480320eb731af325f217caf8a91de5b688230d98cf300542ae9e50fc2d_prof);

        
        $__internal_afe486331b54b391cd008cb777b327331fb4d0cf5ebd230e45074eb47c93dce5->leave($__internal_afe486331b54b391cd008cb777b327331fb4d0cf5ebd230e45074eb47c93dce5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0b4a15cd8960f219b3eea5edccc46dd3032b050b269414271e8ff1829f03512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b4a15cd8960f219b3eea5edccc46dd3032b050b269414271e8ff1829f03512->enter($__internal_a0b4a15cd8960f219b3eea5edccc46dd3032b050b269414271e8ff1829f03512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d454c927a904c46b92bb1ceb65e7ed51818cc584456debdde1fb32a1cf5e8d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d454c927a904c46b92bb1ceb65e7ed51818cc584456debdde1fb32a1cf5e8d75->enter($__internal_d454c927a904c46b92bb1ceb65e7ed51818cc584456debdde1fb32a1cf5e8d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d454c927a904c46b92bb1ceb65e7ed51818cc584456debdde1fb32a1cf5e8d75->leave($__internal_d454c927a904c46b92bb1ceb65e7ed51818cc584456debdde1fb32a1cf5e8d75_prof);

        
        $__internal_a0b4a15cd8960f219b3eea5edccc46dd3032b050b269414271e8ff1829f03512->leave($__internal_a0b4a15cd8960f219b3eea5edccc46dd3032b050b269414271e8ff1829f03512_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d96ad015f6cbd8053e5b0da202b27363b72fce547b9ddf6b09eac8c061a4b0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96ad015f6cbd8053e5b0da202b27363b72fce547b9ddf6b09eac8c061a4b0b1->enter($__internal_d96ad015f6cbd8053e5b0da202b27363b72fce547b9ddf6b09eac8c061a4b0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5740b8a322bdb041f0bbc273e9fe0006a93c3be60bfba6b1a3aca9b42868a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5740b8a322bdb041f0bbc273e9fe0006a93c3be60bfba6b1a3aca9b42868a01->enter($__internal_d5740b8a322bdb041f0bbc273e9fe0006a93c3be60bfba6b1a3aca9b42868a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5740b8a322bdb041f0bbc273e9fe0006a93c3be60bfba6b1a3aca9b42868a01->leave($__internal_d5740b8a322bdb041f0bbc273e9fe0006a93c3be60bfba6b1a3aca9b42868a01_prof);

        
        $__internal_d96ad015f6cbd8053e5b0da202b27363b72fce547b9ddf6b09eac8c061a4b0b1->leave($__internal_d96ad015f6cbd8053e5b0da202b27363b72fce547b9ddf6b09eac8c061a4b0b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46da6ed48097a16a655744915fddae0d901dbaf47c3409c8851a327d4c81299a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46da6ed48097a16a655744915fddae0d901dbaf47c3409c8851a327d4c81299a->enter($__internal_46da6ed48097a16a655744915fddae0d901dbaf47c3409c8851a327d4c81299a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13515ca91dfed91daece970c5aa2c8be3430911dded0f018c6ba1483f7caff9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13515ca91dfed91daece970c5aa2c8be3430911dded0f018c6ba1483f7caff9d->enter($__internal_13515ca91dfed91daece970c5aa2c8be3430911dded0f018c6ba1483f7caff9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_13515ca91dfed91daece970c5aa2c8be3430911dded0f018c6ba1483f7caff9d->leave($__internal_13515ca91dfed91daece970c5aa2c8be3430911dded0f018c6ba1483f7caff9d_prof);

        
        $__internal_46da6ed48097a16a655744915fddae0d901dbaf47c3409c8851a327d4c81299a->leave($__internal_46da6ed48097a16a655744915fddae0d901dbaf47c3409c8851a327d4c81299a_prof);

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
