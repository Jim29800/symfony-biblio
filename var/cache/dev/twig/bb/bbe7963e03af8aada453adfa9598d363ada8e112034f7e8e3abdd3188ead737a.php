<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_23555e6b8b87ea852ba88bcc408fb0085209e7661c88d93fdaea3b6b6895fa8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_300e439260096d9f30619a891b68c5fe3e4ba1f419c89b39546a4218e09bdd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300e439260096d9f30619a891b68c5fe3e4ba1f419c89b39546a4218e09bdd2b->enter($__internal_300e439260096d9f30619a891b68c5fe3e4ba1f419c89b39546a4218e09bdd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_646fcb49fd114e41e1ed12d66a93992e9fb2aba06077e17adeb2a05f196adbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646fcb49fd114e41e1ed12d66a93992e9fb2aba06077e17adeb2a05f196adbb6->enter($__internal_646fcb49fd114e41e1ed12d66a93992e9fb2aba06077e17adeb2a05f196adbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "        </div>
    </body>
</html>
";
        
        $__internal_300e439260096d9f30619a891b68c5fe3e4ba1f419c89b39546a4218e09bdd2b->leave($__internal_300e439260096d9f30619a891b68c5fe3e4ba1f419c89b39546a4218e09bdd2b_prof);

        
        $__internal_646fcb49fd114e41e1ed12d66a93992e9fb2aba06077e17adeb2a05f196adbb6->leave($__internal_646fcb49fd114e41e1ed12d66a93992e9fb2aba06077e17adeb2a05f196adbb6_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5e7ab63391a3bc4e1d3bb9ce42d4cb69c748e5e643589551df80d4b82c0ded0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e7ab63391a3bc4e1d3bb9ce42d4cb69c748e5e643589551df80d4b82c0ded0->enter($__internal_b5e7ab63391a3bc4e1d3bb9ce42d4cb69c748e5e643589551df80d4b82c0ded0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1b311a0bc5263360c4913edaf91d91de557175e5a6f3b5aee55d0b8257356a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b311a0bc5263360c4913edaf91d91de557175e5a6f3b5aee55d0b8257356a1->enter($__internal_b1b311a0bc5263360c4913edaf91d91de557175e5a6f3b5aee55d0b8257356a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_b1b311a0bc5263360c4913edaf91d91de557175e5a6f3b5aee55d0b8257356a1->leave($__internal_b1b311a0bc5263360c4913edaf91d91de557175e5a6f3b5aee55d0b8257356a1_prof);

        
        $__internal_b5e7ab63391a3bc4e1d3bb9ce42d4cb69c748e5e643589551df80d4b82c0ded0->leave($__internal_b5e7ab63391a3bc4e1d3bb9ce42d4cb69c748e5e643589551df80d4b82c0ded0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  118 => 29,  105 => 31,  103 => 29,  99 => 27,  96 => 26,  90 => 25,  81 => 22,  76 => 21,  71 => 20,  66 => 19,  64 => 18,  60 => 16,  52 => 14,  46 => 11,  42 => 10,  37 => 9,  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
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
</html>
", "@FOSUser/layout.html.twig", "/home/simplon/symfony_exo/symfony-biblio/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
