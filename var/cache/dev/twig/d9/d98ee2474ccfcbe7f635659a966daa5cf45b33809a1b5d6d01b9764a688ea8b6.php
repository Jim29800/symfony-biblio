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
        $__internal_1a3c3787d4a26ae76693724a52e32900e6759073c6fa1d20cf2cb67c8b5cecad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3c3787d4a26ae76693724a52e32900e6759073c6fa1d20cf2cb67c8b5cecad->enter($__internal_1a3c3787d4a26ae76693724a52e32900e6759073c6fa1d20cf2cb67c8b5cecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e8884a241e7f769ad193ae752a08d76f2ce9784c15a16b88531406bff1e29b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8884a241e7f769ad193ae752a08d76f2ce9784c15a16b88531406bff1e29b74->enter($__internal_e8884a241e7f769ad193ae752a08d76f2ce9784c15a16b88531406bff1e29b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3c3787d4a26ae76693724a52e32900e6759073c6fa1d20cf2cb67c8b5cecad->leave($__internal_1a3c3787d4a26ae76693724a52e32900e6759073c6fa1d20cf2cb67c8b5cecad_prof);

        
        $__internal_e8884a241e7f769ad193ae752a08d76f2ce9784c15a16b88531406bff1e29b74->leave($__internal_e8884a241e7f769ad193ae752a08d76f2ce9784c15a16b88531406bff1e29b74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7450c4a048bcf1704623251cb5cc3727342351a7b7bf2c9c9b25e701fb3cf02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7450c4a048bcf1704623251cb5cc3727342351a7b7bf2c9c9b25e701fb3cf02d->enter($__internal_7450c4a048bcf1704623251cb5cc3727342351a7b7bf2c9c9b25e701fb3cf02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f057a75181bdd62a020930b2e89232f33cc8a3de572ba936363a8232c5421d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f057a75181bdd62a020930b2e89232f33cc8a3de572ba936363a8232c5421d8->enter($__internal_2f057a75181bdd62a020930b2e89232f33cc8a3de572ba936363a8232c5421d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f057a75181bdd62a020930b2e89232f33cc8a3de572ba936363a8232c5421d8->leave($__internal_2f057a75181bdd62a020930b2e89232f33cc8a3de572ba936363a8232c5421d8_prof);

        
        $__internal_7450c4a048bcf1704623251cb5cc3727342351a7b7bf2c9c9b25e701fb3cf02d->leave($__internal_7450c4a048bcf1704623251cb5cc3727342351a7b7bf2c9c9b25e701fb3cf02d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9119fc48ff91ed7e749e988d7e179a4f9b18cc65fcea2c9c1e5634e9ee1b0c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9119fc48ff91ed7e749e988d7e179a4f9b18cc65fcea2c9c1e5634e9ee1b0c59->enter($__internal_9119fc48ff91ed7e749e988d7e179a4f9b18cc65fcea2c9c1e5634e9ee1b0c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_717b61cbc790bd11ccf9c16fe5d70d53c922d3b908c3f989b1fd8cbc81087c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717b61cbc790bd11ccf9c16fe5d70d53c922d3b908c3f989b1fd8cbc81087c99->enter($__internal_717b61cbc790bd11ccf9c16fe5d70d53c922d3b908c3f989b1fd8cbc81087c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_717b61cbc790bd11ccf9c16fe5d70d53c922d3b908c3f989b1fd8cbc81087c99->leave($__internal_717b61cbc790bd11ccf9c16fe5d70d53c922d3b908c3f989b1fd8cbc81087c99_prof);

        
        $__internal_9119fc48ff91ed7e749e988d7e179a4f9b18cc65fcea2c9c1e5634e9ee1b0c59->leave($__internal_9119fc48ff91ed7e749e988d7e179a4f9b18cc65fcea2c9c1e5634e9ee1b0c59_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_948dc4df60cde3b310e626bc7452097ffcc8f910a3b26b2dbae0e98129b8867d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948dc4df60cde3b310e626bc7452097ffcc8f910a3b26b2dbae0e98129b8867d->enter($__internal_948dc4df60cde3b310e626bc7452097ffcc8f910a3b26b2dbae0e98129b8867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ab27e8a425954273755bbd34f9b2fff6708587f64ef4b378b15c5e5d2dfc6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab27e8a425954273755bbd34f9b2fff6708587f64ef4b378b15c5e5d2dfc6f8->enter($__internal_1ab27e8a425954273755bbd34f9b2fff6708587f64ef4b378b15c5e5d2dfc6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1ab27e8a425954273755bbd34f9b2fff6708587f64ef4b378b15c5e5d2dfc6f8->leave($__internal_1ab27e8a425954273755bbd34f9b2fff6708587f64ef4b378b15c5e5d2dfc6f8_prof);

        
        $__internal_948dc4df60cde3b310e626bc7452097ffcc8f910a3b26b2dbae0e98129b8867d->leave($__internal_948dc4df60cde3b310e626bc7452097ffcc8f910a3b26b2dbae0e98129b8867d_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
