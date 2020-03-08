<?php

/* MMSEBundle:Index:votantes.html.twig */
class __TwigTemplate_142720675fa1f3080037d39210bbc1b830bd793d2d6f89cd189860e407d814d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MMSEBundle:Index:votantes.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58abfabf416bb4f4bd2da7a0dd37ffbc9cb0bdade448d1b3832d50cbc086291b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58abfabf416bb4f4bd2da7a0dd37ffbc9cb0bdade448d1b3832d50cbc086291b->enter($__internal_58abfabf416bb4f4bd2da7a0dd37ffbc9cb0bdade448d1b3832d50cbc086291b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMSEBundle:Index:votantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58abfabf416bb4f4bd2da7a0dd37ffbc9cb0bdade448d1b3832d50cbc086291b->leave($__internal_58abfabf416bb4f4bd2da7a0dd37ffbc9cb0bdade448d1b3832d50cbc086291b_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a947d13254f0595545884382673183bb58d31535207b23e62faa4d37a95be723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a947d13254f0595545884382673183bb58d31535207b23e62faa4d37a95be723->enter($__internal_a947d13254f0595545884382673183bb58d31535207b23e62faa4d37a95be723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(\"#btnsubmit\").one(\"click\", function (){
            var \$form = \$('#frmsave');
            \$form.submit(function (e) {
                //Agregamos los campos del formulario
                var data = \$form.serialize();
                //Realizamos la peticiÃ³n
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: data,
                    beforeSend: function () {
                        \$(\"#resp\").fadeIn(\"\");
                        \$('#resp').html(\"<div align='center'><img src='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/images/ajax-loaderp.gif"), "html", null, true);
        echo "'/></div>\");
                    },
                    success: function (html) {
                        \$(\"#resp\").html(html);
                        \$(\"#resp\").fadeOut(15000);
                        document.getElementById(\"frmsave\").reset();
                    }
                });
                e.preventDefault();
            });
        });

    </script>
";
        
        $__internal_a947d13254f0595545884382673183bb58d31535207b23e62faa4d37a95be723->leave($__internal_a947d13254f0595545884382673183bb58d31535207b23e62faa4d37a95be723_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_532dd38cf9b92e35a1692b1868e0016090b56ad8db6436fb26f62b860f41a4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532dd38cf9b92e35a1692b1868e0016090b56ad8db6436fb26f62b860f41a4a7->enter($__internal_532dd38cf9b92e35a1692b1868e0016090b56ad8db6436fb26f62b860f41a4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
<!DOCTYPE HTML>
<!--
\tAlpha by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>Contact - Alpha by HTML5 UP</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
\t</head>
\t<body>
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t";
        // line 53
        $this->loadTemplate("header.html.twig", "MMSEBundle:Index:votantes.html.twig", 53)->display($context);
        // line 54
        echo "
\t\t\t<!-- Main -->
\t\t\t\t<section id=\"main\" class=\"container 75%\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>Control de usuarios</h2>
\t\t\t\t\t\t<p>Complete los siguientes campos.</p>
\t\t\t\t\t\t<hr>
                        
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmse_savev");
        echo "\" id=\"frmsave\">
\t\t\t\t\t\t    <div class=\"row uniform 50%\">
\t\t\t\t\t            <div class=\"6u 12u(mobilep)\">
                                <label for=\"ced\">Cédula</label>
                                <input type=\"text\" name=\"ced\" id=\"ced\" required/>
                                </div>
                            <div class=\"6u 12u(mobilep)\">
                                <label for=\"lugar\">¿Que desea registrar?</label>
                                <select class='form-control' required name='lugar'>
                                    <option selected disabled value=\"\">Seleccione una opción...</option> 
                                    <option value=\"ENTRADA\">ENTRADA</option> <option value=\"SALIDA\">SALIDA</option>
                                </select>
                            </div>
                            </div>
                            
                            <div class=\"row uniform\">
\t\t\t\t\t\t\t\t<div class=\"12u\" id=\"resp\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>
                            <div class=\"row uniform\">
\t\t\t\t\t\t\t\t<div class=\"6u 12u(mobilep)\">
\t\t\t\t\t\t\t\t\t<ul class=\"actions align-right\">
\t\t\t\t\t\t\t\t\t\t<li><input id=\"btnsubmit\" class=\"button special\" type=\"submit\" value=\"Guardar\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"6u 12u(mobilep)\">
\t\t\t\t\t\t\t\t\t<ul class=\"actions align-left\">
\t\t\t\t\t\t\t\t\t\t<li><input class=\"button\" type=\"reset\" value=\"Limpiar\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </form>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t<!-- Footer -->
\t\t\t\t";
        // line 100
        $this->loadTemplate("footer.html.twig", "MMSEBundle:Index:votantes.html.twig", 100)->display($context);
        // line 101
        echo "
\t\t</div>

\t</body>
</html>
";
        
        $__internal_532dd38cf9b92e35a1692b1868e0016090b56ad8db6436fb26f62b860f41a4a7->leave($__internal_532dd38cf9b92e35a1692b1868e0016090b56ad8db6436fb26f62b860f41a4a7_prof);

    }

    public function getTemplateName()
    {
        return "MMSEBundle:Index:votantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 101,  160 => 100,  121 => 64,  109 => 54,  107 => 53,  86 => 34,  80 => 33,  59 => 18,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block javascripts %}
    {{parent()}}
    <script>
        \$(\"#btnsubmit\").one(\"click\", function (){
            var \$form = \$('#frmsave');
            \$form.submit(function (e) {
                //Agregamos los campos del formulario
                var data = \$form.serialize();
                //Realizamos la peticiÃ³n
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: data,
                    beforeSend: function () {
                        \$(\"#resp\").fadeIn(\"\");
                        \$('#resp').html(\"<div align='center'><img src='{{asset('public/images/ajax-loaderp.gif')}}'/></div>\");
                    },
                    success: function (html) {
                        \$(\"#resp\").html(html);
                        \$(\"#resp\").fadeOut(15000);
                        document.getElementById(\"frmsave\").reset();
                    }
                });
                e.preventDefault();
            });
        });

    </script>
{%endblock%}

{% block body %}

<!DOCTYPE HTML>
<!--
\tAlpha by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>Contact - Alpha by HTML5 UP</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
\t</head>
\t<body>
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t{% include 'header.html.twig' %}

\t\t\t<!-- Main -->
\t\t\t\t<section id=\"main\" class=\"container 75%\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<h2>Control de usuarios</h2>
\t\t\t\t\t\t<p>Complete los siguientes campos.</p>
\t\t\t\t\t\t<hr>
                        
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<form method=\"post\" action=\"{{path('mmse_savev')}}\" id=\"frmsave\">
\t\t\t\t\t\t    <div class=\"row uniform 50%\">
\t\t\t\t\t            <div class=\"6u 12u(mobilep)\">
                                <label for=\"ced\">Cédula</label>
                                <input type=\"text\" name=\"ced\" id=\"ced\" required/>
                                </div>
                            <div class=\"6u 12u(mobilep)\">
                                <label for=\"lugar\">¿Que desea registrar?</label>
                                <select class='form-control' required name='lugar'>
                                    <option selected disabled value=\"\">Seleccione una opción...</option> 
                                    <option value=\"ENTRADA\">ENTRADA</option> <option value=\"SALIDA\">SALIDA</option>
                                </select>
                            </div>
                            </div>
                            
                            <div class=\"row uniform\">
\t\t\t\t\t\t\t\t<div class=\"12u\" id=\"resp\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>
                            <div class=\"row uniform\">
\t\t\t\t\t\t\t\t<div class=\"6u 12u(mobilep)\">
\t\t\t\t\t\t\t\t\t<ul class=\"actions align-right\">
\t\t\t\t\t\t\t\t\t\t<li><input id=\"btnsubmit\" class=\"button special\" type=\"submit\" value=\"Guardar\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"6u 12u(mobilep)\">
\t\t\t\t\t\t\t\t\t<ul class=\"actions align-left\">
\t\t\t\t\t\t\t\t\t\t<li><input class=\"button\" type=\"reset\" value=\"Limpiar\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </form>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t<!-- Footer -->
\t\t\t\t{% include 'footer.html.twig' %}

\t\t</div>

\t</body>
</html>
{% endblock%}", "MMSEBundle:Index:votantes.html.twig", "C:\\wamp64\\www\\votantes1\\src\\MMSEBundle/Resources/views/Index/votantes.html.twig");
    }
}
