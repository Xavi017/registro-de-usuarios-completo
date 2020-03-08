<?php

/* footer.html.twig */
class __TwigTemplate_a4217e8833d01c500fdfd965b5d1d50536c0e39bfb16f1aa60f9fd1a77c3abf3 extends Twig_Template
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
        $__internal_43f1cb4bba9e02a8af617102a436e4cb68e054e096f7f60836172e16decbd6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f1cb4bba9e02a8af617102a436e4cb68e054e096f7f60836172e16decbd6c8->enter($__internal_43f1cb4bba9e02a8af617102a436e4cb68e054e096f7f60836172e16decbd6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t<li>&copy;<li><a href=\"admin\" target=\"_blank\">Admin</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>";
        
        $__internal_43f1cb4bba9e02a8af617102a436e4cb68e054e096f7f60836172e16decbd6c8->leave($__internal_43f1cb4bba9e02a8af617102a436e4cb68e054e096f7f60836172e16decbd6c8_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
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
        return new Twig_Source("<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t<li>&copy;<li><a href=\"admin\" target=\"_blank\">Admin</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>", "footer.html.twig", "C:\\wamp64\\www\\votantes1\\app\\Resources\\views\\footer.html.twig");
    }
}
