<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_f35b0baada13eecc20fc95e7866273d0c7ca15d1aa2958b1920225ab930262f4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0b1712a25e6537a482b9e8fc057f150ccda9698da8854a77f5f1a2988e9d77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b1712a25e6537a482b9e8fc057f150ccda9698da8854a77f5f1a2988e9d77e->enter($__internal_b0b1712a25e6537a482b9e8fc057f150ccda9698da8854a77f5f1a2988e9d77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b1712a25e6537a482b9e8fc057f150ccda9698da8854a77f5f1a2988e9d77e->leave($__internal_b0b1712a25e6537a482b9e8fc057f150ccda9698da8854a77f5f1a2988e9d77e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}
", "SonataAdminBundle:CRUD:list_string.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
