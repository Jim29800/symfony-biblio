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
        $__internal_9e9b3cac97091eeb7ebdf517074ac6ca4e53b6c914420472f44fa8ea201e0735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9b3cac97091eeb7ebdf517074ac6ca4e53b6c914420472f44fa8ea201e0735->enter($__internal_9e9b3cac97091eeb7ebdf517074ac6ca4e53b6c914420472f44fa8ea201e0735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5c9bf6e6a02e4b428104fca9aeccac649890cbbff3b427047bc10f3d7101584b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9bf6e6a02e4b428104fca9aeccac649890cbbff3b427047bc10f3d7101584b->enter($__internal_5c9bf6e6a02e4b428104fca9aeccac649890cbbff3b427047bc10f3d7101584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9e9b3cac97091eeb7ebdf517074ac6ca4e53b6c914420472f44fa8ea201e0735->leave($__internal_9e9b3cac97091eeb7ebdf517074ac6ca4e53b6c914420472f44fa8ea201e0735_prof);

        
        $__internal_5c9bf6e6a02e4b428104fca9aeccac649890cbbff3b427047bc10f3d7101584b->leave($__internal_5c9bf6e6a02e4b428104fca9aeccac649890cbbff3b427047bc10f3d7101584b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b1c976aa3145e7f1ccab910700ee2c0dce14ee5d47229e7d813da27378220bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1c976aa3145e7f1ccab910700ee2c0dce14ee5d47229e7d813da27378220bf->enter($__internal_8b1c976aa3145e7f1ccab910700ee2c0dce14ee5d47229e7d813da27378220bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0038342e5d83fd7316fd5b5dbf4f64bf48bc442306476fdeadb2734e6d810a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0038342e5d83fd7316fd5b5dbf4f64bf48bc442306476fdeadb2734e6d810a1->enter($__internal_f0038342e5d83fd7316fd5b5dbf4f64bf48bc442306476fdeadb2734e6d810a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0038342e5d83fd7316fd5b5dbf4f64bf48bc442306476fdeadb2734e6d810a1->leave($__internal_f0038342e5d83fd7316fd5b5dbf4f64bf48bc442306476fdeadb2734e6d810a1_prof);

        
        $__internal_8b1c976aa3145e7f1ccab910700ee2c0dce14ee5d47229e7d813da27378220bf->leave($__internal_8b1c976aa3145e7f1ccab910700ee2c0dce14ee5d47229e7d813da27378220bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c59fb21da2add6e53c09b611a39f2eb7338a6b83b1598a348ca8834370862129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59fb21da2add6e53c09b611a39f2eb7338a6b83b1598a348ca8834370862129->enter($__internal_c59fb21da2add6e53c09b611a39f2eb7338a6b83b1598a348ca8834370862129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_88e79402c3b7705e30abfb3d140628adf27a16be1ca606f4712a8b5b49e9a816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e79402c3b7705e30abfb3d140628adf27a16be1ca606f4712a8b5b49e9a816->enter($__internal_88e79402c3b7705e30abfb3d140628adf27a16be1ca606f4712a8b5b49e9a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_88e79402c3b7705e30abfb3d140628adf27a16be1ca606f4712a8b5b49e9a816->leave($__internal_88e79402c3b7705e30abfb3d140628adf27a16be1ca606f4712a8b5b49e9a816_prof);

        
        $__internal_c59fb21da2add6e53c09b611a39f2eb7338a6b83b1598a348ca8834370862129->leave($__internal_c59fb21da2add6e53c09b611a39f2eb7338a6b83b1598a348ca8834370862129_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a1a682a03c6417c0edef15537a5635e1c15d46d8c840fe19122641c0a2ef039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1a682a03c6417c0edef15537a5635e1c15d46d8c840fe19122641c0a2ef039->enter($__internal_8a1a682a03c6417c0edef15537a5635e1c15d46d8c840fe19122641c0a2ef039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_540fe8d15332ba196f97a26ef7e09ac6da44809af89b69d80a34b5a4db752257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540fe8d15332ba196f97a26ef7e09ac6da44809af89b69d80a34b5a4db752257->enter($__internal_540fe8d15332ba196f97a26ef7e09ac6da44809af89b69d80a34b5a4db752257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_540fe8d15332ba196f97a26ef7e09ac6da44809af89b69d80a34b5a4db752257->leave($__internal_540fe8d15332ba196f97a26ef7e09ac6da44809af89b69d80a34b5a4db752257_prof);

        
        $__internal_8a1a682a03c6417c0edef15537a5635e1c15d46d8c840fe19122641c0a2ef039->leave($__internal_8a1a682a03c6417c0edef15537a5635e1c15d46d8c840fe19122641c0a2ef039_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c31809d3467bf6e870f8d18a9ff4f688276b25b9f74d3794d9c34c70b8b8917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c31809d3467bf6e870f8d18a9ff4f688276b25b9f74d3794d9c34c70b8b8917->enter($__internal_8c31809d3467bf6e870f8d18a9ff4f688276b25b9f74d3794d9c34c70b8b8917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06f710f428a1a51c90ee046d5bbbc54eecfaf695ea61bc6a289ebb37b3c5884f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f710f428a1a51c90ee046d5bbbc54eecfaf695ea61bc6a289ebb37b3c5884f->enter($__internal_06f710f428a1a51c90ee046d5bbbc54eecfaf695ea61bc6a289ebb37b3c5884f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06f710f428a1a51c90ee046d5bbbc54eecfaf695ea61bc6a289ebb37b3c5884f->leave($__internal_06f710f428a1a51c90ee046d5bbbc54eecfaf695ea61bc6a289ebb37b3c5884f_prof);

        
        $__internal_8c31809d3467bf6e870f8d18a9ff4f688276b25b9f74d3794d9c34c70b8b8917->leave($__internal_8c31809d3467bf6e870f8d18a9ff4f688276b25b9f74d3794d9c34c70b8b8917_prof);

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
", "base.html.twig", "/home/simplon/symfony_exo/symfony-biblio/app/Resources/views/base.html.twig");
    }
}
