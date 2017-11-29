<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f6d38f299520f2a108ebdd8f26e59901f624c0ede75d35a61e30b00b48047e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6d38f299520f2a108ebdd8f26e59901f624c0ede75d35a61e30b00b48047e3->enter($__internal_9f6d38f299520f2a108ebdd8f26e59901f624c0ede75d35a61e30b00b48047e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a8bf8bb107b5e22b239e4f4eca54fa096f617a62317f18191375bf060579946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8bf8bb107b5e22b239e4f4eca54fa096f617a62317f18191375bf060579946->enter($__internal_3a8bf8bb107b5e22b239e4f4eca54fa096f617a62317f18191375bf060579946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6d38f299520f2a108ebdd8f26e59901f624c0ede75d35a61e30b00b48047e3->leave($__internal_9f6d38f299520f2a108ebdd8f26e59901f624c0ede75d35a61e30b00b48047e3_prof);

        
        $__internal_3a8bf8bb107b5e22b239e4f4eca54fa096f617a62317f18191375bf060579946->leave($__internal_3a8bf8bb107b5e22b239e4f4eca54fa096f617a62317f18191375bf060579946_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0495837adbfa2497cbb3a47e8bf638364ea52e031b74b614b97333d87fca2ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0495837adbfa2497cbb3a47e8bf638364ea52e031b74b614b97333d87fca2ed7->enter($__internal_0495837adbfa2497cbb3a47e8bf638364ea52e031b74b614b97333d87fca2ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e9d4f6ede4d04c97aad72859545b5bfb6ec9d1288eb91040c8134dcb59b9824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9d4f6ede4d04c97aad72859545b5bfb6ec9d1288eb91040c8134dcb59b9824->enter($__internal_4e9d4f6ede4d04c97aad72859545b5bfb6ec9d1288eb91040c8134dcb59b9824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4e9d4f6ede4d04c97aad72859545b5bfb6ec9d1288eb91040c8134dcb59b9824->leave($__internal_4e9d4f6ede4d04c97aad72859545b5bfb6ec9d1288eb91040c8134dcb59b9824_prof);

        
        $__internal_0495837adbfa2497cbb3a47e8bf638364ea52e031b74b614b97333d87fca2ed7->leave($__internal_0495837adbfa2497cbb3a47e8bf638364ea52e031b74b614b97333d87fca2ed7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73e74c40a77aebc6691b13fd0e050904292c0c987ec5a16ef1e98298cc1f172c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e74c40a77aebc6691b13fd0e050904292c0c987ec5a16ef1e98298cc1f172c->enter($__internal_73e74c40a77aebc6691b13fd0e050904292c0c987ec5a16ef1e98298cc1f172c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_511ac4e5c3bd9210caf1931d9b3ee2c94e46ac2a062452d78124697ac399cefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511ac4e5c3bd9210caf1931d9b3ee2c94e46ac2a062452d78124697ac399cefb->enter($__internal_511ac4e5c3bd9210caf1931d9b3ee2c94e46ac2a062452d78124697ac399cefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_511ac4e5c3bd9210caf1931d9b3ee2c94e46ac2a062452d78124697ac399cefb->leave($__internal_511ac4e5c3bd9210caf1931d9b3ee2c94e46ac2a062452d78124697ac399cefb_prof);

        
        $__internal_73e74c40a77aebc6691b13fd0e050904292c0c987ec5a16ef1e98298cc1f172c->leave($__internal_73e74c40a77aebc6691b13fd0e050904292c0c987ec5a16ef1e98298cc1f172c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33b360e1b6113de193684a136b089fa87a085414145179969782cf16739bf8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b360e1b6113de193684a136b089fa87a085414145179969782cf16739bf8cb->enter($__internal_33b360e1b6113de193684a136b089fa87a085414145179969782cf16739bf8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62151324dca20a89ff4ae02ce1757f1ed59f767210ce422f97196c5c5b04ab1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62151324dca20a89ff4ae02ce1757f1ed59f767210ce422f97196c5c5b04ab1c->enter($__internal_62151324dca20a89ff4ae02ce1757f1ed59f767210ce422f97196c5c5b04ab1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_62151324dca20a89ff4ae02ce1757f1ed59f767210ce422f97196c5c5b04ab1c->leave($__internal_62151324dca20a89ff4ae02ce1757f1ed59f767210ce422f97196c5c5b04ab1c_prof);

        
        $__internal_33b360e1b6113de193684a136b089fa87a085414145179969782cf16739bf8cb->leave($__internal_33b360e1b6113de193684a136b089fa87a085414145179969782cf16739bf8cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/simplon/SYMFONY/symfony-biblio/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
