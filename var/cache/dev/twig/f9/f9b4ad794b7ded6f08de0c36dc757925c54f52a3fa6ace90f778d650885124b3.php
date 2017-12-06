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
        $__internal_db1db9d4142139233bcff986b2c43ba9992d6999d4a25d63f0268cb4a42f0af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1db9d4142139233bcff986b2c43ba9992d6999d4a25d63f0268cb4a42f0af2->enter($__internal_db1db9d4142139233bcff986b2c43ba9992d6999d4a25d63f0268cb4a42f0af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste.html.twig"));

        $__internal_3743ef0d6c058f334442eb2c6dd5929803fc4c9be1c300f256f38cd1391fa06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3743ef0d6c058f334442eb2c6dd5929803fc4c9be1c300f256f38cd1391fa06d->enter($__internal_3743ef0d6c058f334442eb2c6dd5929803fc4c9be1c300f256f38cd1391fa06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/liste.html.twig"));

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
        
        $__internal_db1db9d4142139233bcff986b2c43ba9992d6999d4a25d63f0268cb4a42f0af2->leave($__internal_db1db9d4142139233bcff986b2c43ba9992d6999d4a25d63f0268cb4a42f0af2_prof);

        
        $__internal_3743ef0d6c058f334442eb2c6dd5929803fc4c9be1c300f256f38cd1391fa06d->leave($__internal_3743ef0d6c058f334442eb2c6dd5929803fc4c9be1c300f256f38cd1391fa06d_prof);

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
</html>", "default/liste.html.twig", "/home/simplon/symfony_exo/symfony-biblio/app/Resources/views/default/liste.html.twig");
    }
}
