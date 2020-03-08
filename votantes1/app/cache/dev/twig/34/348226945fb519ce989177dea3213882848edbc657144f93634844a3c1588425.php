<?php

/* layout.html.twig */
class __TwigTemplate_81e8c49e3376de90db7b38c0055548cd4f95c5323b795256119ca0ce8110c41a extends Twig_Template
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
        $__internal_e0eeaeeead736ddca3c02315bd5c30fc953a78392460f05c3ddabbea954a8627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0eeaeeead736ddca3c02315bd5c30fc953a78392460f05c3ddabbea954a8627->enter($__internal_e0eeaeeead736ddca3c02315bd5c30fc953a78392460f05c3ddabbea954a8627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "        </body>
    </html>
";
        
        $__internal_e0eeaeeead736ddca3c02315bd5c30fc953a78392460f05c3ddabbea954a8627->leave($__internal_e0eeaeeead736ddca3c02315bd5c30fc953a78392460f05c3ddabbea954a8627_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc268d962f3ad7af7610a53c4ec4278d380e0fc4057ab92f83b81b0379249ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc268d962f3ad7af7610a53c4ec4278d380e0fc4057ab92f83b81b0379249ca6->enter($__internal_dc268d962f3ad7af7610a53c4ec4278d380e0fc4057ab92f83b81b0379249ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Control usuarios";
        
        $__internal_dc268d962f3ad7af7610a53c4ec4278d380e0fc4057ab92f83b81b0379249ca6->leave($__internal_dc268d962f3ad7af7610a53c4ec4278d380e0fc4057ab92f83b81b0379249ca6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c125537d93e0192a54fcea5dc2dbf58238db329ea65c9b4fb939124621d5db35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c125537d93e0192a54fcea5dc2dbf58238db329ea65c9b4fb939124621d5db35->enter($__internal_c125537d93e0192a54fcea5dc2dbf58238db329ea65c9b4fb939124621d5db35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/assets/css/dr.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/highcharts.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c125537d93e0192a54fcea5dc2dbf58238db329ea65c9b4fb939124621d5db35->leave($__internal_c125537d93e0192a54fcea5dc2dbf58238db329ea65c9b4fb939124621d5db35_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec091dd15ab22dc9766f84dbc7dd9e9222d338c7e134f55bb05d43f3dc33897c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec091dd15ab22dc9766f84dbc7dd9e9222d338c7e134f55bb05d43f3dc33897c->enter($__internal_ec091dd15ab22dc9766f84dbc7dd9e9222d338c7e134f55bb05d43f3dc33897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
";
        
        $__internal_ec091dd15ab22dc9766f84dbc7dd9e9222d338c7e134f55bb05d43f3dc33897c->leave($__internal_ec091dd15ab22dc9766f84dbc7dd9e9222d338c7e134f55bb05d43f3dc33897c_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_001c4713f22628d4bbc4b3a8a447f96b0a38e2b01d1f4d1ed4cc1f237fcb6e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001c4713f22628d4bbc4b3a8a447f96b0a38e2b01d1f4d1ed4cc1f237fcb6e74->enter($__internal_001c4713f22628d4bbc4b3a8a447f96b0a38e2b01d1f4d1ed4cc1f237fcb6e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.highcharts.com/highcharts.js\"></script>
            <script src=\"https://code.highcharts.com/modules/exporting.js\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/assets/js/jquery.scrollgress.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/assets/js/util.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_001c4713f22628d4bbc4b3a8a447f96b0a38e2b01d1f4d1ed4cc1f237fcb6e74->leave($__internal_001c4713f22628d4bbc4b3a8a447f96b0a38e2b01d1f4d1ed4cc1f237fcb6e74_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 31,  156 => 30,  152 => 29,  148 => 28,  142 => 25,  138 => 24,  134 => 23,  130 => 22,  126 => 21,  121 => 20,  115 => 19,  107 => 17,  101 => 16,  92 => 11,  88 => 10,  84 => 9,  80 => 8,  75 => 7,  69 => 6,  57 => 5,  48 => 33,  45 => 19,  43 => 16,  38 => 13,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Control usuarios{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('public/css/bootstrap.min.css')}}\" />
        <link rel=\"stylesheet\" href=\"{{asset('public/assets/css/dr.css')}}\" />
        <link rel=\"stylesheet\" href=\"{{asset('public/css/bootstrap-select.min.css')}}\" />
        <link rel=\"stylesheet\" href=\"{{asset('public/css/jquery.dataTables.min.css')}}\" />
        <link rel=\"stylesheet\" href=\"{{asset('public/css/highcharts.css')}}\" />
{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"\" />
    </head>
    <body>
        {% block body %}

{% endblock %}
        {% block javascripts %}
            <script src=\"{{asset('public/js/jquery.min.js')}}\"></script>
            <script src=\"{{asset('public/js/bootbox.min.js')}}\"></script>
            <script src=\"{{asset('public/js/bootstrap.min.js')}}\"></script>
            <script src=\"{{asset('public/js/jquery.dropotron.min.js')}}\"></script>
            <script src=\"{{asset('public/js/bootstrap-select.min.js')}}\"></script>
            <script src=\"{{asset('public/js/jquery.dataTables.min.js')}}\"></script>
            <script src=\"https://code.highcharts.com/highcharts.js\"></script>
            <script src=\"https://code.highcharts.com/modules/exporting.js\"></script>
            <script src=\"{{asset('public/assets/js/jquery.scrollgress.min.js')}}\"></script>
            <script src=\"{{asset('public/assets/js/skel.min.js')}}\"></script>
            <script src=\"{{asset('public/assets/js/util.js')}}\"></script>
            <script src=\"{{asset('public/assets/js/main.js')}}\"></script>
{% endblock %}
        </body>
    </html>
", "layout.html.twig", "C:\\wamp64\\www\\votantes1\\app\\Resources\\views\\layout.html.twig");
    }
}
