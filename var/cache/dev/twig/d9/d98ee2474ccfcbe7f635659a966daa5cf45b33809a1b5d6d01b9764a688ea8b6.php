<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dd0c8b5337cca23ee73962249d4f6357d5ba7c6db585415b057903a19fb08a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd0c8b5337cca23ee73962249d4f6357d5ba7c6db585415b057903a19fb08a2->enter($__internal_3dd0c8b5337cca23ee73962249d4f6357d5ba7c6db585415b057903a19fb08a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2eb5dcb66ba59dadfd83ff744b3790627f0621bb10b514038bff887a3eb16f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb5dcb66ba59dadfd83ff744b3790627f0621bb10b514038bff887a3eb16f20->enter($__internal_2eb5dcb66ba59dadfd83ff744b3790627f0621bb10b514038bff887a3eb16f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd0c8b5337cca23ee73962249d4f6357d5ba7c6db585415b057903a19fb08a2->leave($__internal_3dd0c8b5337cca23ee73962249d4f6357d5ba7c6db585415b057903a19fb08a2_prof);

        
        $__internal_2eb5dcb66ba59dadfd83ff744b3790627f0621bb10b514038bff887a3eb16f20->leave($__internal_2eb5dcb66ba59dadfd83ff744b3790627f0621bb10b514038bff887a3eb16f20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f3f4cf77733d2428416378c7e0b29fdb4ec2703ab63f89dfd73e6329d1b83ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3f4cf77733d2428416378c7e0b29fdb4ec2703ab63f89dfd73e6329d1b83ce->enter($__internal_7f3f4cf77733d2428416378c7e0b29fdb4ec2703ab63f89dfd73e6329d1b83ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5d184c63692dc60ff17ba4f1c46183c67e7080fec1c25845adf2315ff4dae25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d184c63692dc60ff17ba4f1c46183c67e7080fec1c25845adf2315ff4dae25->enter($__internal_b5d184c63692dc60ff17ba4f1c46183c67e7080fec1c25845adf2315ff4dae25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b5d184c63692dc60ff17ba4f1c46183c67e7080fec1c25845adf2315ff4dae25->leave($__internal_b5d184c63692dc60ff17ba4f1c46183c67e7080fec1c25845adf2315ff4dae25_prof);

        
        $__internal_7f3f4cf77733d2428416378c7e0b29fdb4ec2703ab63f89dfd73e6329d1b83ce->leave($__internal_7f3f4cf77733d2428416378c7e0b29fdb4ec2703ab63f89dfd73e6329d1b83ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2699da06cfd240fc9e2a7bceb29e80bacfd55d00133045d8a88dd74d7b739d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2699da06cfd240fc9e2a7bceb29e80bacfd55d00133045d8a88dd74d7b739d9c->enter($__internal_2699da06cfd240fc9e2a7bceb29e80bacfd55d00133045d8a88dd74d7b739d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5969a0a36985c54763440b9faa658bd7e456feff779b82459b094ad1001f40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5969a0a36985c54763440b9faa658bd7e456feff779b82459b094ad1001f40d->enter($__internal_c5969a0a36985c54763440b9faa658bd7e456feff779b82459b094ad1001f40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c5969a0a36985c54763440b9faa658bd7e456feff779b82459b094ad1001f40d->leave($__internal_c5969a0a36985c54763440b9faa658bd7e456feff779b82459b094ad1001f40d_prof);

        
        $__internal_2699da06cfd240fc9e2a7bceb29e80bacfd55d00133045d8a88dd74d7b739d9c->leave($__internal_2699da06cfd240fc9e2a7bceb29e80bacfd55d00133045d8a88dd74d7b739d9c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddfe8edfc7463daf3978f62dc0042b7f4043d424c14a57bc0409a6b907ce68a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfe8edfc7463daf3978f62dc0042b7f4043d424c14a57bc0409a6b907ce68a8->enter($__internal_ddfe8edfc7463daf3978f62dc0042b7f4043d424c14a57bc0409a6b907ce68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2f423fc3c3cd03e4900adc79680938124d9467fbd963c7f9255b0e6eade5aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f423fc3c3cd03e4900adc79680938124d9467fbd963c7f9255b0e6eade5aca->enter($__internal_c2f423fc3c3cd03e4900adc79680938124d9467fbd963c7f9255b0e6eade5aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c2f423fc3c3cd03e4900adc79680938124d9467fbd963c7f9255b0e6eade5aca->leave($__internal_c2f423fc3c3cd03e4900adc79680938124d9467fbd963c7f9255b0e6eade5aca_prof);

        
        $__internal_ddfe8edfc7463daf3978f62dc0042b7f4043d424c14a57bc0409a6b907ce68a8->leave($__internal_ddfe8edfc7463daf3978f62dc0042b7f4043d424c14a57bc0409a6b907ce68a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/simplon/symfony_exo/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
