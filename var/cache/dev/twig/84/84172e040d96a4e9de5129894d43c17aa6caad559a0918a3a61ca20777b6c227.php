<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_309c93b9214ae723c5da3216a7bc1d0fae8cd288bc6e3e1538d81ac06a05afbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfc5899b414f09e5821d0ed3d7c9016bb95346367670e75cfd86a5dbabc57402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc5899b414f09e5821d0ed3d7c9016bb95346367670e75cfd86a5dbabc57402->enter($__internal_cfc5899b414f09e5821d0ed3d7c9016bb95346367670e75cfd86a5dbabc57402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_8c495efae665cc467be6f265af4cdc8003083cf9a633b7beee5f034604b6111b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c495efae665cc467be6f265af4cdc8003083cf9a633b7beee5f034604b6111b->enter($__internal_8c495efae665cc467be6f265af4cdc8003083cf9a633b7beee5f034604b6111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc5899b414f09e5821d0ed3d7c9016bb95346367670e75cfd86a5dbabc57402->leave($__internal_cfc5899b414f09e5821d0ed3d7c9016bb95346367670e75cfd86a5dbabc57402_prof);

        
        $__internal_8c495efae665cc467be6f265af4cdc8003083cf9a633b7beee5f034604b6111b->leave($__internal_8c495efae665cc467be6f265af4cdc8003083cf9a633b7beee5f034604b6111b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_71cdf3cc99b67c1b5277a1d80d3fba603becd6f428a5dd89436c8bc81e217701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cdf3cc99b67c1b5277a1d80d3fba603becd6f428a5dd89436c8bc81e217701->enter($__internal_71cdf3cc99b67c1b5277a1d80d3fba603becd6f428a5dd89436c8bc81e217701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd15ae89db2f7d3205387f0bde94793e665db8978dc4680534e0144abad70204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd15ae89db2f7d3205387f0bde94793e665db8978dc4680534e0144abad70204->enter($__internal_dd15ae89db2f7d3205387f0bde94793e665db8978dc4680534e0144abad70204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <body>
        <div>
            ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 15
        echo "        </div>

        ";
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        <div>
            ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "        </div>
    </body>
";
        
        $__internal_dd15ae89db2f7d3205387f0bde94793e665db8978dc4680534e0144abad70204->leave($__internal_dd15ae89db2f7d3205387f0bde94793e665db8978dc4680534e0144abad70204_prof);

        
        $__internal_71cdf3cc99b67c1b5277a1d80d3fba603becd6f428a5dd89436c8bc81e217701->leave($__internal_71cdf3cc99b67c1b5277a1d80d3fba603becd6f428a5dd89436c8bc81e217701_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28cbec2ce121aa4875f3eea9bc3ff6f206c9fe7069c6d6d9c5b1fe01567feca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cbec2ce121aa4875f3eea9bc3ff6f206c9fe7069c6d6d9c5b1fe01567feca6->enter($__internal_28cbec2ce121aa4875f3eea9bc3ff6f206c9fe7069c6d6d9c5b1fe01567feca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1585417cea4aa1b6f80699eacae53fd5d3255691401eff858a9009ff1f47ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1585417cea4aa1b6f80699eacae53fd5d3255691401eff858a9009ff1f47ef4->enter($__internal_b1585417cea4aa1b6f80699eacae53fd5d3255691401eff858a9009ff1f47ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "            ";
        
        $__internal_b1585417cea4aa1b6f80699eacae53fd5d3255691401eff858a9009ff1f47ef4->leave($__internal_b1585417cea4aa1b6f80699eacae53fd5d3255691401eff858a9009ff1f47ef4_prof);

        
        $__internal_28cbec2ce121aa4875f3eea9bc3ff6f206c9fe7069c6d6d9c5b1fe01567feca6->leave($__internal_28cbec2ce121aa4875f3eea9bc3ff6f206c9fe7069c6d6d9c5b1fe01567feca6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 29,  136 => 28,  124 => 30,  122 => 28,  118 => 26,  115 => 25,  109 => 24,  100 => 21,  95 => 20,  90 => 19,  85 => 18,  83 => 17,  79 => 15,  71 => 13,  65 => 10,  61 => 9,  56 => 8,  54 => 7,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" \t
{% extends 'base.html.twig' %}

{% block content %}
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/simplon/SYMFONY/symfony-biblio/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
