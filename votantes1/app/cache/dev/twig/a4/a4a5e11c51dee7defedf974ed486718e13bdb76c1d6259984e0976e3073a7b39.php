<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_53fe86aff5a11df694f10b8c9e70068f5d582c444fca9f8f7ada06067be9f830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f4ef5d2844dbd194404619df795a6ad0e2e49e309f68052c8f61dae36fbe6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f4ef5d2844dbd194404619df795a6ad0e2e49e309f68052c8f61dae36fbe6a->enter($__internal_c2f4ef5d2844dbd194404619df795a6ad0e2e49e309f68052c8f61dae36fbe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_c2f4ef5d2844dbd194404619df795a6ad0e2e49e309f68052c8f61dae36fbe6a->leave($__internal_c2f4ef5d2844dbd194404619df795a6ad0e2e49e309f68052c8f61dae36fbe6a_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_6b646030a29c3d0220557c605d5e9eb9a27499cc1ef1029cd8d4c1c76c9fffff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b646030a29c3d0220557c605d5e9eb9a27499cc1ef1029cd8d4c1c76c9fffff->enter($__internal_6b646030a29c3d0220557c605d5e9eb9a27499cc1ef1029cd8d4c1c76c9fffff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, ($context["read_only_choices"] ?? $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["read_only_choices"] ?? $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6b646030a29c3d0220557c605d5e9eb9a27499cc1ef1029cd8d4c1c76c9fffff->leave($__internal_6b646030a29c3d0220557c605d5e9eb9a27499cc1ef1029cd8d4c1c76c9fffff_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sonata_security_roles_widget %}
{% spaceless %}
    <div class=\"editable\">
        <h4>{{ 'field.label_roles_editable'|trans({}, \"SonataUserBundle\") }}</h4>
        {{ block('choice_widget') }}
    </div>
    {% if read_only_choices|length > 0 %}
    <div class=\"readonly\">
        <h4>{{ 'field.label_roles_readonly'|trans({}, \"SonataUserBundle\") }}</h4>
        <ul>
        {% for choice in read_only_choices %}
            <li>{{ choice }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock sonata_security_roles_widget %}
", "SonataUserBundle:Form:form_admin_fields.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\user-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
