<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_90812658ec7b558142ae2133f952a888e41210b550418d2dac0709c0bddebeb3 extends Twig_Template
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
        $__internal_84a48a491ac4b2f7f087f10d690a700bb024cbacea4e5e7c71d6551a428c84b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a48a491ac4b2f7f087f10d690a700bb024cbacea4e5e7c71d6551a428c84b0->enter($__internal_84a48a491ac4b2f7f087f10d690a700bb024cbacea4e5e7c71d6551a428c84b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_1c1480ff140fd8fbe8606f6b3a40848a357c03e9e12c4fb8f8e2bdaaf74917b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1480ff140fd8fbe8606f6b3a40848a357c03e9e12c4fb8f8e2bdaaf74917b7->enter($__internal_1c1480ff140fd8fbe8606f6b3a40848a357c03e9e12c4fb8f8e2bdaaf74917b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (        $this->renderBlock("preview", $context, $blocks)) : (null));
        // line 12
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (        $this->renderBlock("form", $context, $blocks)) : (null));
        // line 13
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (        $this->renderBlock("show", $context, $blocks)) : (null));
        // line 14
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (        $this->renderBlock("list_table", $context, $blocks)) : (null));
        // line 15
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (        $this->renderBlock("list_filters", $context, $blocks)) : (null));
        // line 16
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (        $this->renderBlock("tab_menu", $context, $blocks)) : (null));
        // line 17
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (        $this->renderBlock("content", $context, $blocks)) : (null));
        // line 18
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (        $this->renderBlock("title", $context, $blocks)) : (null));
        // line 19
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (        $this->renderBlock("breadcrumb", $context, $blocks)) : (null));
        // line 20
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (        $this->renderBlock("actions", $context, $blocks)) : (null));
        // line 21
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (        $this->renderBlock("navbar_title", $context, $blocks)) : (null));
        // line 22
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (        $this->renderBlock("list_filters_actions", $context, $blocks)) : (null));
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "        </title>
    </head>
    <body ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 216
        echo "
        ";
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 351
        echo "    </div>

    ";
        // line 353
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 354
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 360
            echo "    ";
        }
        // line 361
        echo "
    </body>
</html>
";
        
        $__internal_84a48a491ac4b2f7f087f10d690a700bb024cbacea4e5e7c71d6551a428c84b0->leave($__internal_84a48a491ac4b2f7f087f10d690a700bb024cbacea4e5e7c71d6551a428c84b0_prof);

        
        $__internal_1c1480ff140fd8fbe8606f6b3a40848a357c03e9e12c4fb8f8e2bdaaf74917b7->leave($__internal_1c1480ff140fd8fbe8606f6b3a40848a357c03e9e12c4fb8f8e2bdaaf74917b7_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_2ae2d47d9269f96b5a783240eb2a6ce171ab0db48289f62e7f5301fae3dcdba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae2d47d9269f96b5a783240eb2a6ce171ab0db48289f62e7f5301fae3dcdba9->enter($__internal_2ae2d47d9269f96b5a783240eb2a6ce171ab0db48289f62e7f5301fae3dcdba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_4b38354dc1a0d0a690723ad4facf1e4b5ffc88b87e54aae10fc515dd486033a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b38354dc1a0d0a690723ad4facf1e4b5ffc88b87e54aae10fc515dd486033a9->enter($__internal_4b38354dc1a0d0a690723ad4facf1e4b5ffc88b87e54aae10fc515dd486033a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_4b38354dc1a0d0a690723ad4facf1e4b5ffc88b87e54aae10fc515dd486033a9->leave($__internal_4b38354dc1a0d0a690723ad4facf1e4b5ffc88b87e54aae10fc515dd486033a9_prof);

        
        $__internal_2ae2d47d9269f96b5a783240eb2a6ce171ab0db48289f62e7f5301fae3dcdba9->leave($__internal_2ae2d47d9269f96b5a783240eb2a6ce171ab0db48289f62e7f5301fae3dcdba9_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_e6cce0583e6225e0c371232335f238edeff042d2d9d9f9c465f5cc19eec82e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cce0583e6225e0c371232335f238edeff042d2d9d9f9c465f5cc19eec82e1a->enter($__internal_e6cce0583e6225e0c371232335f238edeff042d2d9d9f9c465f5cc19eec82e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_45623b9d1527db25b324e4ba35cd28344553e6a43fab29006e202f47e3a6887a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45623b9d1527db25b324e4ba35cd28344553e6a43fab29006e202f47e3a6887a->enter($__internal_45623b9d1527db25b324e4ba35cd28344553e6a43fab29006e202f47e3a6887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_45623b9d1527db25b324e4ba35cd28344553e6a43fab29006e202f47e3a6887a->leave($__internal_45623b9d1527db25b324e4ba35cd28344553e6a43fab29006e202f47e3a6887a_prof);

        
        $__internal_e6cce0583e6225e0c371232335f238edeff042d2d9d9f9c465f5cc19eec82e1a->leave($__internal_e6cce0583e6225e0c371232335f238edeff042d2d9d9f9c465f5cc19eec82e1a_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9f3ad5770c8c73427fc8d6af12811857039065625931e428e5d95d65220ab92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f3ad5770c8c73427fc8d6af12811857039065625931e428e5d95d65220ab92->enter($__internal_a9f3ad5770c8c73427fc8d6af12811857039065625931e428e5d95d65220ab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d3639af4e7647d44f4599b8893b7e8f7fb3e210089ec26242d6968893ff4d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3639af4e7647d44f4599b8893b7e8f7fb3e210089ec26242d6968893ff4d49->enter($__internal_4d3639af4e7647d44f4599b8893b7e8f7fb3e210089ec26242d6968893ff4d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_4d3639af4e7647d44f4599b8893b7e8f7fb3e210089ec26242d6968893ff4d49->leave($__internal_4d3639af4e7647d44f4599b8893b7e8f7fb3e210089ec26242d6968893ff4d49_prof);

        
        $__internal_a9f3ad5770c8c73427fc8d6af12811857039065625931e428e5d95d65220ab92->leave($__internal_a9f3ad5770c8c73427fc8d6af12811857039065625931e428e5d95d65220ab92_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ddb4beffdb8a0a73bfb34ccfce0f5386843d3e226047ae74fb513a9841d897b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddb4beffdb8a0a73bfb34ccfce0f5386843d3e226047ae74fb513a9841d897b->enter($__internal_9ddb4beffdb8a0a73bfb34ccfce0f5386843d3e226047ae74fb513a9841d897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd96756747a6411289ec910446ae248ff2a93998492d00bff35fcc6a4b212736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd96756747a6411289ec910446ae248ff2a93998492d00bff35fcc6a4b212736->enter($__internal_dd96756747a6411289ec910446ae248ff2a93998492d00bff35fcc6a4b212736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_dd96756747a6411289ec910446ae248ff2a93998492d00bff35fcc6a4b212736->leave($__internal_dd96756747a6411289ec910446ae248ff2a93998492d00bff35fcc6a4b212736_prof);

        
        $__internal_9ddb4beffdb8a0a73bfb34ccfce0f5386843d3e226047ae74fb513a9841d897b->leave($__internal_9ddb4beffdb8a0a73bfb34ccfce0f5386843d3e226047ae74fb513a9841d897b_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_33f7cfc4e99969570d7927e3b2d280b2346dcb6e81fa2035bbb279f93596715e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f7cfc4e99969570d7927e3b2d280b2346dcb6e81fa2035bbb279f93596715e->enter($__internal_33f7cfc4e99969570d7927e3b2d280b2346dcb6e81fa2035bbb279f93596715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_b6d556779740cf7f34e94f5e4408afdda02fb2581fde307eac28f2e1e1c33ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d556779740cf7f34e94f5e4408afdda02fb2581fde307eac28f2e1e1c33ab0->enter($__internal_b6d556779740cf7f34e94f5e4408afdda02fb2581fde307eac28f2e1e1c33ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '";
        // line 49
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
        
        $__internal_b6d556779740cf7f34e94f5e4408afdda02fb2581fde307eac28f2e1e1c33ab0->leave($__internal_b6d556779740cf7f34e94f5e4408afdda02fb2581fde307eac28f2e1e1c33ab0_prof);

        
        $__internal_33f7cfc4e99969570d7927e3b2d280b2346dcb6e81fa2035bbb279f93596715e->leave($__internal_33f7cfc4e99969570d7927e3b2d280b2346dcb6e81fa2035bbb279f93596715e_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_f3e3c2e457f17d08eaa8930e835434608d05858f68c401b80acf069f65ed84d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e3c2e457f17d08eaa8930e835434608d05858f68c401b80acf069f65ed84d3->enter($__internal_f3e3c2e457f17d08eaa8930e835434608d05858f68c401b80acf069f65ed84d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_0b3f6ddc2b0ce98ba3d98f17bd049be12611a3fc605120ac93d1dad5f13eb9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3f6ddc2b0ce98ba3d98f17bd049be12611a3fc605120ac93d1dad5f13eb9b9->enter($__internal_0b3f6ddc2b0ce98ba3d98f17bd049be12611a3fc605120ac93d1dad5f13eb9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 62
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        
        $__internal_0b3f6ddc2b0ce98ba3d98f17bd049be12611a3fc605120ac93d1dad5f13eb9b9->leave($__internal_0b3f6ddc2b0ce98ba3d98f17bd049be12611a3fc605120ac93d1dad5f13eb9b9_prof);

        
        $__internal_f3e3c2e457f17d08eaa8930e835434608d05858f68c401b80acf069f65ed84d3->leave($__internal_f3e3c2e457f17d08eaa8930e835434608d05858f68c401b80acf069f65ed84d3_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_f674654d8b3d429f413475f3fa25c338eca6e7c3f305ded3da35a77172d13d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f674654d8b3d429f413475f3fa25c338eca6e7c3f305ded3da35a77172d13d57->enter($__internal_f674654d8b3d429f413475f3fa25c338eca6e7c3f305ded3da35a77172d13d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_b8ebba7f9cd6d298ba2890f9510db119ff74c5875ab6f669de6ff4f98b1a6b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ebba7f9cd6d298ba2890f9510db119ff74c5875ab6f669de6ff4f98b1a6b4f->enter($__internal_b8ebba7f9cd6d298ba2890f9510db119ff74c5875ab6f669de6ff4f98b1a6b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 107
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
                // line 108
                echo "                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
        
        $__internal_b8ebba7f9cd6d298ba2890f9510db119ff74c5875ab6f669de6ff4f98b1a6b4f->leave($__internal_b8ebba7f9cd6d298ba2890f9510db119ff74c5875ab6f669de6ff4f98b1a6b4f_prof);

        
        $__internal_f674654d8b3d429f413475f3fa25c338eca6e7c3f305ded3da35a77172d13d57->leave($__internal_f674654d8b3d429f413475f3fa25c338eca6e7c3f305ded3da35a77172d13d57_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_c8d82b1441f23ed7eaa5c54d3489ad1986285f18775315713e3422bdca37c583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d82b1441f23ed7eaa5c54d3489ad1986285f18775315713e3422bdca37c583->enter($__internal_c8d82b1441f23ed7eaa5c54d3489ad1986285f18775315713e3422bdca37c583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_f4167e4cb61d370493735decacae900e169fdf64ddab439962f23cb118692db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4167e4cb61d370493735decacae900e169fdf64ddab439962f23cb118692db7->enter($__internal_f4167e4cb61d370493735decacae900e169fdf64ddab439962f23cb118692db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_f4167e4cb61d370493735decacae900e169fdf64ddab439962f23cb118692db7->leave($__internal_f4167e4cb61d370493735decacae900e169fdf64ddab439962f23cb118692db7_prof);

        
        $__internal_c8d82b1441f23ed7eaa5c54d3489ad1986285f18775315713e3422bdca37c583->leave($__internal_c8d82b1441f23ed7eaa5c54d3489ad1986285f18775315713e3422bdca37c583_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_a3633b5c3dc48e14bc47c568dc8ba46d9f5f6dcaefa40f331a330d4870a5561b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3633b5c3dc48e14bc47c568dc8ba46d9f5f6dcaefa40f331a330d4870a5561b->enter($__internal_a3633b5c3dc48e14bc47c568dc8ba46d9f5f6dcaefa40f331a330d4870a5561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_2dcf159b6d76cd1a974dd4e6a04188e5210745baf1b862e0866a8f517622c123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcf159b6d76cd1a974dd4e6a04188e5210745baf1b862e0866a8f517622c123->enter($__internal_2dcf159b6d76cd1a974dd4e6a04188e5210745baf1b862e0866a8f517622c123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 118
        echo "            <header class=\"main-header\">
                ";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "            </header>
        ";
        
        $__internal_2dcf159b6d76cd1a974dd4e6a04188e5210745baf1b862e0866a8f517622c123->leave($__internal_2dcf159b6d76cd1a974dd4e6a04188e5210745baf1b862e0866a8f517622c123_prof);

        
        $__internal_a3633b5c3dc48e14bc47c568dc8ba46d9f5f6dcaefa40f331a330d4870a5561b->leave($__internal_a3633b5c3dc48e14bc47c568dc8ba46d9f5f6dcaefa40f331a330d4870a5561b_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_ce38f4fb1b9bd39222f9f6c31cd27d2dcf013a545b9b4021c41e36601f2f86c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce38f4fb1b9bd39222f9f6c31cd27d2dcf013a545b9b4021c41e36601f2f86c4->enter($__internal_ce38f4fb1b9bd39222f9f6c31cd27d2dcf013a545b9b4021c41e36601f2f86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_f45874e1b9383745056694468c136ef44ed7ddbc6c2606959fba49cdd12c9aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45874e1b9383745056694468c136ef44ed7ddbc6c2606959fba49cdd12c9aac->enter($__internal_f45874e1b9383745056694468c136ef44ed7ddbc6c2606959fba49cdd12c9aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 120
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_f45874e1b9383745056694468c136ef44ed7ddbc6c2606959fba49cdd12c9aac->leave($__internal_f45874e1b9383745056694468c136ef44ed7ddbc6c2606959fba49cdd12c9aac_prof);

        
        $__internal_ce38f4fb1b9bd39222f9f6c31cd27d2dcf013a545b9b4021c41e36601f2f86c4->leave($__internal_ce38f4fb1b9bd39222f9f6c31cd27d2dcf013a545b9b4021c41e36601f2f86c4_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e3e57e68e834cc5cd343473892d561320b8a17e543b544d9fa33b385b0e4b29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e57e68e834cc5cd343473892d561320b8a17e543b544d9fa33b385b0e4b29d->enter($__internal_e3e57e68e834cc5cd343473892d561320b8a17e543b544d9fa33b385b0e4b29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_89dd49cbd4a84c6325d3af80af6033f727a678252ccf5d9358b3022238f38dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dd49cbd4a84c6325d3af80af6033f727a678252ccf5d9358b3022238f38dfe->enter($__internal_89dd49cbd4a84c6325d3af80af6033f727a678252ccf5d9358b3022238f38dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 127
        echo "                    ";
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 132
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 135
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "                ";
        
        $__internal_89dd49cbd4a84c6325d3af80af6033f727a678252ccf5d9358b3022238f38dfe->leave($__internal_89dd49cbd4a84c6325d3af80af6033f727a678252ccf5d9358b3022238f38dfe_prof);

        
        $__internal_e3e57e68e834cc5cd343473892d561320b8a17e543b544d9fa33b385b0e4b29d->leave($__internal_e3e57e68e834cc5cd343473892d561320b8a17e543b544d9fa33b385b0e4b29d_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_204f5ea6a3a1ddd33a1d1c09984c1f2702f538f45f43ab6c28158ff2a9243573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204f5ea6a3a1ddd33a1d1c09984c1f2702f538f45f43ab6c28158ff2a9243573->enter($__internal_204f5ea6a3a1ddd33a1d1c09984c1f2702f538f45f43ab6c28158ff2a9243573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_c4ed3db0e3b795ce86ed0e5622099dd16c3ce591493d4a817d4251edb7aaab74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ed3db0e3b795ce86ed0e5622099dd16c3ce591493d4a817d4251edb7aaab74->enter($__internal_c4ed3db0e3b795ce86ed0e5622099dd16c3ce591493d4a817d4251edb7aaab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 139
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>

                        ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                    </nav>
                ";
        
        $__internal_c4ed3db0e3b795ce86ed0e5622099dd16c3ce591493d4a817d4251edb7aaab74->leave($__internal_c4ed3db0e3b795ce86ed0e5622099dd16c3ce591493d4a817d4251edb7aaab74_prof);

        
        $__internal_204f5ea6a3a1ddd33a1d1c09984c1f2702f538f45f43ab6c28158ff2a9243573->leave($__internal_204f5ea6a3a1ddd33a1d1c09984c1f2702f538f45f43ab6c28158ff2a9243573_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_7f162dbeb41bec16cba073e35aa2c310afbd65e0ef72aa81a2b9c9eaf63d3d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f162dbeb41bec16cba073e35aa2c310afbd65e0ef72aa81a2b9c9eaf63d3d9e->enter($__internal_7f162dbeb41bec16cba073e35aa2c310afbd65e0ef72aa81a2b9c9eaf63d3d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_1dd9c9b78384c537a60ebe4fdf5e90c9e03f66fc912d3506caea167e4f804305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd9c9b78384c537a60ebe4fdf5e90c9e03f66fc912d3506caea167e4f804305->enter($__internal_1dd9c9b78384c537a60ebe4fdf5e90c9e03f66fc912d3506caea167e4f804305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 146
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 147
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 149
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                            <li>
                                                                ";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 175
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
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 180
            echo "                                        </ol>
                                    ";
        }
        // line 182
        echo "                                </div>
                            ";
        
        $__internal_1dd9c9b78384c537a60ebe4fdf5e90c9e03f66fc912d3506caea167e4f804305->leave($__internal_1dd9c9b78384c537a60ebe4fdf5e90c9e03f66fc912d3506caea167e4f804305_prof);

        
        $__internal_7f162dbeb41bec16cba073e35aa2c310afbd65e0ef72aa81a2b9c9eaf63d3d9e->leave($__internal_7f162dbeb41bec16cba073e35aa2c310afbd65e0ef72aa81a2b9c9eaf63d3d9e_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_ea3d185541e574a1143a0ba86cf6ec2f7b23cbbd67eee3233977cef2399e5dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3d185541e574a1143a0ba86cf6ec2f7b23cbbd67eee3233977cef2399e5dd3->enter($__internal_ea3d185541e574a1143a0ba86cf6ec2f7b23cbbd67eee3233977cef2399e5dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_c7423e58a21416752d920e9c7f0e6a84a2f0076274ac4174a885ce18680d3a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7423e58a21416752d920e9c7f0e6a84a2f0076274ac4174a885ce18680d3a16->enter($__internal_c7423e58a21416752d920e9c7f0e6a84a2f0076274ac4174a885ce18680d3a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 211
        echo "                        ";
        
        $__internal_c7423e58a21416752d920e9c7f0e6a84a2f0076274ac4174a885ce18680d3a16->leave($__internal_c7423e58a21416752d920e9c7f0e6a84a2f0076274ac4174a885ce18680d3a16_prof);

        
        $__internal_ea3d185541e574a1143a0ba86cf6ec2f7b23cbbd67eee3233977cef2399e5dd3->leave($__internal_ea3d185541e574a1143a0ba86cf6ec2f7b23cbbd67eee3233977cef2399e5dd3_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_a924552cf1cf99af56f33bbc9ec2e06d334f567876196c42c871e510b23828c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a924552cf1cf99af56f33bbc9ec2e06d334f567876196c42c871e510b23828c8->enter($__internal_a924552cf1cf99af56f33bbc9ec2e06d334f567876196c42c871e510b23828c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_9ad61376dafeb975ada40fdb0f8524e74fe97456138b995972fbccf792243af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad61376dafeb975ada40fdb0f8524e74fe97456138b995972fbccf792243af2->enter($__internal_9ad61376dafeb975ada40fdb0f8524e74fe97456138b995972fbccf792243af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>
                                        ";
        
        $__internal_9ad61376dafeb975ada40fdb0f8524e74fe97456138b995972fbccf792243af2->leave($__internal_9ad61376dafeb975ada40fdb0f8524e74fe97456138b995972fbccf792243af2_prof);

        
        $__internal_a924552cf1cf99af56f33bbc9ec2e06d334f567876196c42c871e510b23828c8->leave($__internal_a924552cf1cf99af56f33bbc9ec2e06d334f567876196c42c871e510b23828c8_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_898653621d9cb8fcc666465c45919d539b4b961df813e462a6359c243d8d4355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898653621d9cb8fcc666465c45919d539b4b961df813e462a6359c243d8d4355->enter($__internal_898653621d9cb8fcc666465c45919d539b4b961df813e462a6359c243d8d4355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_8ba30861d60bc2008576fbb065cb32617b521e9d74b6f9975ad9b64bd239f508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba30861d60bc2008576fbb065cb32617b521e9d74b6f9975ad9b64bd239f508->enter($__internal_8ba30861d60bc2008576fbb065cb32617b521e9d74b6f9975ad9b64bd239f508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_8ba30861d60bc2008576fbb065cb32617b521e9d74b6f9975ad9b64bd239f508->leave($__internal_8ba30861d60bc2008576fbb065cb32617b521e9d74b6f9975ad9b64bd239f508_prof);

        
        $__internal_898653621d9cb8fcc666465c45919d539b4b961df813e462a6359c243d8d4355->leave($__internal_898653621d9cb8fcc666465c45919d539b4b961df813e462a6359c243d8d4355_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_fb129b7d5059c8c0780f62f00dcb66d89ca223ff8a312062326c8c9a4a098b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb129b7d5059c8c0780f62f00dcb66d89ca223ff8a312062326c8c9a4a098b3e->enter($__internal_fb129b7d5059c8c0780f62f00dcb66d89ca223ff8a312062326c8c9a4a098b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_e2283936fad794b5c16bec64d192eb4112c7fb00eac71b4ab367f2ccab01bfc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2283936fad794b5c16bec64d192eb4112c7fb00eac71b4ab367f2ccab01bfc0->enter($__internal_e2283936fad794b5c16bec64d192eb4112c7fb00eac71b4ab367f2ccab01bfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 218
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 349
        echo "            </div>
        ";
        
        $__internal_e2283936fad794b5c16bec64d192eb4112c7fb00eac71b4ab367f2ccab01bfc0->leave($__internal_e2283936fad794b5c16bec64d192eb4112c7fb00eac71b4ab367f2ccab01bfc0_prof);

        
        $__internal_fb129b7d5059c8c0780f62f00dcb66d89ca223ff8a312062326c8c9a4a098b3e->leave($__internal_fb129b7d5059c8c0780f62f00dcb66d89ca223ff8a312062326c8c9a4a098b3e_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_da6e3a8fc58a0593f158cf1fd012a67135fb39ed8677f3265ed268d1b4e965b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6e3a8fc58a0593f158cf1fd012a67135fb39ed8677f3265ed268d1b4e965b7->enter($__internal_da6e3a8fc58a0593f158cf1fd012a67135fb39ed8677f3265ed268d1b4e965b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_7dced526d4dbdba7129f04d08b265f348e374690a275695c97f5a05fce8c5a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dced526d4dbdba7129f04d08b265f348e374690a275695c97f5a05fce8c5a1b->enter($__internal_7dced526d4dbdba7129f04d08b265f348e374690a275695c97f5a05fce8c5a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 219
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                    </section>
                </aside>
            ";
        
        $__internal_7dced526d4dbdba7129f04d08b265f348e374690a275695c97f5a05fce8c5a1b->leave($__internal_7dced526d4dbdba7129f04d08b265f348e374690a275695c97f5a05fce8c5a1b_prof);

        
        $__internal_da6e3a8fc58a0593f158cf1fd012a67135fb39ed8677f3265ed268d1b4e965b7->leave($__internal_da6e3a8fc58a0593f158cf1fd012a67135fb39ed8677f3265ed268d1b4e965b7_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_9b41adb8b44d3622330448588d994a109e1cd7c7d01c89eea98165637239f824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b41adb8b44d3622330448588d994a109e1cd7c7d01c89eea98165637239f824->enter($__internal_9b41adb8b44d3622330448588d994a109e1cd7c7d01c89eea98165637239f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_bafc04f0b3bf214c284eef83a86cd499ccb03ea213b157465a0180ab24ad762a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafc04f0b3bf214c284eef83a86cd499ccb03ea213b157465a0180ab24ad762a->enter($__internal_bafc04f0b3bf214c284eef83a86cd499ccb03ea213b157465a0180ab24ad762a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 222
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 234
        echo "
                            ";
        // line 235
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 236
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                        ";
        
        $__internal_bafc04f0b3bf214c284eef83a86cd499ccb03ea213b157465a0180ab24ad762a->leave($__internal_bafc04f0b3bf214c284eef83a86cd499ccb03ea213b157465a0180ab24ad762a_prof);

        
        $__internal_9b41adb8b44d3622330448588d994a109e1cd7c7d01c89eea98165637239f824->leave($__internal_9b41adb8b44d3622330448588d994a109e1cd7c7d01c89eea98165637239f824_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_f1f4cea96aaab5050a6d478f042a21b9890481735341eade908e392b89dfeb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f4cea96aaab5050a6d478f042a21b9890481735341eade908e392b89dfeb86->enter($__internal_f1f4cea96aaab5050a6d478f042a21b9890481735341eade908e392b89dfeb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_f03d1ebd8af185215590b709d359041bfd881304e1bba04f2deba29dd9c47e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03d1ebd8af185215590b709d359041bfd881304e1bba04f2deba29dd9c47e9a->enter($__internal_f03d1ebd8af185215590b709d359041bfd881304e1bba04f2deba29dd9c47e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
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
        
        $__internal_f03d1ebd8af185215590b709d359041bfd881304e1bba04f2deba29dd9c47e9a->leave($__internal_f03d1ebd8af185215590b709d359041bfd881304e1bba04f2deba29dd9c47e9a_prof);

        
        $__internal_f1f4cea96aaab5050a6d478f042a21b9890481735341eade908e392b89dfeb86->leave($__internal_f1f4cea96aaab5050a6d478f042a21b9890481735341eade908e392b89dfeb86_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_b0ea85006d0a2bf53db770dceffc8aa1b3ce9f556cc8a0e83ff6e62599cdf969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ea85006d0a2bf53db770dceffc8aa1b3ce9f556cc8a0e83ff6e62599cdf969->enter($__internal_b0ea85006d0a2bf53db770dceffc8aa1b3ce9f556cc8a0e83ff6e62599cdf969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_ea5e26e73ab3da5b5a334f75059df59e58dc3cfb6ba584ead8418fac1010cba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5e26e73ab3da5b5a334f75059df59e58dc3cfb6ba584ead8418fac1010cba2->enter($__internal_ea5e26e73ab3da5b5a334f75059df59e58dc3cfb6ba584ead8418fac1010cba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_ea5e26e73ab3da5b5a334f75059df59e58dc3cfb6ba584ead8418fac1010cba2->leave($__internal_ea5e26e73ab3da5b5a334f75059df59e58dc3cfb6ba584ead8418fac1010cba2_prof);

        
        $__internal_b0ea85006d0a2bf53db770dceffc8aa1b3ce9f556cc8a0e83ff6e62599cdf969->leave($__internal_b0ea85006d0a2bf53db770dceffc8aa1b3ce9f556cc8a0e83ff6e62599cdf969_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_35c1507205e49e6afb336d287767e30b52b006482b8b288a6b06eeebd283468d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c1507205e49e6afb336d287767e30b52b006482b8b288a6b06eeebd283468d->enter($__internal_35c1507205e49e6afb336d287767e30b52b006482b8b288a6b06eeebd283468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_9482c1a713e33aaf181e9ff6ea662df8a6a9952b80a4699a7602baf0c0204d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9482c1a713e33aaf181e9ff6ea662df8a6a9952b80a4699a7602baf0c0204d2a->enter($__internal_9482c1a713e33aaf181e9ff6ea662df8a6a9952b80a4699a7602baf0c0204d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_9482c1a713e33aaf181e9ff6ea662df8a6a9952b80a4699a7602baf0c0204d2a->leave($__internal_9482c1a713e33aaf181e9ff6ea662df8a6a9952b80a4699a7602baf0c0204d2a_prof);

        
        $__internal_35c1507205e49e6afb336d287767e30b52b006482b8b288a6b06eeebd283468d->leave($__internal_35c1507205e49e6afb336d287767e30b52b006482b8b288a6b06eeebd283468d_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_dd541b60113d3ce663122d79b95fe9bf4ca08be2b433d37345c4da7e51eee756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd541b60113d3ce663122d79b95fe9bf4ca08be2b433d37345c4da7e51eee756->enter($__internal_dd541b60113d3ce663122d79b95fe9bf4ca08be2b433d37345c4da7e51eee756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_cbd2285b56375db2bca3d3cf680aee1a767d4d25b2790ad9e26ee16df6dacddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd2285b56375db2bca3d3cf680aee1a767d4d25b2790ad9e26ee16df6dacddb->enter($__internal_cbd2285b56375db2bca3d3cf680aee1a767d4d25b2790ad9e26ee16df6dacddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_cbd2285b56375db2bca3d3cf680aee1a767d4d25b2790ad9e26ee16df6dacddb->leave($__internal_cbd2285b56375db2bca3d3cf680aee1a767d4d25b2790ad9e26ee16df6dacddb_prof);

        
        $__internal_dd541b60113d3ce663122d79b95fe9bf4ca08be2b433d37345c4da7e51eee756->leave($__internal_dd541b60113d3ce663122d79b95fe9bf4ca08be2b433d37345c4da7e51eee756_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_bc047ad846553fb4bb8db95372af269e9751a54f8f748bdc1021890242eaffe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc047ad846553fb4bb8db95372af269e9751a54f8f748bdc1021890242eaffe7->enter($__internal_bc047ad846553fb4bb8db95372af269e9751a54f8f748bdc1021890242eaffe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_c889a407d6ccfc06204f7ff3ac4a9c1d992822ccafe06fed5d51be7cc1480214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c889a407d6ccfc06204f7ff3ac4a9c1d992822ccafe06fed5d51be7cc1480214->enter($__internal_c889a407d6ccfc06204f7ff3ac4a9c1d992822ccafe06fed5d51be7cc1480214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_c889a407d6ccfc06204f7ff3ac4a9c1d992822ccafe06fed5d51be7cc1480214->leave($__internal_c889a407d6ccfc06204f7ff3ac4a9c1d992822ccafe06fed5d51be7cc1480214_prof);

        
        $__internal_bc047ad846553fb4bb8db95372af269e9751a54f8f748bdc1021890242eaffe7->leave($__internal_bc047ad846553fb4bb8db95372af269e9751a54f8f748bdc1021890242eaffe7_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_5a83f05d414d20d4f95ecb871d137e278104a5c9522c379b251f37d040e179d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a83f05d414d20d4f95ecb871d137e278104a5c9522c379b251f37d040e179d1->enter($__internal_5a83f05d414d20d4f95ecb871d137e278104a5c9522c379b251f37d040e179d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_8a5690c27e24e7828e81fe05f9a9eef820eae7ee8c7265ffff3117bc3cc4c0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5690c27e24e7828e81fe05f9a9eef820eae7ee8c7265ffff3117bc3cc4c0ac->enter($__internal_8a5690c27e24e7828e81fe05f9a9eef820eae7ee8c7265ffff3117bc3cc4c0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 253
        echo "                    <section class=\"content-header\">

                        ";
        // line 255
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 309
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 312
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 347
        echo "                    </section>
                ";
        
        $__internal_8a5690c27e24e7828e81fe05f9a9eef820eae7ee8c7265ffff3117bc3cc4c0ac->leave($__internal_8a5690c27e24e7828e81fe05f9a9eef820eae7ee8c7265ffff3117bc3cc4c0ac_prof);

        
        $__internal_5a83f05d414d20d4f95ecb871d137e278104a5c9522c379b251f37d040e179d1->leave($__internal_5a83f05d414d20d4f95ecb871d137e278104a5c9522c379b251f37d040e179d1_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_3cc0413bddcac07b34c5eb501ec3c8ffdd9d32f992d47d602c9215b38dc93f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc0413bddcac07b34c5eb501ec3c8ffdd9d32f992d47d602c9215b38dc93f75->enter($__internal_3cc0413bddcac07b34c5eb501ec3c8ffdd9d32f992d47d602c9215b38dc93f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_2b348fe02f62036662acece672336a72f4c7befe921a50af06da21833dc94ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b348fe02f62036662acece672336a72f4c7befe921a50af06da21833dc94ee0->enter($__internal_2b348fe02f62036662acece672336a72f4c7befe921a50af06da21833dc94ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_2b348fe02f62036662acece672336a72f4c7befe921a50af06da21833dc94ee0->leave($__internal_2b348fe02f62036662acece672336a72f4c7befe921a50af06da21833dc94ee0_prof);

        
        $__internal_3cc0413bddcac07b34c5eb501ec3c8ffdd9d32f992d47d602c9215b38dc93f75->leave($__internal_3cc0413bddcac07b34c5eb501ec3c8ffdd9d32f992d47d602c9215b38dc93f75_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_d0ff6ef17c86f3701a8f5dffcba392e09a80ae6e00f01c4e7b229fe256a6ff6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ff6ef17c86f3701a8f5dffcba392e09a80ae6e00f01c4e7b229fe256a6ff6d->enter($__internal_d0ff6ef17c86f3701a8f5dffcba392e09a80ae6e00f01c4e7b229fe256a6ff6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_d80e5a77528f20861006c748c8d64b683e6625bd27e5bb0d0c58013337b004f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80e5a77528f20861006c748c8d64b683e6625bd27e5bb0d0c58013337b004f6->enter($__internal_d80e5a77528f20861006c748c8d64b683e6625bd27e5bb0d0c58013337b004f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 257
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 258
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 270
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
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
                // line 280
                echo "                                                    </div>
                                                ";
            }
            // line 282
            echo "
                                                ";
            // line 283
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 299
            echo "
                                                ";
            // line 300
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 301
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 303
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 307
        echo "                            ";
        
        $__internal_d80e5a77528f20861006c748c8d64b683e6625bd27e5bb0d0c58013337b004f6->leave($__internal_d80e5a77528f20861006c748c8d64b683e6625bd27e5bb0d0c58013337b004f6_prof);

        
        $__internal_d0ff6ef17c86f3701a8f5dffcba392e09a80ae6e00f01c4e7b229fe256a6ff6d->leave($__internal_d0ff6ef17c86f3701a8f5dffcba392e09a80ae6e00f01c4e7b229fe256a6ff6d_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_e381241671358ba91fa406867c62061206185a823e32301097b7053fd33ca648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e381241671358ba91fa406867c62061206185a823e32301097b7053fd33ca648->enter($__internal_e381241671358ba91fa406867c62061206185a823e32301097b7053fd33ca648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_ed63c129f1c7ce0684604571f8beba1a81a54a191779aa540ed5cfade2b7f707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed63c129f1c7ce0684604571f8beba1a81a54a191779aa540ed5cfade2b7f707->enter($__internal_ed63c129f1c7ce0684604571f8beba1a81a54a191779aa540ed5cfade2b7f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_ed63c129f1c7ce0684604571f8beba1a81a54a191779aa540ed5cfade2b7f707->leave($__internal_ed63c129f1c7ce0684604571f8beba1a81a54a191779aa540ed5cfade2b7f707_prof);

        
        $__internal_e381241671358ba91fa406867c62061206185a823e32301097b7053fd33ca648->leave($__internal_e381241671358ba91fa406867c62061206185a823e32301097b7053fd33ca648_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_18f14c8881d8774afc6af19af86e4f25e619c63f444e472c10b5f0a2a5038781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f14c8881d8774afc6af19af86e4f25e619c63f444e472c10b5f0a2a5038781->enter($__internal_18f14c8881d8774afc6af19af86e4f25e619c63f444e472c10b5f0a2a5038781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_bcbbd27f4aa940145efa0109560ea85d3e7b8ac62128d80a30428de9fa9578a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbbd27f4aa940145efa0109560ea85d3e7b8ac62128d80a30428de9fa9578a0->enter($__internal_bcbbd27f4aa940145efa0109560ea85d3e7b8ac62128d80a30428de9fa9578a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 284
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 290
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 294
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 296
            echo "                                                        </ul>
                                                    ";
        }
        // line 298
        echo "                                                ";
        
        $__internal_bcbbd27f4aa940145efa0109560ea85d3e7b8ac62128d80a30428de9fa9578a0->leave($__internal_bcbbd27f4aa940145efa0109560ea85d3e7b8ac62128d80a30428de9fa9578a0_prof);

        
        $__internal_18f14c8881d8774afc6af19af86e4f25e619c63f444e472c10b5f0a2a5038781->leave($__internal_18f14c8881d8774afc6af19af86e4f25e619c63f444e472c10b5f0a2a5038781_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_7d2fb3e4a6d254d0f0bfe7f4349d39846567b391e302ccb5b51f402402867125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2fb3e4a6d254d0f0bfe7f4349d39846567b391e302ccb5b51f402402867125->enter($__internal_7d2fb3e4a6d254d0f0bfe7f4349d39846567b391e302ccb5b51f402402867125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_f3a737a3c879a486742158068accb53ed733d5182e62c3489fd8c0b011de0798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a737a3c879a486742158068accb53ed733d5182e62c3489fd8c0b011de0798->enter($__internal_f3a737a3c879a486742158068accb53ed733d5182e62c3489fd8c0b011de0798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 313
        echo "
                            ";
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 317
        echo "
                            ";
        // line 318
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 321
        echo "
                            ";
        // line 322
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 325
        echo "
                            ";
        // line 326
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 335
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 336
                echo "                                    <div class=\"row\">
                                        ";
                // line 337
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 340
            echo "
                                <div class=\"row\">
                                    ";
            // line 342
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 346
        echo "                        ";
        
        $__internal_f3a737a3c879a486742158068accb53ed733d5182e62c3489fd8c0b011de0798->leave($__internal_f3a737a3c879a486742158068accb53ed733d5182e62c3489fd8c0b011de0798_prof);

        
        $__internal_7d2fb3e4a6d254d0f0bfe7f4349d39846567b391e302ccb5b51f402402867125->leave($__internal_7d2fb3e4a6d254d0f0bfe7f4349d39846567b391e302ccb5b51f402402867125_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_8721b1f18eca7d32b70232bb484a2efcde914d8d5b4ccc3f2e3a736e0ae4c182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8721b1f18eca7d32b70232bb484a2efcde914d8d5b4ccc3f2e3a736e0ae4c182->enter($__internal_8721b1f18eca7d32b70232bb484a2efcde914d8d5b4ccc3f2e3a736e0ae4c182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_370627f9e941297f45af08968fefce6edc512a4396393285080c51a14847e0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370627f9e941297f45af08968fefce6edc512a4396393285080c51a14847e0a9->enter($__internal_370627f9e941297f45af08968fefce6edc512a4396393285080c51a14847e0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_370627f9e941297f45af08968fefce6edc512a4396393285080c51a14847e0a9->leave($__internal_370627f9e941297f45af08968fefce6edc512a4396393285080c51a14847e0a9_prof);

        
        $__internal_8721b1f18eca7d32b70232bb484a2efcde914d8d5b4ccc3f2e3a736e0ae4c182->leave($__internal_8721b1f18eca7d32b70232bb484a2efcde914d8d5b4ccc3f2e3a736e0ae4c182_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_babb7a8a4a0c36fa03af3d1662e6fe33d125a4112f9a8c3896657ece502c81d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babb7a8a4a0c36fa03af3d1662e6fe33d125a4112f9a8c3896657ece502c81d6->enter($__internal_babb7a8a4a0c36fa03af3d1662e6fe33d125a4112f9a8c3896657ece502c81d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_053f3b00fbf5c636b447a3ef5295db390e1b26f96060523616203e970a7e39ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053f3b00fbf5c636b447a3ef5295db390e1b26f96060523616203e970a7e39ad->enter($__internal_053f3b00fbf5c636b447a3ef5295db390e1b26f96060523616203e970a7e39ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_053f3b00fbf5c636b447a3ef5295db390e1b26f96060523616203e970a7e39ad->leave($__internal_053f3b00fbf5c636b447a3ef5295db390e1b26f96060523616203e970a7e39ad_prof);

        
        $__internal_babb7a8a4a0c36fa03af3d1662e6fe33d125a4112f9a8c3896657ece502c81d6->leave($__internal_babb7a8a4a0c36fa03af3d1662e6fe33d125a4112f9a8c3896657ece502c81d6_prof);

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
        return array (  1452 => 356,  1450 => 355,  1441 => 354,  1431 => 316,  1428 => 315,  1419 => 314,  1409 => 346,  1402 => 342,  1398 => 340,  1392 => 337,  1389 => 336,  1386 => 335,  1384 => 334,  1381 => 333,  1375 => 331,  1373 => 330,  1370 => 329,  1364 => 327,  1362 => 326,  1359 => 325,  1353 => 323,  1351 => 322,  1348 => 321,  1342 => 319,  1340 => 318,  1337 => 317,  1335 => 314,  1332 => 313,  1323 => 312,  1313 => 298,  1309 => 296,  1303 => 294,  1296 => 290,  1291 => 288,  1288 => 287,  1286 => 286,  1283 => 285,  1280 => 284,  1271 => 283,  1261 => 266,  1255 => 263,  1252 => 262,  1249 => 261,  1240 => 260,  1230 => 307,  1224 => 303,  1218 => 301,  1216 => 300,  1213 => 299,  1211 => 283,  1208 => 282,  1204 => 280,  1189 => 278,  1185 => 277,  1182 => 276,  1180 => 275,  1176 => 273,  1170 => 271,  1168 => 270,  1163 => 267,  1161 => 260,  1157 => 258,  1154 => 257,  1145 => 256,  1135 => 308,  1132 => 256,  1123 => 255,  1112 => 347,  1110 => 312,  1105 => 309,  1103 => 255,  1099 => 253,  1090 => 252,  1079 => 242,  1070 => 241,  1059 => 244,  1057 => 241,  1054 => 240,  1045 => 239,  1032 => 237,  1023 => 236,  1005 => 235,  984 => 225,  978 => 223,  969 => 222,  959 => 246,  956 => 239,  953 => 236,  951 => 235,  948 => 234,  945 => 222,  936 => 221,  924 => 247,  922 => 221,  918 => 219,  909 => 218,  898 => 349,  896 => 252,  892 => 250,  889 => 218,  880 => 217,  868 => 205,  866 => 204,  859 => 199,  850 => 198,  839 => 196,  837 => 195,  831 => 191,  822 => 190,  812 => 211,  807 => 208,  804 => 198,  802 => 190,  798 => 188,  795 => 187,  786 => 186,  775 => 182,  771 => 180,  765 => 178,  762 => 177,  759 => 176,  745 => 175,  739 => 173,  735 => 171,  729 => 169,  725 => 167,  722 => 165,  719 => 163,  717 => 162,  712 => 161,  710 => 160,  707 => 159,  705 => 158,  702 => 155,  700 => 154,  698 => 153,  696 => 152,  678 => 151,  675 => 150,  673 => 149,  670 => 148,  668 => 147,  665 => 146,  656 => 145,  645 => 212,  643 => 186,  639 => 184,  637 => 145,  629 => 139,  620 => 138,  610 => 137,  606 => 135,  600 => 133,  597 => 132,  589 => 130,  587 => 129,  582 => 128,  579 => 127,  570 => 126,  556 => 122,  552 => 120,  543 => 119,  532 => 214,  529 => 138,  526 => 126,  524 => 119,  521 => 118,  512 => 117,  494 => 113,  484 => 110,  481 => 109,  478 => 108,  464 => 107,  459 => 105,  456 => 102,  454 => 101,  452 => 100,  450 => 99,  446 => 96,  443 => 95,  440 => 94,  423 => 93,  420 => 92,  417 => 91,  411 => 89,  409 => 88,  403 => 86,  394 => 85,  384 => 65,  375 => 63,  370 => 62,  361 => 61,  340 => 49,  336 => 47,  330 => 46,  322 => 45,  314 => 44,  306 => 43,  302 => 41,  293 => 40,  283 => 82,  280 => 81,  274 => 79,  271 => 78,  268 => 76,  263 => 75,  260 => 74,  257 => 72,  251 => 70,  248 => 69,  246 => 68,  244 => 67,  241 => 66,  239 => 61,  236 => 60,  233 => 40,  224 => 39,  214 => 37,  205 => 35,  200 => 34,  191 => 33,  178 => 28,  169 => 27,  151 => 25,  138 => 361,  135 => 360,  132 => 354,  130 => 353,  126 => 351,  124 => 217,  121 => 216,  119 => 117,  112 => 113,  108 => 111,  106 => 85,  102 => 83,  100 => 39,  97 => 38,  95 => 33,  92 => 32,  90 => 27,  85 => 25,  81 => 23,  79 => 22,  77 => 21,  75 => 20,  73 => 19,  71 => 18,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  61 => 13,  59 => 12,  57 => 11,);
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
{% set _preview              = block('preview') is defined ? block('preview') : null %}
{% set _form                 = block('form') is defined ? block('form') : null %}
{% set _show                 = block('show') is defined ? block('show') : null %}
{% set _list_table           = block('list_table') is defined ? block('list_table') : null %}
{% set _list_filters         = block('list_filters') is defined ? block('list_filters') : null %}
{% set _tab_menu             = block('tab_menu') is defined ? block('tab_menu') : null %}
{% set _content              = block('content') is defined ? block('content') : null %}
{% set _title                = block('title') is defined ? block('title') : null %}
{% set _breadcrumb           = block('breadcrumb') is defined ? block('breadcrumb') : null %}
{% set _actions              = block('actions') is defined ? block('actions') : null %}
{% set _navbar_title         = block('navbar_title') is defined ? block('navbar_title') : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions') : null %}

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
                        CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
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
                <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
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
                            {%  if loop.index != 2 %}
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
            {% endif%}
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

                                                        {% if not loop.last  %}
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
                                                                    {{ label }}
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
                                                <div class=\"navbar-left\">
                                                    {% if _tab_menu is not empty %}
                                                        {{ _tab_menu|raw }}
                                                    {% endif %}
                                                </div>

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

                            {% if _list_table is not empty or _list_filters is not empty %}
                                {% if _list_filters|trim %}
                                    <div class=\"row\">
                                        {{ _list_filters|raw }}
                                    </div>
                                {% endif %}

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
", "SonataAdminBundle::standard_layout.html.twig", "/home/pi/www/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
