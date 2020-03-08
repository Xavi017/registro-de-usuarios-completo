<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_1eee89407e97d83f21f154eb9d1d19f5570048605d6dc7d8f17457503ca4bc81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45489d04f255f232b5308e213f86bc34ecfdd55d98be2aa8d94912b21dea6980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45489d04f255f232b5308e213f86bc34ecfdd55d98be2aa8d94912b21dea6980->enter($__internal_45489d04f255f232b5308e213f86bc34ecfdd55d98be2aa8d94912b21dea6980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45489d04f255f232b5308e213f86bc34ecfdd55d98be2aa8d94912b21dea6980->leave($__internal_45489d04f255f232b5308e213f86bc34ecfdd55d98be2aa8d94912b21dea6980_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f9c74bcb1bd82da4671d983c8f76fefbac66248542ee99ac9c4da1a79454bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9c74bcb1bd82da4671d983c8f76fefbac66248542ee99ac9c4da1a79454bcf->enter($__internal_2f9c74bcb1bd82da4671d983c8f76fefbac66248542ee99ac9c4da1a79454bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_2f9c74bcb1bd82da4671d983c8f76fefbac66248542ee99ac9c4da1a79454bcf->leave($__internal_2f9c74bcb1bd82da4671d983c8f76fefbac66248542ee99ac9c4da1a79454bcf_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d7b3e0e20d620a2997c7b84a2e5d883922f49108bce3edc07d5187c2975c2563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b3e0e20d620a2997c7b84a2e5d883922f49108bce3edc07d5187c2975c2563->enter($__internal_d7b3e0e20d620a2997c7b84a2e5d883922f49108bce3edc07d5187c2975c2563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d7b3e0e20d620a2997c7b84a2e5d883922f49108bce3edc07d5187c2975c2563->leave($__internal_d7b3e0e20d620a2997c7b84a2e5d883922f49108bce3edc07d5187c2975c2563_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_de54e02c59f9b1c6182ca2fc8d68bdfe33cc523dac7aa41b42a9910388c5f90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de54e02c59f9b1c6182ca2fc8d68bdfe33cc523dac7aa41b42a9910388c5f90f->enter($__internal_de54e02c59f9b1c6182ca2fc8d68bdfe33cc523dac7aa41b42a9910388c5f90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_de54e02c59f9b1c6182ca2fc8d68bdfe33cc523dac7aa41b42a9910388c5f90f->leave($__internal_de54e02c59f9b1c6182ca2fc8d68bdfe33cc523dac7aa41b42a9910388c5f90f_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0b7a0a3270bdbbf5bcf7ce4a6511b1bfe1b240e4bebbe592d26fb9dae23a1f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7a0a3270bdbbf5bcf7ce4a6511b1bfe1b240e4bebbe592d26fb9dae23a1f93->enter($__internal_0b7a0a3270bdbbf5bcf7ce4a6511b1bfe1b240e4bebbe592d26fb9dae23a1f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_0b7a0a3270bdbbf5bcf7ce4a6511b1bfe1b240e4bebbe592d26fb9dae23a1f93->leave($__internal_0b7a0a3270bdbbf5bcf7ce4a6511b1bfe1b240e4bebbe592d26fb9dae23a1f93_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_7c8e9a7f8c93c3f06568b2ac6feb60c27fb5839bf3e2127292b4f2d9a86a6e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8e9a7f8c93c3f06568b2ac6feb60c27fb5839bf3e2127292b4f2d9a86a6e06->enter($__internal_7c8e9a7f8c93c3f06568b2ac6feb60c27fb5839bf3e2127292b4f2d9a86a6e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_7c8e9a7f8c93c3f06568b2ac6feb60c27fb5839bf3e2127292b4f2d9a86a6e06->leave($__internal_7c8e9a7f8c93c3f06568b2ac6feb60c27fb5839bf3e2127292b4f2d9a86a6e06_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
