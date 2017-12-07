<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9a29049e78834671771c297809c85acb93ce31d5a517e7a5553129007fc792ce extends Twig_Template
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
        $__internal_92d93bff79e8ed84dcf5b5aff529b21c39bf50d6af369699dd272d5d6b754fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d93bff79e8ed84dcf5b5aff529b21c39bf50d6af369699dd272d5d6b754fcc->enter($__internal_92d93bff79e8ed84dcf5b5aff529b21c39bf50d6af369699dd272d5d6b754fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bd498d4dac6b5c47032d1b37591ce0c720de5095f2663f2c73558ae6c58f7dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd498d4dac6b5c47032d1b37591ce0c720de5095f2663f2c73558ae6c58f7dbe->enter($__internal_bd498d4dac6b5c47032d1b37591ce0c720de5095f2663f2c73558ae6c58f7dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d93bff79e8ed84dcf5b5aff529b21c39bf50d6af369699dd272d5d6b754fcc->leave($__internal_92d93bff79e8ed84dcf5b5aff529b21c39bf50d6af369699dd272d5d6b754fcc_prof);

        
        $__internal_bd498d4dac6b5c47032d1b37591ce0c720de5095f2663f2c73558ae6c58f7dbe->leave($__internal_bd498d4dac6b5c47032d1b37591ce0c720de5095f2663f2c73558ae6c58f7dbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdca1692b7984cd9f351b42dd52254d62fea329c39308dd76c03aa459f503498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdca1692b7984cd9f351b42dd52254d62fea329c39308dd76c03aa459f503498->enter($__internal_cdca1692b7984cd9f351b42dd52254d62fea329c39308dd76c03aa459f503498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3929028aa31411d9b2236d0a4c9ad62965e751f894494f2747f5d7e2f973113f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3929028aa31411d9b2236d0a4c9ad62965e751f894494f2747f5d7e2f973113f->enter($__internal_3929028aa31411d9b2236d0a4c9ad62965e751f894494f2747f5d7e2f973113f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3929028aa31411d9b2236d0a4c9ad62965e751f894494f2747f5d7e2f973113f->leave($__internal_3929028aa31411d9b2236d0a4c9ad62965e751f894494f2747f5d7e2f973113f_prof);

        
        $__internal_cdca1692b7984cd9f351b42dd52254d62fea329c39308dd76c03aa459f503498->leave($__internal_cdca1692b7984cd9f351b42dd52254d62fea329c39308dd76c03aa459f503498_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1fd940d707e48aac31fd7089a531bdf8583ddb3424b66938cc6f41c1a8912b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fd940d707e48aac31fd7089a531bdf8583ddb3424b66938cc6f41c1a8912b6->enter($__internal_b1fd940d707e48aac31fd7089a531bdf8583ddb3424b66938cc6f41c1a8912b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_730709192eae9a6cc3adb9049c10cac10cbb629060a50f3c6f669c47e0970910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730709192eae9a6cc3adb9049c10cac10cbb629060a50f3c6f669c47e0970910->enter($__internal_730709192eae9a6cc3adb9049c10cac10cbb629060a50f3c6f669c47e0970910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_730709192eae9a6cc3adb9049c10cac10cbb629060a50f3c6f669c47e0970910->leave($__internal_730709192eae9a6cc3adb9049c10cac10cbb629060a50f3c6f669c47e0970910_prof);

        
        $__internal_b1fd940d707e48aac31fd7089a531bdf8583ddb3424b66938cc6f41c1a8912b6->leave($__internal_b1fd940d707e48aac31fd7089a531bdf8583ddb3424b66938cc6f41c1a8912b6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d8f5b8f772568f190797dda2a41bb3ea4c0586c5839dc1f069f5a526e7469ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8f5b8f772568f190797dda2a41bb3ea4c0586c5839dc1f069f5a526e7469ef->enter($__internal_2d8f5b8f772568f190797dda2a41bb3ea4c0586c5839dc1f069f5a526e7469ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5355d9f6231595782812af709a11f9a1b661867d160f9574b1c3b6359981506d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5355d9f6231595782812af709a11f9a1b661867d160f9574b1c3b6359981506d->enter($__internal_5355d9f6231595782812af709a11f9a1b661867d160f9574b1c3b6359981506d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5355d9f6231595782812af709a11f9a1b661867d160f9574b1c3b6359981506d->leave($__internal_5355d9f6231595782812af709a11f9a1b661867d160f9574b1c3b6359981506d_prof);

        
        $__internal_2d8f5b8f772568f190797dda2a41bb3ea4c0586c5839dc1f069f5a526e7469ef->leave($__internal_2d8f5b8f772568f190797dda2a41bb3ea4c0586c5839dc1f069f5a526e7469ef_prof);

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
