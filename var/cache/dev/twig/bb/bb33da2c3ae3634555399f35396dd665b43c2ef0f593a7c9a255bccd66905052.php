<?php

/* default/form.html.twig */
class __TwigTemplate_0c364bde44ea7cc17d94605cfcabbe57d10aacdb9a958d15121c1ec5322f06ea extends Twig_Template
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
        $__internal_0be0bdb92cbcd42cc32e64745ce10406bf7ecd82299721b0cb3e129137811db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be0bdb92cbcd42cc32e64745ce10406bf7ecd82299721b0cb3e129137811db6->enter($__internal_0be0bdb92cbcd42cc32e64745ce10406bf7ecd82299721b0cb3e129137811db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $__internal_8a1add8c9455dff5dd44957d4d4293465500db5e74e78a3ef87c7dab063f121a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1add8c9455dff5dd44957d4d4293465500db5e74e78a3ef87c7dab063f121a->enter($__internal_8a1add8c9455dff5dd44957d4d4293465500db5e74e78a3ef87c7dab063f121a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "

</body>
</html>";
        
        $__internal_0be0bdb92cbcd42cc32e64745ce10406bf7ecd82299721b0cb3e129137811db6->leave($__internal_0be0bdb92cbcd42cc32e64745ce10406bf7ecd82299721b0cb3e129137811db6_prof);

        
        $__internal_8a1add8c9455dff5dd44957d4d4293465500db5e74e78a3ef87c7dab063f121a->leave($__internal_8a1add8c9455dff5dd44957d4d4293465500db5e74e78a3ef87c7dab063f121a_prof);

    }

    public function getTemplateName()
    {
        return "default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  41 => 12,  37 => 11,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}

</body>
</html>", "default/form.html.twig", "/home/simplon/SYMFONY/symfony-biblio/app/Resources/views/default/form.html.twig");
    }
}
