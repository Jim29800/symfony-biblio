<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82acf618358008c82387ea4e8b3c5c2f070dcd481d6a78b1d605fd93a178fb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82acf618358008c82387ea4e8b3c5c2f070dcd481d6a78b1d605fd93a178fb42->enter($__internal_82acf618358008c82387ea4e8b3c5c2f070dcd481d6a78b1d605fd93a178fb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_861ce286eb1ab2193298697045a64fef084a5b66f3888aad4f50d015b3e72540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861ce286eb1ab2193298697045a64fef084a5b66f3888aad4f50d015b3e72540->enter($__internal_861ce286eb1ab2193298697045a64fef084a5b66f3888aad4f50d015b3e72540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_82acf618358008c82387ea4e8b3c5c2f070dcd481d6a78b1d605fd93a178fb42->leave($__internal_82acf618358008c82387ea4e8b3c5c2f070dcd481d6a78b1d605fd93a178fb42_prof);

        
        $__internal_861ce286eb1ab2193298697045a64fef084a5b66f3888aad4f50d015b3e72540->leave($__internal_861ce286eb1ab2193298697045a64fef084a5b66f3888aad4f50d015b3e72540_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe4d7b2c435cf4ccdba0702c0606abdbea71f4d6d3ae32648b6d344f57ae7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe4d7b2c435cf4ccdba0702c0606abdbea71f4d6d3ae32648b6d344f57ae7c6->enter($__internal_1fe4d7b2c435cf4ccdba0702c0606abdbea71f4d6d3ae32648b6d344f57ae7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_207e263af144b796a611fac38258498017fde87cb2a01ce4054cf1b7a4014516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207e263af144b796a611fac38258498017fde87cb2a01ce4054cf1b7a4014516->enter($__internal_207e263af144b796a611fac38258498017fde87cb2a01ce4054cf1b7a4014516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_207e263af144b796a611fac38258498017fde87cb2a01ce4054cf1b7a4014516->leave($__internal_207e263af144b796a611fac38258498017fde87cb2a01ce4054cf1b7a4014516_prof);

        
        $__internal_1fe4d7b2c435cf4ccdba0702c0606abdbea71f4d6d3ae32648b6d344f57ae7c6->leave($__internal_1fe4d7b2c435cf4ccdba0702c0606abdbea71f4d6d3ae32648b6d344f57ae7c6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea02c00fb0124fa48414ce1356ee21e74fc37f9ea3e59131ada4d195e6a678ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea02c00fb0124fa48414ce1356ee21e74fc37f9ea3e59131ada4d195e6a678ac->enter($__internal_ea02c00fb0124fa48414ce1356ee21e74fc37f9ea3e59131ada4d195e6a678ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8204e808af100074413b91cb4dd84963899d00e799d26cfccc1bd3488b9c3cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8204e808af100074413b91cb4dd84963899d00e799d26cfccc1bd3488b9c3cd3->enter($__internal_8204e808af100074413b91cb4dd84963899d00e799d26cfccc1bd3488b9c3cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8204e808af100074413b91cb4dd84963899d00e799d26cfccc1bd3488b9c3cd3->leave($__internal_8204e808af100074413b91cb4dd84963899d00e799d26cfccc1bd3488b9c3cd3_prof);

        
        $__internal_ea02c00fb0124fa48414ce1356ee21e74fc37f9ea3e59131ada4d195e6a678ac->leave($__internal_ea02c00fb0124fa48414ce1356ee21e74fc37f9ea3e59131ada4d195e6a678ac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b425fc00264f4f6506832928f1794732927434991fea899143ffcd6eb786683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b425fc00264f4f6506832928f1794732927434991fea899143ffcd6eb786683->enter($__internal_4b425fc00264f4f6506832928f1794732927434991fea899143ffcd6eb786683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dcbdc82c475e132a9ce605fbbb45dc0a499976d1a8c6fa9bc6356f42618ac1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcbdc82c475e132a9ce605fbbb45dc0a499976d1a8c6fa9bc6356f42618ac1e->enter($__internal_2dcbdc82c475e132a9ce605fbbb45dc0a499976d1a8c6fa9bc6356f42618ac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2dcbdc82c475e132a9ce605fbbb45dc0a499976d1a8c6fa9bc6356f42618ac1e->leave($__internal_2dcbdc82c475e132a9ce605fbbb45dc0a499976d1a8c6fa9bc6356f42618ac1e_prof);

        
        $__internal_4b425fc00264f4f6506832928f1794732927434991fea899143ffcd6eb786683->leave($__internal_4b425fc00264f4f6506832928f1794732927434991fea899143ffcd6eb786683_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/simplon/symfony_exo/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
