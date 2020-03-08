<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_98724ae5e8391ce086334910d23fe72c5e40afbc69d9ad926fbc38716d841ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af255eec8c5f526a683ad57c4e3f5d102a5864e850db798b51aacb16ce68390d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af255eec8c5f526a683ad57c4e3f5d102a5864e850db798b51aacb16ce68390d->enter($__internal_af255eec8c5f526a683ad57c4e3f5d102a5864e850db798b51aacb16ce68390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_af255eec8c5f526a683ad57c4e3f5d102a5864e850db798b51aacb16ce68390d->leave($__internal_af255eec8c5f526a683ad57c4e3f5d102a5864e850db798b51aacb16ce68390d_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_a4fcd94224f53de7299cf8067857573bac030902e97e54e4883e83b5f3c4e6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fcd94224f53de7299cf8067857573bac030902e97e54e4883e83b5f3c4e6fe->enter($__internal_a4fcd94224f53de7299cf8067857573bac030902e97e54e4883e83b5f3c4e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_a4fcd94224f53de7299cf8067857573bac030902e97e54e4883e83b5f3c4e6fe->leave($__internal_a4fcd94224f53de7299cf8067857573bac030902e97e54e4883e83b5f3c4e6fe_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_8dad65f272633221d85512d786017ee43c02e69e60daa42e73d5cfc457bcaaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dad65f272633221d85512d786017ee43c02e69e60daa42e73d5cfc457bcaaa9->enter($__internal_8dad65f272633221d85512d786017ee43c02e69e60daa42e73d5cfc457bcaaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_8dad65f272633221d85512d786017ee43c02e69e60daa42e73d5cfc457bcaaa9->leave($__internal_8dad65f272633221d85512d786017ee43c02e69e60daa42e73d5cfc457bcaaa9_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d779b4570bb2326cb3f824adcdd7bb5435237f5971d34715d3fcf89a81d560c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d779b4570bb2326cb3f824adcdd7bb5435237f5971d34715d3fcf89a81d560c->enter($__internal_5d779b4570bb2326cb3f824adcdd7bb5435237f5971d34715d3fcf89a81d560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_5d779b4570bb2326cb3f824adcdd7bb5435237f5971d34715d3fcf89a81d560c->leave($__internal_5d779b4570bb2326cb3f824adcdd7bb5435237f5971d34715d3fcf89a81d560c_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6cd502e9cd490f10411823a6a62d69c0eda5211382997654f8eb34793ece458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cd502e9cd490f10411823a6a62d69c0eda5211382997654f8eb34793ece458->enter($__internal_e6cd502e9cd490f10411823a6a62d69c0eda5211382997654f8eb34793ece458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_e6cd502e9cd490f10411823a6a62d69c0eda5211382997654f8eb34793ece458->leave($__internal_e6cd502e9cd490f10411823a6a62d69c0eda5211382997654f8eb34793ece458_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_536f8728d6f07d01bec8308dec0db73f73339e0ab19aec09efd4bf32b9e8f473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536f8728d6f07d01bec8308dec0db73f73339e0ab19aec09efd4bf32b9e8f473->enter($__internal_536f8728d6f07d01bec8308dec0db73f73339e0ab19aec09efd4bf32b9e8f473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_536f8728d6f07d01bec8308dec0db73f73339e0ab19aec09efd4bf32b9e8f473->leave($__internal_536f8728d6f07d01bec8308dec0db73f73339e0ab19aec09efd4bf32b9e8f473_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_a5b94284d67a7f331d0420dedd8550408824100f5ee28a8d96e63b9988e61496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b94284d67a7f331d0420dedd8550408824100f5ee28a8d96e63b9988e61496->enter($__internal_a5b94284d67a7f331d0420dedd8550408824100f5ee28a8d96e63b9988e61496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_a5b94284d67a7f331d0420dedd8550408824100f5ee28a8d96e63b9988e61496->leave($__internal_a5b94284d67a7f331d0420dedd8550408824100f5ee28a8d96e63b9988e61496_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_90b1c78a2a3b7376ff9134573a8ab3296c42cd5b725862e71855e910a54290f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b1c78a2a3b7376ff9134573a8ab3296c42cd5b725862e71855e910a54290f5->enter($__internal_90b1c78a2a3b7376ff9134573a8ab3296c42cd5b725862e71855e910a54290f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_90b1c78a2a3b7376ff9134573a8ab3296c42cd5b725862e71855e910a54290f5->leave($__internal_90b1c78a2a3b7376ff9134573a8ab3296c42cd5b725862e71855e910a54290f5_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_ee755201e6bdb5532be7ea703ff1ccd4ae18a8bd0178462b96050fa08e4fe9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee755201e6bdb5532be7ea703ff1ccd4ae18a8bd0178462b96050fa08e4fe9ff->enter($__internal_ee755201e6bdb5532be7ea703ff1ccd4ae18a8bd0178462b96050fa08e4fe9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_ee755201e6bdb5532be7ea703ff1ccd4ae18a8bd0178462b96050fa08e4fe9ff->leave($__internal_ee755201e6bdb5532be7ea703ff1ccd4ae18a8bd0178462b96050fa08e4fe9ff_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_d1cf0cace2cdd12fa4c2d3cc64137f6c2d3a796d349263d3250fc04be4b09f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cf0cace2cdd12fa4c2d3cc64137f6c2d3a796d349263d3250fc04be4b09f72->enter($__internal_d1cf0cace2cdd12fa4c2d3cc64137f6c2d3a796d349263d3250fc04be4b09f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_d1cf0cace2cdd12fa4c2d3cc64137f6c2d3a796d349263d3250fc04be4b09f72->leave($__internal_d1cf0cace2cdd12fa4c2d3cc64137f6c2d3a796d349263d3250fc04be4b09f72_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_d9db73fd2b458c1f5e61cd6529b672d6af4ae964a02b380c053dc4509bec5fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9db73fd2b458c1f5e61cd6529b672d6af4ae964a02b380c053dc4509bec5fbc->enter($__internal_d9db73fd2b458c1f5e61cd6529b672d6af4ae964a02b380c053dc4509bec5fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_d9db73fd2b458c1f5e61cd6529b672d6af4ae964a02b380c053dc4509bec5fbc->leave($__internal_d9db73fd2b458c1f5e61cd6529b672d6af4ae964a02b380c053dc4509bec5fbc_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_b290b5463d0f54738daee242aa63a56e126dd79a21d46935de74a553593f1495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b290b5463d0f54738daee242aa63a56e126dd79a21d46935de74a553593f1495->enter($__internal_b290b5463d0f54738daee242aa63a56e126dd79a21d46935de74a553593f1495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_b290b5463d0f54738daee242aa63a56e126dd79a21d46935de74a553593f1495->leave($__internal_b290b5463d0f54738daee242aa63a56e126dd79a21d46935de74a553593f1495_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_770b756ad042c613798e516e25a607b26753706649641a1b2acb703f1b053097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770b756ad042c613798e516e25a607b26753706649641a1b2acb703f1b053097->enter($__internal_770b756ad042c613798e516e25a607b26753706649641a1b2acb703f1b053097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_770b756ad042c613798e516e25a607b26753706649641a1b2acb703f1b053097->leave($__internal_770b756ad042c613798e516e25a607b26753706649641a1b2acb703f1b053097_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f2b33d91b2e50a7f91397a5015e95c2a35cb3f76ff70e9b3fdba617ec3f83024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b33d91b2e50a7f91397a5015e95c2a35cb3f76ff70e9b3fdba617ec3f83024->enter($__internal_f2b33d91b2e50a7f91397a5015e95c2a35cb3f76ff70e9b3fdba617ec3f83024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_f2b33d91b2e50a7f91397a5015e95c2a35cb3f76ff70e9b3fdba617ec3f83024->leave($__internal_f2b33d91b2e50a7f91397a5015e95c2a35cb3f76ff70e9b3fdba617ec3f83024_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_09abba36acb0e31ce7b75ad95a911f0d9ca14821f9437f6443f0f5272e9a65e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09abba36acb0e31ce7b75ad95a911f0d9ca14821f9437f6443f0f5272e9a65e9->enter($__internal_09abba36acb0e31ce7b75ad95a911f0d9ca14821f9437f6443f0f5272e9a65e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_09abba36acb0e31ce7b75ad95a911f0d9ca14821f9437f6443f0f5272e9a65e9->leave($__internal_09abba36acb0e31ce7b75ad95a911f0d9ca14821f9437f6443f0f5272e9a65e9_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_d6fcb4f821b395b01d520fb6174d1dc9c3cdab28da6ab6430c1f434c4a53e7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fcb4f821b395b01d520fb6174d1dc9c3cdab28da6ab6430c1f434c4a53e7a4->enter($__internal_d6fcb4f821b395b01d520fb6174d1dc9c3cdab28da6ab6430c1f434c4a53e7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_d6fcb4f821b395b01d520fb6174d1dc9c3cdab28da6ab6430c1f434c4a53e7a4->leave($__internal_d6fcb4f821b395b01d520fb6174d1dc9c3cdab28da6ab6430c1f434c4a53e7a4_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_0a8283c3c6a4f3cee6e982a12981d5044206aa672de1e14c765304e0f56c1923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8283c3c6a4f3cee6e982a12981d5044206aa672de1e14c765304e0f56c1923->enter($__internal_0a8283c3c6a4f3cee6e982a12981d5044206aa672de1e14c765304e0f56c1923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_0a8283c3c6a4f3cee6e982a12981d5044206aa672de1e14c765304e0f56c1923->leave($__internal_0a8283c3c6a4f3cee6e982a12981d5044206aa672de1e14c765304e0f56c1923_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3b3a3c2d32ff37e021979df379f47c60c7ee7eff4a2d6adfe01ab9bf72b6a21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3a3c2d32ff37e021979df379f47c60c7ee7eff4a2d6adfe01ab9bf72b6a21e->enter($__internal_3b3a3c2d32ff37e021979df379f47c60c7ee7eff4a2d6adfe01ab9bf72b6a21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_3b3a3c2d32ff37e021979df379f47c60c7ee7eff4a2d6adfe01ab9bf72b6a21e->leave($__internal_3b3a3c2d32ff37e021979df379f47c60c7ee7eff4a2d6adfe01ab9bf72b6a21e_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_bd3481681513ced1df0e814062ec2d7f8d2bc53f273dcf8f7b0a5bf37e18670d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3481681513ced1df0e814062ec2d7f8d2bc53f273dcf8f7b0a5bf37e18670d->enter($__internal_bd3481681513ced1df0e814062ec2d7f8d2bc53f273dcf8f7b0a5bf37e18670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_bd3481681513ced1df0e814062ec2d7f8d2bc53f273dcf8f7b0a5bf37e18670d->leave($__internal_bd3481681513ced1df0e814062ec2d7f8d2bc53f273dcf8f7b0a5bf37e18670d_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_f3cbd24684d03db54f4e8d6d08334c3954449d3a83d66e8cd88615fcc4c919ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cbd24684d03db54f4e8d6d08334c3954449d3a83d66e8cd88615fcc4c919ae->enter($__internal_f3cbd24684d03db54f4e8d6d08334c3954449d3a83d66e8cd88615fcc4c919ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_f3cbd24684d03db54f4e8d6d08334c3954449d3a83d66e8cd88615fcc4c919ae->leave($__internal_f3cbd24684d03db54f4e8d6d08334c3954449d3a83d66e8cd88615fcc4c919ae_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_1f9446a90d52ae52d9874c9e72136a917ba6d2ab1cc8bffd3e31357e831ef3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9446a90d52ae52d9874c9e72136a917ba6d2ab1cc8bffd3e31357e831ef3b0->enter($__internal_1f9446a90d52ae52d9874c9e72136a917ba6d2ab1cc8bffd3e31357e831ef3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_1f9446a90d52ae52d9874c9e72136a917ba6d2ab1cc8bffd3e31357e831ef3b0->leave($__internal_1f9446a90d52ae52d9874c9e72136a917ba6d2ab1cc8bffd3e31357e831ef3b0_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_5e6b78b5ef97bdc9924f565fb7619d127c855ee578f6d98f08266384a0eb61ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6b78b5ef97bdc9924f565fb7619d127c855ee578f6d98f08266384a0eb61ef->enter($__internal_5e6b78b5ef97bdc9924f565fb7619d127c855ee578f6d98f08266384a0eb61ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_5e6b78b5ef97bdc9924f565fb7619d127c855ee578f6d98f08266384a0eb61ef->leave($__internal_5e6b78b5ef97bdc9924f565fb7619d127c855ee578f6d98f08266384a0eb61ef_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_9535f5ec1947145aae5efbe89d6478f10885f5f23bcda6422f20f1154bcedc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9535f5ec1947145aae5efbe89d6478f10885f5f23bcda6422f20f1154bcedc5c->enter($__internal_9535f5ec1947145aae5efbe89d6478f10885f5f23bcda6422f20f1154bcedc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_9535f5ec1947145aae5efbe89d6478f10885f5f23bcda6422f20f1154bcedc5c->leave($__internal_9535f5ec1947145aae5efbe89d6478f10885f5f23bcda6422f20f1154bcedc5c_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_05855a027da0e411ad45f461f187664b613376ff1cedf9313d25899c7d54ffa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05855a027da0e411ad45f461f187664b613376ff1cedf9313d25899c7d54ffa1->enter($__internal_05855a027da0e411ad45f461f187664b613376ff1cedf9313d25899c7d54ffa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_05855a027da0e411ad45f461f187664b613376ff1cedf9313d25899c7d54ffa1->leave($__internal_05855a027da0e411ad45f461f187664b613376ff1cedf9313d25899c7d54ffa1_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_694edc87c1a39dd8187b0e7770f9743f83a1a7456ce024dcde43c52917197fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694edc87c1a39dd8187b0e7770f9743f83a1a7456ce024dcde43c52917197fd6->enter($__internal_694edc87c1a39dd8187b0e7770f9743f83a1a7456ce024dcde43c52917197fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_694edc87c1a39dd8187b0e7770f9743f83a1a7456ce024dcde43c52917197fd6->leave($__internal_694edc87c1a39dd8187b0e7770f9743f83a1a7456ce024dcde43c52917197fd6_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_e501a5596d4d6c92859498ac8b30f3ac2aa9389ee649bbba3664e94490c3113a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e501a5596d4d6c92859498ac8b30f3ac2aa9389ee649bbba3664e94490c3113a->enter($__internal_e501a5596d4d6c92859498ac8b30f3ac2aa9389ee649bbba3664e94490c3113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_e501a5596d4d6c92859498ac8b30f3ac2aa9389ee649bbba3664e94490c3113a->leave($__internal_e501a5596d4d6c92859498ac8b30f3ac2aa9389ee649bbba3664e94490c3113a_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_3c708555cc94f3e8eab74c9919fb377b43bae45bea2042213242442ae796844e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c708555cc94f3e8eab74c9919fb377b43bae45bea2042213242442ae796844e->enter($__internal_3c708555cc94f3e8eab74c9919fb377b43bae45bea2042213242442ae796844e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_3c708555cc94f3e8eab74c9919fb377b43bae45bea2042213242442ae796844e->leave($__internal_3c708555cc94f3e8eab74c9919fb377b43bae45bea2042213242442ae796844e_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_8f00eab0a53c0353be5ce654c039baf304d8b902e2dbb4717bdeda7bb14b6d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f00eab0a53c0353be5ce654c039baf304d8b902e2dbb4717bdeda7bb14b6d88->enter($__internal_8f00eab0a53c0353be5ce654c039baf304d8b902e2dbb4717bdeda7bb14b6d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_8f00eab0a53c0353be5ce654c039baf304d8b902e2dbb4717bdeda7bb14b6d88->leave($__internal_8f00eab0a53c0353be5ce654c039baf304d8b902e2dbb4717bdeda7bb14b6d88_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_75512c07ec9b0d54bbe1504a0a47c80bed0ba3c730619ef2f5b463ec3fc7b050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75512c07ec9b0d54bbe1504a0a47c80bed0ba3c730619ef2f5b463ec3fc7b050->enter($__internal_75512c07ec9b0d54bbe1504a0a47c80bed0ba3c730619ef2f5b463ec3fc7b050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_75512c07ec9b0d54bbe1504a0a47c80bed0ba3c730619ef2f5b463ec3fc7b050->leave($__internal_75512c07ec9b0d54bbe1504a0a47c80bed0ba3c730619ef2f5b463ec3fc7b050_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_76dcd58fdb8198f97f39b5b49b1f7d28b58d941bbb580571f7d81b17347e56ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dcd58fdb8198f97f39b5b49b1f7d28b58d941bbb580571f7d81b17347e56ac->enter($__internal_76dcd58fdb8198f97f39b5b49b1f7d28b58d941bbb580571f7d81b17347e56ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_76dcd58fdb8198f97f39b5b49b1f7d28b58d941bbb580571f7d81b17347e56ac->leave($__internal_76dcd58fdb8198f97f39b5b49b1f7d28b58d941bbb580571f7d81b17347e56ac_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_2ca46d79f659f1bdae9faded574fc89414482991aa17f0817c6b0de1867fe9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca46d79f659f1bdae9faded574fc89414482991aa17f0817c6b0de1867fe9c6->enter($__internal_2ca46d79f659f1bdae9faded574fc89414482991aa17f0817c6b0de1867fe9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_2ca46d79f659f1bdae9faded574fc89414482991aa17f0817c6b0de1867fe9c6->leave($__internal_2ca46d79f659f1bdae9faded574fc89414482991aa17f0817c6b0de1867fe9c6_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_1129b49c95524a8760ab4161b07513c50326de8adaaea798e058f166d412e252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1129b49c95524a8760ab4161b07513c50326de8adaaea798e058f166d412e252->enter($__internal_1129b49c95524a8760ab4161b07513c50326de8adaaea798e058f166d412e252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_1129b49c95524a8760ab4161b07513c50326de8adaaea798e058f166d412e252->leave($__internal_1129b49c95524a8760ab4161b07513c50326de8adaaea798e058f166d412e252_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_583df304a01f61519c8f6871e109317bc055406f5ac42f897725c4ba85b46986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583df304a01f61519c8f6871e109317bc055406f5ac42f897725c4ba85b46986->enter($__internal_583df304a01f61519c8f6871e109317bc055406f5ac42f897725c4ba85b46986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_583df304a01f61519c8f6871e109317bc055406f5ac42f897725c4ba85b46986->leave($__internal_583df304a01f61519c8f6871e109317bc055406f5ac42f897725c4ba85b46986_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1263 => 360,  1261 => 359,  1255 => 358,  1248 => 321,  1245 => 320,  1239 => 319,  1232 => 350,  1226 => 347,  1223 => 346,  1221 => 345,  1218 => 344,  1212 => 341,  1209 => 340,  1207 => 339,  1204 => 338,  1198 => 336,  1196 => 335,  1193 => 334,  1187 => 332,  1185 => 331,  1182 => 330,  1176 => 328,  1174 => 327,  1171 => 326,  1165 => 324,  1163 => 323,  1160 => 322,  1158 => 319,  1155 => 318,  1149 => 317,  1142 => 303,  1138 => 301,  1132 => 299,  1125 => 295,  1120 => 293,  1117 => 292,  1115 => 291,  1112 => 290,  1109 => 289,  1103 => 288,  1096 => 271,  1090 => 268,  1087 => 267,  1084 => 266,  1078 => 265,  1071 => 312,  1065 => 308,  1059 => 306,  1057 => 305,  1054 => 304,  1052 => 288,  1049 => 287,  1045 => 285,  1030 => 283,  1026 => 282,  1023 => 281,  1021 => 280,  1018 => 279,  1012 => 276,  1009 => 275,  1007 => 274,  1003 => 272,  1001 => 265,  997 => 263,  994 => 262,  988 => 261,  981 => 313,  978 => 261,  972 => 260,  964 => 351,  962 => 317,  957 => 314,  955 => 260,  951 => 258,  945 => 257,  937 => 247,  931 => 246,  923 => 249,  921 => 246,  918 => 245,  912 => 244,  902 => 242,  896 => 241,  884 => 240,  866 => 230,  860 => 228,  854 => 227,  847 => 251,  844 => 244,  841 => 241,  839 => 240,  836 => 239,  833 => 227,  827 => 226,  818 => 252,  816 => 226,  812 => 224,  806 => 223,  798 => 353,  796 => 257,  792 => 255,  789 => 223,  783 => 222,  774 => 210,  772 => 209,  765 => 204,  759 => 203,  751 => 201,  749 => 200,  743 => 196,  737 => 195,  730 => 216,  725 => 213,  722 => 203,  720 => 195,  716 => 193,  713 => 192,  707 => 191,  699 => 187,  695 => 185,  689 => 183,  686 => 182,  683 => 181,  669 => 180,  663 => 178,  659 => 176,  653 => 174,  649 => 172,  646 => 170,  643 => 168,  641 => 167,  636 => 166,  634 => 165,  631 => 164,  629 => 163,  626 => 160,  624 => 159,  622 => 158,  620 => 157,  602 => 156,  599 => 155,  597 => 154,  594 => 153,  592 => 152,  589 => 151,  583 => 150,  575 => 217,  573 => 191,  569 => 189,  567 => 150,  559 => 144,  553 => 143,  546 => 142,  542 => 140,  536 => 138,  533 => 137,  525 => 135,  523 => 134,  518 => 133,  515 => 132,  509 => 131,  498 => 127,  494 => 125,  488 => 124,  480 => 219,  477 => 143,  474 => 131,  472 => 124,  469 => 123,  463 => 122,  451 => 118,  444 => 115,  441 => 114,  438 => 113,  424 => 112,  419 => 110,  416 => 107,  414 => 106,  412 => 105,  410 => 104,  406 => 101,  403 => 100,  400 => 99,  383 => 98,  380 => 97,  377 => 96,  371 => 94,  369 => 93,  363 => 91,  357 => 90,  350 => 66,  341 => 64,  336 => 63,  330 => 62,  312 => 50,  308 => 48,  302 => 47,  294 => 46,  286 => 45,  278 => 44,  274 => 42,  268 => 41,  261 => 87,  258 => 86,  252 => 84,  249 => 83,  246 => 81,  241 => 80,  238 => 79,  235 => 77,  231 => 75,  229 => 73,  227 => 71,  224 => 70,  222 => 69,  220 => 68,  217 => 67,  215 => 62,  212 => 61,  209 => 41,  203 => 40,  196 => 38,  187 => 36,  182 => 35,  176 => 34,  166 => 29,  160 => 28,  148 => 26,  138 => 365,  135 => 364,  132 => 358,  130 => 357,  126 => 355,  124 => 222,  121 => 221,  119 => 122,  112 => 118,  108 => 116,  106 => 90,  102 => 88,  100 => 40,  97 => 39,  95 => 34,  92 => 33,  90 => 28,  85 => 26,  81 => 24,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  54 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "C:\\wamp64\\www\\votantes1\\vendor\\sonata-project\\admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
