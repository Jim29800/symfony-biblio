<?php

/* base.html.twig */
class __TwigTemplate_3698a5049a95d96cd35abee4dbe42043aec1c3ce4b593cfad74f69e93521450f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2267f0f6212860cf11f7e4ff5401e5b69ec0026645dd6f5e92f0ff9c03cb9eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2267f0f6212860cf11f7e4ff5401e5b69ec0026645dd6f5e92f0ff9c03cb9eb4->enter($__internal_2267f0f6212860cf11f7e4ff5401e5b69ec0026645dd6f5e92f0ff9c03cb9eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2e312aef9b4bd443a88f4b78c0ad849741a7e82bba66ae8cdc3921afd12b854c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e312aef9b4bd443a88f4b78c0ad849741a7e82bba66ae8cdc3921afd12b854c->enter($__internal_2e312aef9b4bd443a88f4b78c0ad849741a7e82bba66ae8cdc3921afd12b854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2267f0f6212860cf11f7e4ff5401e5b69ec0026645dd6f5e92f0ff9c03cb9eb4->leave($__internal_2267f0f6212860cf11f7e4ff5401e5b69ec0026645dd6f5e92f0ff9c03cb9eb4_prof);

        
        $__internal_2e312aef9b4bd443a88f4b78c0ad849741a7e82bba66ae8cdc3921afd12b854c->leave($__internal_2e312aef9b4bd443a88f4b78c0ad849741a7e82bba66ae8cdc3921afd12b854c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03df5efe060a6f214d1c354885c4179404bba4dedb868db579e2d4f2850d5d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03df5efe060a6f214d1c354885c4179404bba4dedb868db579e2d4f2850d5d33->enter($__internal_03df5efe060a6f214d1c354885c4179404bba4dedb868db579e2d4f2850d5d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39250db0c4aaaccccfde5af882cfab0dcb5fcf8c3d68add142be5ccf7c79342e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39250db0c4aaaccccfde5af882cfab0dcb5fcf8c3d68add142be5ccf7c79342e->enter($__internal_39250db0c4aaaccccfde5af882cfab0dcb5fcf8c3d68add142be5ccf7c79342e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_39250db0c4aaaccccfde5af882cfab0dcb5fcf8c3d68add142be5ccf7c79342e->leave($__internal_39250db0c4aaaccccfde5af882cfab0dcb5fcf8c3d68add142be5ccf7c79342e_prof);

        
        $__internal_03df5efe060a6f214d1c354885c4179404bba4dedb868db579e2d4f2850d5d33->leave($__internal_03df5efe060a6f214d1c354885c4179404bba4dedb868db579e2d4f2850d5d33_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ccbf510c64671445b23e762a4ede5ccd173a86e43578804f086e9f6737fea9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbf510c64671445b23e762a4ede5ccd173a86e43578804f086e9f6737fea9f6->enter($__internal_ccbf510c64671445b23e762a4ede5ccd173a86e43578804f086e9f6737fea9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e1bb777cde5bd6d85b49ce3f52f72a0aa8457c41d3bebe36a0c62fb29509b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1bb777cde5bd6d85b49ce3f52f72a0aa8457c41d3bebe36a0c62fb29509b72->enter($__internal_3e1bb777cde5bd6d85b49ce3f52f72a0aa8457c41d3bebe36a0c62fb29509b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e1bb777cde5bd6d85b49ce3f52f72a0aa8457c41d3bebe36a0c62fb29509b72->leave($__internal_3e1bb777cde5bd6d85b49ce3f52f72a0aa8457c41d3bebe36a0c62fb29509b72_prof);

        
        $__internal_ccbf510c64671445b23e762a4ede5ccd173a86e43578804f086e9f6737fea9f6->leave($__internal_ccbf510c64671445b23e762a4ede5ccd173a86e43578804f086e9f6737fea9f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9b818f7c69ba17471f763693523d8f412e6a24838f0bbf76172784e449c8e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b818f7c69ba17471f763693523d8f412e6a24838f0bbf76172784e449c8e6e->enter($__internal_a9b818f7c69ba17471f763693523d8f412e6a24838f0bbf76172784e449c8e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e00317bf906a9fd64346650095074018f94d9d868b1b0f00886a78c574faddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e00317bf906a9fd64346650095074018f94d9d868b1b0f00886a78c574faddf->enter($__internal_5e00317bf906a9fd64346650095074018f94d9d868b1b0f00886a78c574faddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e00317bf906a9fd64346650095074018f94d9d868b1b0f00886a78c574faddf->leave($__internal_5e00317bf906a9fd64346650095074018f94d9d868b1b0f00886a78c574faddf_prof);

        
        $__internal_a9b818f7c69ba17471f763693523d8f412e6a24838f0bbf76172784e449c8e6e->leave($__internal_a9b818f7c69ba17471f763693523d8f412e6a24838f0bbf76172784e449c8e6e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cf777fe8f3e9e3b57a4f49e7e0b4a8ccf39a71304a18255abbf056679a34024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf777fe8f3e9e3b57a4f49e7e0b4a8ccf39a71304a18255abbf056679a34024->enter($__internal_1cf777fe8f3e9e3b57a4f49e7e0b4a8ccf39a71304a18255abbf056679a34024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d8e6abb35f011ede31a49c7057ae1bfde1cede3371de991f6c7a888a87c9fedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e6abb35f011ede31a49c7057ae1bfde1cede3371de991f6c7a888a87c9fedb->enter($__internal_d8e6abb35f011ede31a49c7057ae1bfde1cede3371de991f6c7a888a87c9fedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8e6abb35f011ede31a49c7057ae1bfde1cede3371de991f6c7a888a87c9fedb->leave($__internal_d8e6abb35f011ede31a49c7057ae1bfde1cede3371de991f6c7a888a87c9fedb_prof);

        
        $__internal_1cf777fe8f3e9e3b57a4f49e7e0b4a8ccf39a71304a18255abbf056679a34024->leave($__internal_1cf777fe8f3e9e3b57a4f49e7e0b4a8ccf39a71304a18255abbf056679a34024_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/simplon/SYMFONY/symfony-biblio/app/Resources/views/base.html.twig");
    }
}
