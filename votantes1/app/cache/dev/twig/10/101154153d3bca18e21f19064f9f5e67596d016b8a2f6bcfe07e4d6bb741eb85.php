<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_ba930db28a5f7722d51eb91b26e781e00583bdc2c6a878ef9d94eeba96694a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fd451ba899306c3bfe87908a647e65c0bb8913fe10dd1d1c0ac0f0d63a3c60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd451ba899306c3bfe87908a647e65c0bb8913fe10dd1d1c0ac0f0d63a3c60c->enter($__internal_3fd451ba899306c3bfe87908a647e65c0bb8913fe10dd1d1c0ac0f0d63a3c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd451ba899306c3bfe87908a647e65c0bb8913fe10dd1d1c0ac0f0d63a3c60c->leave($__internal_3fd451ba899306c3bfe87908a647e65c0bb8913fe10dd1d1c0ac0f0d63a3c60c_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_ab92f3a3d4de4e2bde9698c4aed3bf04ac568921956b3e2fece869646373726e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab92f3a3d4de4e2bde9698c4aed3bf04ac568921956b3e2fece869646373726e->enter($__internal_ab92f3a3d4de4e2bde9698c4aed3bf04ac568921956b3e2fece869646373726e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->getrender_array(($context["value"] ?? $this->getContext($context, "value")));
        echo "
";
        
        $__internal_ab92f3a3d4de4e2bde9698c4aed3bf04ac568921956b3e2fece869646373726e->leave($__internal_ab92f3a3d4de4e2bde9698c4aed3bf04ac568921956b3e2fece869646373726e_prof);

    }

    // line 12
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dfda3468d37f26cda16465ed3206f4c055de728989098404c154a55753727882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_dfda3468d37f26cda16465ed3206f4c055de728989098404c154a55753727882->enter($__internal_dfda3468d37f26cda16465ed3206f4c055de728989098404c154a55753727882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->getrender_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_dfda3468d37f26cda16465ed3206f4c055de728989098404c154a55753727882->leave($__internal_dfda3468d37f26cda16465ed3206f4c055de728989098404c154a55753727882_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  83 => 17,  75 => 15,  72 => 14,  67 => 13,  52 => 12,  42 => 25,  36 => 24,  29 => 22,  27 => 11,  18 => 22,);
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
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
