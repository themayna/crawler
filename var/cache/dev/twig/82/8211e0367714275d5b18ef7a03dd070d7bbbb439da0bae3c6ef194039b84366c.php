<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_7c948aa6cf12620b175c8150405c3316b3ee335b8390d2ef5cad7eff146b3533 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6301c1959c3a8341eb25dd99be313645e20aeea86e99c5bb4b8f6155b350dfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6301c1959c3a8341eb25dd99be313645e20aeea86e99c5bb4b8f6155b350dfb1->enter($__internal_6301c1959c3a8341eb25dd99be313645e20aeea86e99c5bb4b8f6155b350dfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_c2055f7b63ab045871c21e1bb35a56e9fe1dea1ee81012c74879afc67808910e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2055f7b63ab045871c21e1bb35a56e9fe1dea1ee81012c74879afc67808910e->enter($__internal_c2055f7b63ab045871c21e1bb35a56e9fe1dea1ee81012c74879afc67808910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6301c1959c3a8341eb25dd99be313645e20aeea86e99c5bb4b8f6155b350dfb1->leave($__internal_6301c1959c3a8341eb25dd99be313645e20aeea86e99c5bb4b8f6155b350dfb1_prof);

        
        $__internal_c2055f7b63ab045871c21e1bb35a56e9fe1dea1ee81012c74879afc67808910e->leave($__internal_c2055f7b63ab045871c21e1bb35a56e9fe1dea1ee81012c74879afc67808910e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_413b668b4921b9a814cc3337b3adcc626bb5ef3b48fcfa10dfbe66169aee5017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413b668b4921b9a814cc3337b3adcc626bb5ef3b48fcfa10dfbe66169aee5017->enter($__internal_413b668b4921b9a814cc3337b3adcc626bb5ef3b48fcfa10dfbe66169aee5017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79ccf9bc175560725916b697e23b4a484a6cfb0fc420421ff00c23b351071af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ccf9bc175560725916b697e23b4a484a6cfb0fc420421ff00c23b351071af3->enter($__internal_79ccf9bc175560725916b697e23b4a484a6cfb0fc420421ff00c23b351071af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_79ccf9bc175560725916b697e23b4a484a6cfb0fc420421ff00c23b351071af3->leave($__internal_79ccf9bc175560725916b697e23b4a484a6cfb0fc420421ff00c23b351071af3_prof);

        
        $__internal_413b668b4921b9a814cc3337b3adcc626bb5ef3b48fcfa10dfbe66169aee5017->leave($__internal_413b668b4921b9a814cc3337b3adcc626bb5ef3b48fcfa10dfbe66169aee5017_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_42f91486de17922a163eb1ebc5d6eb036988f828343bb6f875646e0a0da69157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f91486de17922a163eb1ebc5d6eb036988f828343bb6f875646e0a0da69157->enter($__internal_42f91486de17922a163eb1ebc5d6eb036988f828343bb6f875646e0a0da69157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_655776dbf482208307d623cfde15a8c174447a94ecc45ede7a92323170522829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655776dbf482208307d623cfde15a8c174447a94ecc45ede7a92323170522829->enter($__internal_655776dbf482208307d623cfde15a8c174447a94ecc45ede7a92323170522829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_655776dbf482208307d623cfde15a8c174447a94ecc45ede7a92323170522829->leave($__internal_655776dbf482208307d623cfde15a8c174447a94ecc45ede7a92323170522829_prof);

        
        $__internal_42f91486de17922a163eb1ebc5d6eb036988f828343bb6f875646e0a0da69157->leave($__internal_42f91486de17922a163eb1ebc5d6eb036988f828343bb6f875646e0a0da69157_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b2afe67edebf022454ecf2731ee9b5f3a658fb79810edb52255f4dfe441a5ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2afe67edebf022454ecf2731ee9b5f3a658fb79810edb52255f4dfe441a5ba2->enter($__internal_b2afe67edebf022454ecf2731ee9b5f3a658fb79810edb52255f4dfe441a5ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_b4e7b983e570f988c1ce5dfbdcf7e04fb52dd967f84dc819e8cd58e14f39fe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e7b983e570f988c1ce5dfbdcf7e04fb52dd967f84dc819e8cd58e14f39fe9e->enter($__internal_b4e7b983e570f988c1ce5dfbdcf7e04fb52dd967f84dc819e8cd58e14f39fe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_b4e7b983e570f988c1ce5dfbdcf7e04fb52dd967f84dc819e8cd58e14f39fe9e->leave($__internal_b4e7b983e570f988c1ce5dfbdcf7e04fb52dd967f84dc819e8cd58e14f39fe9e_prof);

        
        $__internal_b2afe67edebf022454ecf2731ee9b5f3a658fb79810edb52255f4dfe441a5ba2->leave($__internal_b2afe67edebf022454ecf2731ee9b5f3a658fb79810edb52255f4dfe441a5ba2_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3b01309628346d696e9dca5ad85278baa566ee784d463fc910e02c5787d06870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b01309628346d696e9dca5ad85278baa566ee784d463fc910e02c5787d06870->enter($__internal_3b01309628346d696e9dca5ad85278baa566ee784d463fc910e02c5787d06870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_8445b79dd644358eaa2ede749c186848c72d8d95df3e373e455de7d5556daebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8445b79dd644358eaa2ede749c186848c72d8d95df3e373e455de7d5556daebe->enter($__internal_8445b79dd644358eaa2ede749c186848c72d8d95df3e373e455de7d5556daebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_8445b79dd644358eaa2ede749c186848c72d8d95df3e373e455de7d5556daebe->leave($__internal_8445b79dd644358eaa2ede749c186848c72d8d95df3e373e455de7d5556daebe_prof);

        
        $__internal_3b01309628346d696e9dca5ad85278baa566ee784d463fc910e02c5787d06870->leave($__internal_3b01309628346d696e9dca5ad85278baa566ee784d463fc910e02c5787d06870_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_3f57b34a0dde3c5dddde8006d948f4436bee2a1e0b231247e86b82c1cf47c345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f57b34a0dde3c5dddde8006d948f4436bee2a1e0b231247e86b82c1cf47c345->enter($__internal_3f57b34a0dde3c5dddde8006d948f4436bee2a1e0b231247e86b82c1cf47c345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_20489535b4c64d231d1187b75f573b2538c3e1d85559dd12fba7bfc7d6ed2b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20489535b4c64d231d1187b75f573b2538c3e1d85559dd12fba7bfc7d6ed2b79->enter($__internal_20489535b4c64d231d1187b75f573b2538c3e1d85559dd12fba7bfc7d6ed2b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_20489535b4c64d231d1187b75f573b2538c3e1d85559dd12fba7bfc7d6ed2b79->leave($__internal_20489535b4c64d231d1187b75f573b2538c3e1d85559dd12fba7bfc7d6ed2b79_prof);

        
        $__internal_3f57b34a0dde3c5dddde8006d948f4436bee2a1e0b231247e86b82c1cf47c345->leave($__internal_3f57b34a0dde3c5dddde8006d948f4436bee2a1e0b231247e86b82c1cf47c345_prof);

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
        return array (  164 => 36,  155 => 35,  137 => 30,  127 => 27,  118 => 26,  105 => 23,  96 => 22,  82 => 18,  76 => 16,  73 => 15,  64 => 14,  54 => 12,  52 => 33,  40 => 12,  12 => 32,);
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
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/pi/www/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
