<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_c1f34fd4f0884b160f0afa5ed1ecdb348142d421028d8ed565d42d9d49c8353b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb52ba7bc3d2cc5de12ec802a9f78c4c2a6209e5ca2caadad9fa24b0eda5e591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb52ba7bc3d2cc5de12ec802a9f78c4c2a6209e5ca2caadad9fa24b0eda5e591->enter($__internal_fb52ba7bc3d2cc5de12ec802a9f78c4c2a6209e5ca2caadad9fa24b0eda5e591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_fb52ba7bc3d2cc5de12ec802a9f78c4c2a6209e5ca2caadad9fa24b0eda5e591->leave($__internal_fb52ba7bc3d2cc5de12ec802a9f78c4c2a6209e5ca2caadad9fa24b0eda5e591_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_151189dcd21830072cf8d096768dbfd42693268b7b8874c6b5f5a5cb067cd8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151189dcd21830072cf8d096768dbfd42693268b7b8874c6b5f5a5cb067cd8de->enter($__internal_151189dcd21830072cf8d096768dbfd42693268b7b8874c6b5f5a5cb067cd8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 4
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            // line 5
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 6
            echo "        ";
            $context["_profile_uri"] = (($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method")) ? ($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => $this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "id", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method"))), "method")) : ($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => $this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "userAdmin", array()), "id", array(0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())), "method"))), "method")));
            // line 7
            echo "        ";
            $context["_profile_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_profile", array(), "SonataUserBundle");
            // line 8
            echo "        ";
            $context["_user_image"] = (($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "defaultAvatar", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "defaultAvatar", array()))) : (null));
            // line 9
            echo "        ";
            // line 10
            echo "        ";
            // line 11
            echo "
        ";
            // line 12
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 13
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 14
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute(($context["sonata_user"] ?? $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 15
                echo "            ";
                $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        <li class=\"user-header ";
            // line 18
            echo twig_escape_filter($this->env, ($context["_bg_class"] ?? $this->getContext($context, "_bg_class")), "html", null, true);
            echo "\">
            ";
            // line 19
            if (($context["_user_image"] ?? $this->getContext($context, "_user_image"))) {
                // line 20
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, ($context["_user_image"] ?? $this->getContext($context, "_user_image")), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 22
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 31
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["_profile_uri"] ?? $this->getContext($context, "_profile_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, ($context["_profile_text"] ?? $this->getContext($context, "_profile_text")), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["_logout_uri"] ?? $this->getContext($context, "_logout_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, ($context["_logout_text"] ?? $this->getContext($context, "_logout_text")), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
        
        $__internal_151189dcd21830072cf8d096768dbfd42693268b7b8874c6b5f5a5cb067cd8de->leave($__internal_151189dcd21830072cf8d096768dbfd42693268b7b8874c6b5f5a5cb067cd8de_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  104 => 34,  99 => 31,  92 => 22,  86 => 20,  84 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  58 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}
    {% if app.user %}
        {% set _bg_class          = \"bg-light-blue\" %}
        {% set _logout_uri        = url('sonata_user_admin_security_logout') %}
        {% set _logout_text       = 'user_block_logout'|trans({}, 'SonataUserBundle') %}
        {% set _profile_uri       = sonata_user.userAdmin.isGranted('EDIT', app.user) ? sonata_user.userAdmin.generateUrl('edit', {id: sonata_user.userAdmin.id(app.user)}) : sonata_user.userAdmin.generateUrl('show', {id: sonata_user.userAdmin.id(app.user)}) %}
        {% set _profile_text      = 'user_block_profile'|trans({}, 'SonataUserBundle') %}
        {% set _user_image        = sonata_user.defaultAvatar ? asset(sonata_user.defaultAvatar) : null %}
        {# Customize this with your profile picture implementation, see below for example #}
        {#{% set _user_image  = app.user.profilePicture|default(asset(sonata_user.defaultAvatar)) %}#}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}
            {% set _bg_class    = \"bg-light-green\" %}
            {% set _logout_uri  = url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) %}
            {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}
        {% endif %}

        <li class=\"user-header {{ _bg_class }}\">
            {% if _user_image %}
                <img src=\"{{ _user_image }}\" class=\"img-circle\" alt=\"Avatar\" />
            {% endif %}
            <p>{{ app.user }}</p>
        </li>

{#
    Uncomment to add some information
        <li class=\"user-body\">

        </li>
#}

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ _profile_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> {{ _profile_text }}</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"{{ _logout_uri }}\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> {{ _logout_text }}</a>
            </div>
        </li>
    {% endif %}
{% endblock %}
", "SonataUserBundle:Admin/Core:user_block.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Core/user_block.html.twig");
    }
}
