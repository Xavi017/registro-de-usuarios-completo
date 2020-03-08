<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3cff3d1129bed131dda60c2902d3974fea1d8ee4c78471c0aee4ed7689f162de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83658167ab6522195dea190121e009c358b2d7d708c7d812abd15daed578e30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83658167ab6522195dea190121e009c358b2d7d708c7d812abd15daed578e30c->enter($__internal_83658167ab6522195dea190121e009c358b2d7d708c7d812abd15daed578e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83658167ab6522195dea190121e009c358b2d7d708c7d812abd15daed578e30c->leave($__internal_83658167ab6522195dea190121e009c358b2d7d708c7d812abd15daed578e30c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1636a7dbb598008490e0219096b03578ca50faaa630637c05d09c447d10d1468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1636a7dbb598008490e0219096b03578ca50faaa630637c05d09c447d10d1468->enter($__internal_1636a7dbb598008490e0219096b03578ca50faaa630637c05d09c447d10d1468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1636a7dbb598008490e0219096b03578ca50faaa630637c05d09c447d10d1468->leave($__internal_1636a7dbb598008490e0219096b03578ca50faaa630637c05d09c447d10d1468_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b479710abfc4500a12a3d981a3cfd539823be665edd4d8b833ee8bbf63fe406f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b479710abfc4500a12a3d981a3cfd539823be665edd4d8b833ee8bbf63fe406f->enter($__internal_b479710abfc4500a12a3d981a3cfd539823be665edd4d8b833ee8bbf63fe406f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b479710abfc4500a12a3d981a3cfd539823be665edd4d8b833ee8bbf63fe406f->leave($__internal_b479710abfc4500a12a3d981a3cfd539823be665edd4d8b833ee8bbf63fe406f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd0321346e7fade09def10bc3fad3b4942c4b859193bbbfc5f2351968d4dbe4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0321346e7fade09def10bc3fad3b4942c4b859193bbbfc5f2351968d4dbe4c->enter($__internal_dd0321346e7fade09def10bc3fad3b4942c4b859193bbbfc5f2351968d4dbe4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dd0321346e7fade09def10bc3fad3b4942c4b859193bbbfc5f2351968d4dbe4c->leave($__internal_dd0321346e7fade09def10bc3fad3b4942c4b859193bbbfc5f2351968d4dbe4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
