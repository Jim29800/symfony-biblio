<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7e5ff42c2e3905a7edbc7e8a3696183fbe21132ace10be85aaefc3f8e79818e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75fca1bec405167f1cb45ce08547a0ad0e0b50727b0319f35829572dff421ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fca1bec405167f1cb45ce08547a0ad0e0b50727b0319f35829572dff421ab8->enter($__internal_75fca1bec405167f1cb45ce08547a0ad0e0b50727b0319f35829572dff421ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_a63b7bb74f142593dd481bb330938ce88ad66e66022214a0af9b8add14458fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63b7bb74f142593dd481bb330938ce88ad66e66022214a0af9b8add14458fa2->enter($__internal_a63b7bb74f142593dd481bb330938ce88ad66e66022214a0af9b8add14458fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_75fca1bec405167f1cb45ce08547a0ad0e0b50727b0319f35829572dff421ab8->leave($__internal_75fca1bec405167f1cb45ce08547a0ad0e0b50727b0319f35829572dff421ab8_prof);

        
        $__internal_a63b7bb74f142593dd481bb330938ce88ad66e66022214a0af9b8add14458fa2->leave($__internal_a63b7bb74f142593dd481bb330938ce88ad66e66022214a0af9b8add14458fa2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
