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
        $__internal_8493a2f9525571f4908cdaf6c6a8262e9f2f920aaceebeb528477de3717ce3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8493a2f9525571f4908cdaf6c6a8262e9f2f920aaceebeb528477de3717ce3a3->enter($__internal_8493a2f9525571f4908cdaf6c6a8262e9f2f920aaceebeb528477de3717ce3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3321d1d9455573aeae25721df097a2e79b034438beda33dc71021766ddccc416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3321d1d9455573aeae25721df097a2e79b034438beda33dc71021766ddccc416->enter($__internal_3321d1d9455573aeae25721df097a2e79b034438beda33dc71021766ddccc416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8493a2f9525571f4908cdaf6c6a8262e9f2f920aaceebeb528477de3717ce3a3->leave($__internal_8493a2f9525571f4908cdaf6c6a8262e9f2f920aaceebeb528477de3717ce3a3_prof);

        
        $__internal_3321d1d9455573aeae25721df097a2e79b034438beda33dc71021766ddccc416->leave($__internal_3321d1d9455573aeae25721df097a2e79b034438beda33dc71021766ddccc416_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91a8b0cc34c44dea6ead4ccd66182ab533b094f9ef037e43f98d605c97a66c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a8b0cc34c44dea6ead4ccd66182ab533b094f9ef037e43f98d605c97a66c39->enter($__internal_91a8b0cc34c44dea6ead4ccd66182ab533b094f9ef037e43f98d605c97a66c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51af7dc03ee350a6f7d13c9b7d460f3771109b715e0c99bae206337a07ba013e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51af7dc03ee350a6f7d13c9b7d460f3771109b715e0c99bae206337a07ba013e->enter($__internal_51af7dc03ee350a6f7d13c9b7d460f3771109b715e0c99bae206337a07ba013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_51af7dc03ee350a6f7d13c9b7d460f3771109b715e0c99bae206337a07ba013e->leave($__internal_51af7dc03ee350a6f7d13c9b7d460f3771109b715e0c99bae206337a07ba013e_prof);

        
        $__internal_91a8b0cc34c44dea6ead4ccd66182ab533b094f9ef037e43f98d605c97a66c39->leave($__internal_91a8b0cc34c44dea6ead4ccd66182ab533b094f9ef037e43f98d605c97a66c39_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2050d628ab2df2f6f6b4d77950e79d1c429f901ec5dbb2bd3e3adde05d7139ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2050d628ab2df2f6f6b4d77950e79d1c429f901ec5dbb2bd3e3adde05d7139ef->enter($__internal_2050d628ab2df2f6f6b4d77950e79d1c429f901ec5dbb2bd3e3adde05d7139ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad3b0ffcb0ca3336ddbda5a3c01774d179476c735760d82dd9cab567191bcacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3b0ffcb0ca3336ddbda5a3c01774d179476c735760d82dd9cab567191bcacf->enter($__internal_ad3b0ffcb0ca3336ddbda5a3c01774d179476c735760d82dd9cab567191bcacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad3b0ffcb0ca3336ddbda5a3c01774d179476c735760d82dd9cab567191bcacf->leave($__internal_ad3b0ffcb0ca3336ddbda5a3c01774d179476c735760d82dd9cab567191bcacf_prof);

        
        $__internal_2050d628ab2df2f6f6b4d77950e79d1c429f901ec5dbb2bd3e3adde05d7139ef->leave($__internal_2050d628ab2df2f6f6b4d77950e79d1c429f901ec5dbb2bd3e3adde05d7139ef_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ab7e483dd810011c29a0ced3212a3c350f558cf8eff4e5770505f4f8edf8111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab7e483dd810011c29a0ced3212a3c350f558cf8eff4e5770505f4f8edf8111->enter($__internal_0ab7e483dd810011c29a0ced3212a3c350f558cf8eff4e5770505f4f8edf8111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cb93ab16107ade83bcfb54a64c27c83a1a8095d52bce79229f6ccb8d6cf4366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb93ab16107ade83bcfb54a64c27c83a1a8095d52bce79229f6ccb8d6cf4366->enter($__internal_8cb93ab16107ade83bcfb54a64c27c83a1a8095d52bce79229f6ccb8d6cf4366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8cb93ab16107ade83bcfb54a64c27c83a1a8095d52bce79229f6ccb8d6cf4366->leave($__internal_8cb93ab16107ade83bcfb54a64c27c83a1a8095d52bce79229f6ccb8d6cf4366_prof);

        
        $__internal_0ab7e483dd810011c29a0ced3212a3c350f558cf8eff4e5770505f4f8edf8111->leave($__internal_0ab7e483dd810011c29a0ced3212a3c350f558cf8eff4e5770505f4f8edf8111_prof);

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
", "@Twig/layout.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
