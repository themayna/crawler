<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b5666b0e58bea80cec843fde54cb47f88c5cffd4f53af1589a1e70cc6d77c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5666b0e58bea80cec843fde54cb47f88c5cffd4f53af1589a1e70cc6d77c9c->enter($__internal_1b5666b0e58bea80cec843fde54cb47f88c5cffd4f53af1589a1e70cc6d77c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_22242be47e6b2a22659e50a311143809635dfc54bd0fc1f94f6ad3f4728cf9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22242be47e6b2a22659e50a311143809635dfc54bd0fc1f94f6ad3f4728cf9cc->enter($__internal_22242be47e6b2a22659e50a311143809635dfc54bd0fc1f94f6ad3f4728cf9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b5666b0e58bea80cec843fde54cb47f88c5cffd4f53af1589a1e70cc6d77c9c->leave($__internal_1b5666b0e58bea80cec843fde54cb47f88c5cffd4f53af1589a1e70cc6d77c9c_prof);

        
        $__internal_22242be47e6b2a22659e50a311143809635dfc54bd0fc1f94f6ad3f4728cf9cc->leave($__internal_22242be47e6b2a22659e50a311143809635dfc54bd0fc1f94f6ad3f4728cf9cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec73ec5727ac4d9e65e961e13d4ea280835c747ab9d1daa6ca8bbc80ef6a4f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec73ec5727ac4d9e65e961e13d4ea280835c747ab9d1daa6ca8bbc80ef6a4f1c->enter($__internal_ec73ec5727ac4d9e65e961e13d4ea280835c747ab9d1daa6ca8bbc80ef6a4f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd79c834423b3a9a9ccde1a18206c887b229202fc8678617d1171604ebe60a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd79c834423b3a9a9ccde1a18206c887b229202fc8678617d1171604ebe60a02->enter($__internal_bd79c834423b3a9a9ccde1a18206c887b229202fc8678617d1171604ebe60a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bd79c834423b3a9a9ccde1a18206c887b229202fc8678617d1171604ebe60a02->leave($__internal_bd79c834423b3a9a9ccde1a18206c887b229202fc8678617d1171604ebe60a02_prof);

        
        $__internal_ec73ec5727ac4d9e65e961e13d4ea280835c747ab9d1daa6ca8bbc80ef6a4f1c->leave($__internal_ec73ec5727ac4d9e65e961e13d4ea280835c747ab9d1daa6ca8bbc80ef6a4f1c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0df03d48ccd6d9e8b09adacbbea80511ea8f30a0b2c01e60c4531393d2c3776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0df03d48ccd6d9e8b09adacbbea80511ea8f30a0b2c01e60c4531393d2c3776->enter($__internal_c0df03d48ccd6d9e8b09adacbbea80511ea8f30a0b2c01e60c4531393d2c3776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_551c56b3f8b198eb9045770711e4b78f5bc17424219253c0f0a23f2480eeb0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551c56b3f8b198eb9045770711e4b78f5bc17424219253c0f0a23f2480eeb0dc->enter($__internal_551c56b3f8b198eb9045770711e4b78f5bc17424219253c0f0a23f2480eeb0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_551c56b3f8b198eb9045770711e4b78f5bc17424219253c0f0a23f2480eeb0dc->leave($__internal_551c56b3f8b198eb9045770711e4b78f5bc17424219253c0f0a23f2480eeb0dc_prof);

        
        $__internal_c0df03d48ccd6d9e8b09adacbbea80511ea8f30a0b2c01e60c4531393d2c3776->leave($__internal_c0df03d48ccd6d9e8b09adacbbea80511ea8f30a0b2c01e60c4531393d2c3776_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1e51dd8c0c2712be567794c42ba238ea15601febf9bedfcdcaaec1cdc46225b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e51dd8c0c2712be567794c42ba238ea15601febf9bedfcdcaaec1cdc46225b->enter($__internal_d1e51dd8c0c2712be567794c42ba238ea15601febf9bedfcdcaaec1cdc46225b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22e8754681018e7e0fdb70a6fd6dddb8694ed96f53c1c0c057cb04b338321523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e8754681018e7e0fdb70a6fd6dddb8694ed96f53c1c0c057cb04b338321523->enter($__internal_22e8754681018e7e0fdb70a6fd6dddb8694ed96f53c1c0c057cb04b338321523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_22e8754681018e7e0fdb70a6fd6dddb8694ed96f53c1c0c057cb04b338321523->leave($__internal_22e8754681018e7e0fdb70a6fd6dddb8694ed96f53c1c0c057cb04b338321523_prof);

        
        $__internal_d1e51dd8c0c2712be567794c42ba238ea15601febf9bedfcdcaaec1cdc46225b->leave($__internal_d1e51dd8c0c2712be567794c42ba238ea15601febf9bedfcdcaaec1cdc46225b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
