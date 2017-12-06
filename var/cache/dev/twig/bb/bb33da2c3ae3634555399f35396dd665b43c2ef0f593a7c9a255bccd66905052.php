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
        $__internal_8e74c54f6793d8eddc5cc531d058a16372d99cb4730e10a8a1e2aa9637e0d886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e74c54f6793d8eddc5cc531d058a16372d99cb4730e10a8a1e2aa9637e0d886->enter($__internal_8e74c54f6793d8eddc5cc531d058a16372d99cb4730e10a8a1e2aa9637e0d886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $__internal_dcc3778a113395267e267803c888a6414bac16ef761f6c88dfc2c608c6cf2f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc3778a113395267e267803c888a6414bac16ef761f6c88dfc2c608c6cf2f50->enter($__internal_dcc3778a113395267e267803c888a6414bac16ef761f6c88dfc2c608c6cf2f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

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
        
        $__internal_8e74c54f6793d8eddc5cc531d058a16372d99cb4730e10a8a1e2aa9637e0d886->leave($__internal_8e74c54f6793d8eddc5cc531d058a16372d99cb4730e10a8a1e2aa9637e0d886_prof);

        
        $__internal_dcc3778a113395267e267803c888a6414bac16ef761f6c88dfc2c608c6cf2f50->leave($__internal_dcc3778a113395267e267803c888a6414bac16ef761f6c88dfc2c608c6cf2f50_prof);

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
</html>", "default/form.html.twig", "/home/simplon/symfony_exo/symfony-biblio/app/Resources/views/default/form.html.twig");
    }
}
