<?php

/* default/liste.html.twig */
class __TwigTemplate_ad0f4b363f8870381b4973fc695c26cccbb65abdf8d72721fe4fd3f40442a438 extends Twig_Template
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
        $__internal_096be6ed385d900fcc9981587f960cd1c30c44603185df9eb6745d10d2d0a254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096be6ed385d900fcc9981587f960cd1c30c44603185df9eb6745d10d2d0a254->enter($__internal_096be6ed385d900fcc9981587f960cd1c30c44603185df9eb6745d10d2d0a254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste.html.twig"));

        $__internal_129fa9e17ad4fcf54ca5b779225b7f1c9ec08b642570c75decfaa6c884cdd3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129fa9e17ad4fcf54ca5b779225b7f1c9ec08b642570c75decfaa6c884cdd3ab->enter($__internal_129fa9e17ad4fcf54ca5b779225b7f1c9ec08b642570c75decfaa6c884cdd3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste.html.twig"));

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
<select>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new Twig_Error_Runtime('Variable "liste" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "        <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "type", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</select>

</body>
</html>";
        
        $__internal_096be6ed385d900fcc9981587f960cd1c30c44603185df9eb6745d10d2d0a254->leave($__internal_096be6ed385d900fcc9981587f960cd1c30c44603185df9eb6745d10d2d0a254_prof);

        
        $__internal_129fa9e17ad4fcf54ca5b779225b7f1c9ec08b642570c75decfaa6c884cdd3ab->leave($__internal_129fa9e17ad4fcf54ca5b779225b7f1c9ec08b642570c75decfaa6c884cdd3ab_prof);

    }

    public function getTemplateName()
    {
        return "default/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  41 => 12,  37 => 11,  25 => 1,);
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
<select>
    {% for type in liste %}
        <option>{{ type.type}}</option>
    {% endfor %}
</select>

</body>
</html>", "default/liste.html.twig", "/home/simplon/SYMFONY/symfony-biblio/app/Resources/views/default/liste.html.twig");
    }
}
