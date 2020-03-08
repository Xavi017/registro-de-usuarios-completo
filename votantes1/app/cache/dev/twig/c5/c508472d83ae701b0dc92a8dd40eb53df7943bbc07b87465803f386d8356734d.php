<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_8031a7fb9c2b84b8203dcf690341ea34b537682d5e4e40f8fa485b01f564ed5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aac2ff70ff1d25f21855fb717582497c8996c45cf1adf7064499dd2bf667e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aac2ff70ff1d25f21855fb717582497c8996c45cf1adf7064499dd2bf667e1f->enter($__internal_3aac2ff70ff1d25f21855fb717582497c8996c45cf1adf7064499dd2bf667e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_3aac2ff70ff1d25f21855fb717582497c8996c45cf1adf7064499dd2bf667e1f->leave($__internal_3aac2ff70ff1d25f21855fb717582497c8996c45cf1adf7064499dd2bf667e1f_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_5fb06e2b49ae205f3b8d84d9ae50700cd0ab2c37e07b97db5af976fa4e8332f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb06e2b49ae205f3b8d84d9ae50700cd0ab2c37e07b97db5af976fa4e8332f4->enter($__internal_5fb06e2b49ae205f3b8d84d9ae50700cd0ab2c37e07b97db5af976fa4e8332f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_5fb06e2b49ae205f3b8d84d9ae50700cd0ab2c37e07b97db5af976fa4e8332f4->leave($__internal_5fb06e2b49ae205f3b8d84d9ae50700cd0ab2c37e07b97db5af976fa4e8332f4_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
