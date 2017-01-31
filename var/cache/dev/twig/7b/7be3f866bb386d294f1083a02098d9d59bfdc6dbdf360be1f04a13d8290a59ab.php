<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_ee0b544dc1fa08a83ed0576b390f8845ba05ba9c6fa2783a69eccefd6c689723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd599865c2b4fa2a15413c387aeae2c2cc5c945756cb2c2f673ec20772c3c674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd599865c2b4fa2a15413c387aeae2c2cc5c945756cb2c2f673ec20772c3c674->enter($__internal_bd599865c2b4fa2a15413c387aeae2c2cc5c945756cb2c2f673ec20772c3c674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_f448c985096f5b24e614c1d2bb535edfdf5310dd21f8375578b5a080594375df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f448c985096f5b24e614c1d2bb535edfdf5310dd21f8375578b5a080594375df->enter($__internal_f448c985096f5b24e614c1d2bb535edfdf5310dd21f8375578b5a080594375df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd599865c2b4fa2a15413c387aeae2c2cc5c945756cb2c2f673ec20772c3c674->leave($__internal_bd599865c2b4fa2a15413c387aeae2c2cc5c945756cb2c2f673ec20772c3c674_prof);

        
        $__internal_f448c985096f5b24e614c1d2bb535edfdf5310dd21f8375578b5a080594375df->leave($__internal_f448c985096f5b24e614c1d2bb535edfdf5310dd21f8375578b5a080594375df_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_bd205e510c5720da10e55f46ec78d96ee4c30c1236a7980f9f6e44bba99063d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd205e510c5720da10e55f46ec78d96ee4c30c1236a7980f9f6e44bba99063d9->enter($__internal_bd205e510c5720da10e55f46ec78d96ee4c30c1236a7980f9f6e44bba99063d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_003acdf7cabdc221a212e2e278dddd078c59e233136ff41d32c0bfaf6971fcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003acdf7cabdc221a212e2e278dddd078c59e233136ff41d32c0bfaf6971fcf4->enter($__internal_003acdf7cabdc221a212e2e278dddd078c59e233136ff41d32c0bfaf6971fcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_003acdf7cabdc221a212e2e278dddd078c59e233136ff41d32c0bfaf6971fcf4->leave($__internal_003acdf7cabdc221a212e2e278dddd078c59e233136ff41d32c0bfaf6971fcf4_prof);

        
        $__internal_bd205e510c5720da10e55f46ec78d96ee4c30c1236a7980f9f6e44bba99063d9->leave($__internal_bd205e510c5720da10e55f46ec78d96ee4c30c1236a7980f9f6e44bba99063d9_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_6fcfdb1a2e255a07e1cbe4d568f15bafe79c3f2422026465104510fb6e977a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcfdb1a2e255a07e1cbe4d568f15bafe79c3f2422026465104510fb6e977a1c->enter($__internal_6fcfdb1a2e255a07e1cbe4d568f15bafe79c3f2422026465104510fb6e977a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_2b6694d9bf5c9899778f2514497bfb9c27092e15fe94ded7a1cfa17ed876d0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6694d9bf5c9899778f2514497bfb9c27092e15fe94ded7a1cfa17ed876d0b5->enter($__internal_2b6694d9bf5c9899778f2514497bfb9c27092e15fe94ded7a1cfa17ed876d0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_2b6694d9bf5c9899778f2514497bfb9c27092e15fe94ded7a1cfa17ed876d0b5->leave($__internal_2b6694d9bf5c9899778f2514497bfb9c27092e15fe94ded7a1cfa17ed876d0b5_prof);

        
        $__internal_6fcfdb1a2e255a07e1cbe4d568f15bafe79c3f2422026465104510fb6e977a1c->leave($__internal_6fcfdb1a2e255a07e1cbe4d568f15bafe79c3f2422026465104510fb6e977a1c_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_6775b5d2f4b7d8a49cb4234182c82cbb0c1107dc854a63ad584e62b5b7acecff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6775b5d2f4b7d8a49cb4234182c82cbb0c1107dc854a63ad584e62b5b7acecff->enter($__internal_6775b5d2f4b7d8a49cb4234182c82cbb0c1107dc854a63ad584e62b5b7acecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_144c11affe81db00bc87671b3850864ba4440129294ce6b188446b1326518456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144c11affe81db00bc87671b3850864ba4440129294ce6b188446b1326518456->enter($__internal_144c11affe81db00bc87671b3850864ba4440129294ce6b188446b1326518456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_144c11affe81db00bc87671b3850864ba4440129294ce6b188446b1326518456->leave($__internal_144c11affe81db00bc87671b3850864ba4440129294ce6b188446b1326518456_prof);

        
        $__internal_6775b5d2f4b7d8a49cb4234182c82cbb0c1107dc854a63ad584e62b5b7acecff->leave($__internal_6775b5d2f4b7d8a49cb4234182c82cbb0c1107dc854a63ad584e62b5b7acecff_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_8144286f9dff62a4b3dd7ebb857fe04ea8e17146ac34c29333b019241d171258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8144286f9dff62a4b3dd7ebb857fe04ea8e17146ac34c29333b019241d171258->enter($__internal_8144286f9dff62a4b3dd7ebb857fe04ea8e17146ac34c29333b019241d171258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_21cd005511a16b351842281e2d118de9e8a5a868bb209fbcd5d2dc8cef21cc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cd005511a16b351842281e2d118de9e8a5a868bb209fbcd5d2dc8cef21cc43->enter($__internal_21cd005511a16b351842281e2d118de9e8a5a868bb209fbcd5d2dc8cef21cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_21cd005511a16b351842281e2d118de9e8a5a868bb209fbcd5d2dc8cef21cc43->leave($__internal_21cd005511a16b351842281e2d118de9e8a5a868bb209fbcd5d2dc8cef21cc43_prof);

        
        $__internal_8144286f9dff62a4b3dd7ebb857fe04ea8e17146ac34c29333b019241d171258->leave($__internal_8144286f9dff62a4b3dd7ebb857fe04ea8e17146ac34c29333b019241d171258_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_4b5e56e50234af2b16e20e51f674cbf025b43402c43030e8b49187d9ccfe9ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5e56e50234af2b16e20e51f674cbf025b43402c43030e8b49187d9ccfe9ad3->enter($__internal_4b5e56e50234af2b16e20e51f674cbf025b43402c43030e8b49187d9ccfe9ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d29a3d97fc663a73ae7a28b144118276db5f6c7f7434e9b0bb0f76a0c7f02b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29a3d97fc663a73ae7a28b144118276db5f6c7f7434e9b0bb0f76a0c7f02b67->enter($__internal_d29a3d97fc663a73ae7a28b144118276db5f6c7f7434e9b0bb0f76a0c7f02b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_d29a3d97fc663a73ae7a28b144118276db5f6c7f7434e9b0bb0f76a0c7f02b67->leave($__internal_d29a3d97fc663a73ae7a28b144118276db5f6c7f7434e9b0bb0f76a0c7f02b67_prof);

        
        $__internal_4b5e56e50234af2b16e20e51f674cbf025b43402c43030e8b49187d9ccfe9ad3->leave($__internal_4b5e56e50234af2b16e20e51f674cbf025b43402c43030e8b49187d9ccfe9ad3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 51,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.attribute('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/home/pi/www/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
