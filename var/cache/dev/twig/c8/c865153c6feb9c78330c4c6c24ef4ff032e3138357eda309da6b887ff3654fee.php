<?php

/* base.html.twig */
class __TwigTemplate_88c4659986c141a0519f65331b7a9b3a1efa2e259da794e4f568025a53985d36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcf3338dd86e39c58b3df09765312c5549b3d5d21490265a466762075e614078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf3338dd86e39c58b3df09765312c5549b3d5d21490265a466762075e614078->enter($__internal_dcf3338dd86e39c58b3df09765312c5549b3d5d21490265a466762075e614078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_af2f76ffa28e625caca5321a9939b775991904286a5c970e35f6f3b6b431c185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2f76ffa28e625caca5321a9939b775991904286a5c970e35f6f3b6b431c185->enter($__internal_af2f76ffa28e625caca5321a9939b775991904286a5c970e35f6f3b6b431c185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "    
</head>

<body>
    
    <div class=\"container\">
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "    </div>
    
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</body>
</html>";
        
        $__internal_dcf3338dd86e39c58b3df09765312c5549b3d5d21490265a466762075e614078->leave($__internal_dcf3338dd86e39c58b3df09765312c5549b3d5d21490265a466762075e614078_prof);

        
        $__internal_af2f76ffa28e625caca5321a9939b775991904286a5c970e35f6f3b6b431c185->leave($__internal_af2f76ffa28e625caca5321a9939b775991904286a5c970e35f6f3b6b431c185_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aecd6ebee538067779713f7cbced75aa2d30d16fc64aaa73747d44e15eaf3ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecd6ebee538067779713f7cbced75aa2d30d16fc64aaa73747d44e15eaf3ac1->enter($__internal_aecd6ebee538067779713f7cbced75aa2d30d16fc64aaa73747d44e15eaf3ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24163b9e187013db0a15fc6496131e0a71d2a449d51e55566dc4e9eb9f841e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24163b9e187013db0a15fc6496131e0a71d2a449d51e55566dc4e9eb9f841e61->enter($__internal_24163b9e187013db0a15fc6496131e0a71d2a449d51e55566dc4e9eb9f841e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Voilà !";
        
        $__internal_24163b9e187013db0a15fc6496131e0a71d2a449d51e55566dc4e9eb9f841e61->leave($__internal_24163b9e187013db0a15fc6496131e0a71d2a449d51e55566dc4e9eb9f841e61_prof);

        
        $__internal_aecd6ebee538067779713f7cbced75aa2d30d16fc64aaa73747d44e15eaf3ac1->leave($__internal_aecd6ebee538067779713f7cbced75aa2d30d16fc64aaa73747d44e15eaf3ac1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e393f04381c0f5dbfc176445b13116c928d3479e7d25272bc5f7b5b707f0661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e393f04381c0f5dbfc176445b13116c928d3479e7d25272bc5f7b5b707f0661->enter($__internal_2e393f04381c0f5dbfc176445b13116c928d3479e7d25272bc5f7b5b707f0661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b2eb60d121dbe784e812fbeac2eb8bca814ea11cea29f0f23cfbb9a68821710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2eb60d121dbe784e812fbeac2eb8bca814ea11cea29f0f23cfbb9a68821710->enter($__internal_7b2eb60d121dbe784e812fbeac2eb8bca814ea11cea29f0f23cfbb9a68821710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">       
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_7b2eb60d121dbe784e812fbeac2eb8bca814ea11cea29f0f23cfbb9a68821710->leave($__internal_7b2eb60d121dbe784e812fbeac2eb8bca814ea11cea29f0f23cfbb9a68821710_prof);

        
        $__internal_2e393f04381c0f5dbfc176445b13116c928d3479e7d25272bc5f7b5b707f0661->leave($__internal_2e393f04381c0f5dbfc176445b13116c928d3479e7d25272bc5f7b5b707f0661_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c14e2276eb996099e403e08bed456d72fdf5826718adb00ec483bc6555d67e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c14e2276eb996099e403e08bed456d72fdf5826718adb00ec483bc6555d67e5->enter($__internal_5c14e2276eb996099e403e08bed456d72fdf5826718adb00ec483bc6555d67e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0288f1a241aeb430a96fc0182f550ee6d9b95a67b8a938960ce68d8f1a3273fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0288f1a241aeb430a96fc0182f550ee6d9b95a67b8a938960ce68d8f1a3273fc->enter($__internal_0288f1a241aeb430a96fc0182f550ee6d9b95a67b8a938960ce68d8f1a3273fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0288f1a241aeb430a96fc0182f550ee6d9b95a67b8a938960ce68d8f1a3273fc->leave($__internal_0288f1a241aeb430a96fc0182f550ee6d9b95a67b8a938960ce68d8f1a3273fc_prof);

        
        $__internal_5c14e2276eb996099e403e08bed456d72fdf5826718adb00ec483bc6555d67e5->leave($__internal_5c14e2276eb996099e403e08bed456d72fdf5826718adb00ec483bc6555d67e5_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4384d3a6bf753f2a55e77cbd756eab6d38220cfbafcf55edd914a07d558e9320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4384d3a6bf753f2a55e77cbd756eab6d38220cfbafcf55edd914a07d558e9320->enter($__internal_4384d3a6bf753f2a55e77cbd756eab6d38220cfbafcf55edd914a07d558e9320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4dc240af8d41d9ff05dbf4124f34739f88ce8541c5dcc6b705a77cf6d76eddb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc240af8d41d9ff05dbf4124f34739f88ce8541c5dcc6b705a77cf6d76eddb7->enter($__internal_4dc240af8d41d9ff05dbf4124f34739f88ce8541c5dcc6b705a77cf6d76eddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_4dc240af8d41d9ff05dbf4124f34739f88ce8541c5dcc6b705a77cf6d76eddb7->leave($__internal_4dc240af8d41d9ff05dbf4124f34739f88ce8541c5dcc6b705a77cf6d76eddb7_prof);

        
        $__internal_4384d3a6bf753f2a55e77cbd756eab6d38220cfbafcf55edd914a07d558e9320->leave($__internal_4384d3a6bf753f2a55e77cbd756eab6d38220cfbafcf55edd914a07d558e9320_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 21,  138 => 20,  129 => 19,  112 => 16,  100 => 8,  95 => 7,  86 => 6,  68 => 5,  57 => 23,  55 => 19,  51 => 17,  49 => 16,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Voilà !{% endblock %}</title>
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">       
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    {% endblock %}
    
</head>

<body>
    
    <div class=\"container\">
        {% block content %}{% endblock %}
    </div>
    
    {% block javascripts %}
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    {% endblock %}
</body>
</html>", "base.html.twig", "/home/simplon/SYMFONY/symfony-biblio/app/Resources/views/base.html.twig");
    }
}
