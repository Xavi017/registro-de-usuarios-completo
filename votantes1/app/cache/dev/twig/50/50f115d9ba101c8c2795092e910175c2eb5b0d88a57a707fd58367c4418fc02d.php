<?php

/* header.html.twig */
class __TwigTemplate_67ddb448d7484ade06b2a9d6d5bfae31d096ea01c866c8791f627870d8309084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04e7da9dc2838e5742edd71ad10aa26d03f745c4aae5cb9730bc21d10b59325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e7da9dc2838e5742edd71ad10aa26d03f745c4aae5cb9730bc21d10b59325f->enter($__internal_04e7da9dc2838e5742edd71ad10aa26d03f745c4aae5cb9730bc21d10b59325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<!-- Header -->
\t\t\t\t<header id=\"header\">
\t\t\t\t\t<h1>Control de usuarios</h1>
\t\t\t\t</header>";
        
        $__internal_04e7da9dc2838e5742edd71ad10aa26d03f745c4aae5cb9730bc21d10b59325f->leave($__internal_04e7da9dc2838e5742edd71ad10aa26d03f745c4aae5cb9730bc21d10b59325f_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header -->
\t\t\t\t<header id=\"header\">
\t\t\t\t\t<h1>Control de usuarios</h1>
\t\t\t\t</header>", "header.html.twig", "C:\\wamp64\\www\\votantes1\\app\\Resources\\views\\header.html.twig");
    }
}
