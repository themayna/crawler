<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bdde93eef8cec38f32c800b80588a2546ef4760de277b5c8a69f518f21705a30 extends Twig_Template
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
        $__internal_7cd2d9a620b26ac8b469a0d8e82ee9d9903ed3f6ea95ca122463a6186b2f857f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd2d9a620b26ac8b469a0d8e82ee9d9903ed3f6ea95ca122463a6186b2f857f->enter($__internal_7cd2d9a620b26ac8b469a0d8e82ee9d9903ed3f6ea95ca122463a6186b2f857f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c4ba83371724f243ea8281e484626fb04222c64e0e58be0f7e63f3dd1e71ff48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ba83371724f243ea8281e484626fb04222c64e0e58be0f7e63f3dd1e71ff48->enter($__internal_c4ba83371724f243ea8281e484626fb04222c64e0e58be0f7e63f3dd1e71ff48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cd2d9a620b26ac8b469a0d8e82ee9d9903ed3f6ea95ca122463a6186b2f857f->leave($__internal_7cd2d9a620b26ac8b469a0d8e82ee9d9903ed3f6ea95ca122463a6186b2f857f_prof);

        
        $__internal_c4ba83371724f243ea8281e484626fb04222c64e0e58be0f7e63f3dd1e71ff48->leave($__internal_c4ba83371724f243ea8281e484626fb04222c64e0e58be0f7e63f3dd1e71ff48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df45e7ac58bcbae58f32b79c5a2d5a43e7db085c892348623d68cca81ec70402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df45e7ac58bcbae58f32b79c5a2d5a43e7db085c892348623d68cca81ec70402->enter($__internal_df45e7ac58bcbae58f32b79c5a2d5a43e7db085c892348623d68cca81ec70402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31d45661f59ae6af56f755762a902ac62b141d4b25d1468001974a858bb59404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d45661f59ae6af56f755762a902ac62b141d4b25d1468001974a858bb59404->enter($__internal_31d45661f59ae6af56f755762a902ac62b141d4b25d1468001974a858bb59404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_31d45661f59ae6af56f755762a902ac62b141d4b25d1468001974a858bb59404->leave($__internal_31d45661f59ae6af56f755762a902ac62b141d4b25d1468001974a858bb59404_prof);

        
        $__internal_df45e7ac58bcbae58f32b79c5a2d5a43e7db085c892348623d68cca81ec70402->leave($__internal_df45e7ac58bcbae58f32b79c5a2d5a43e7db085c892348623d68cca81ec70402_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4be10da1a80716d61ff75db1a2e9a0c2f1ff2486ac4164367bd56989fa300d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be10da1a80716d61ff75db1a2e9a0c2f1ff2486ac4164367bd56989fa300d2a->enter($__internal_4be10da1a80716d61ff75db1a2e9a0c2f1ff2486ac4164367bd56989fa300d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3898a53b13a4626401b58ab70bdc1b5c843dd1dd6cf33b2d459b32bdfb463f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3898a53b13a4626401b58ab70bdc1b5c843dd1dd6cf33b2d459b32bdfb463f9d->enter($__internal_3898a53b13a4626401b58ab70bdc1b5c843dd1dd6cf33b2d459b32bdfb463f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3898a53b13a4626401b58ab70bdc1b5c843dd1dd6cf33b2d459b32bdfb463f9d->leave($__internal_3898a53b13a4626401b58ab70bdc1b5c843dd1dd6cf33b2d459b32bdfb463f9d_prof);

        
        $__internal_4be10da1a80716d61ff75db1a2e9a0c2f1ff2486ac4164367bd56989fa300d2a->leave($__internal_4be10da1a80716d61ff75db1a2e9a0c2f1ff2486ac4164367bd56989fa300d2a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_646f63bd0536b8d339ad9bfcb5d09bf6cedf2a5f85c724cec16d2d036b760bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646f63bd0536b8d339ad9bfcb5d09bf6cedf2a5f85c724cec16d2d036b760bc0->enter($__internal_646f63bd0536b8d339ad9bfcb5d09bf6cedf2a5f85c724cec16d2d036b760bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_445d38b5d8bef42587aab19b94a8c24bc3664373dd672b46c8e8722cb009fb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445d38b5d8bef42587aab19b94a8c24bc3664373dd672b46c8e8722cb009fb8a->enter($__internal_445d38b5d8bef42587aab19b94a8c24bc3664373dd672b46c8e8722cb009fb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_445d38b5d8bef42587aab19b94a8c24bc3664373dd672b46c8e8722cb009fb8a->leave($__internal_445d38b5d8bef42587aab19b94a8c24bc3664373dd672b46c8e8722cb009fb8a_prof);

        
        $__internal_646f63bd0536b8d339ad9bfcb5d09bf6cedf2a5f85c724cec16d2d036b760bc0->leave($__internal_646f63bd0536b8d339ad9bfcb5d09bf6cedf2a5f85c724cec16d2d036b760bc0_prof);

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
