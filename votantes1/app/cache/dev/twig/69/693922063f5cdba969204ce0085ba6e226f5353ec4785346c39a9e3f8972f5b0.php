<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_83d32e3f2c77ea8c1a6f8b3cfcb43ef48de946acd9e61d828f3422f5488888a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42d722e60e56c93d1641c0edd5f253d26db98943b53cea6f3abfc91cf87b6ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d722e60e56c93d1641c0edd5f253d26db98943b53cea6f3abfc91cf87b6ccb->enter($__internal_42d722e60e56c93d1641c0edd5f253d26db98943b53cea6f3abfc91cf87b6ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d722e60e56c93d1641c0edd5f253d26db98943b53cea6f3abfc91cf87b6ccb->leave($__internal_42d722e60e56c93d1641c0edd5f253d26db98943b53cea6f3abfc91cf87b6ccb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
