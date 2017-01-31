<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9e403a83fc974965188305bcbd8c4f59756fabf7f3a873ab62f9731b0a688eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e403a83fc974965188305bcbd8c4f59756fabf7f3a873ab62f9731b0a688eb1->enter($__internal_9e403a83fc974965188305bcbd8c4f59756fabf7f3a873ab62f9731b0a688eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5a808437f8a791e6edb5a2dc4136cfbd8e0646e36c0d4f55b0372f98ea8c9aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a808437f8a791e6edb5a2dc4136cfbd8e0646e36c0d4f55b0372f98ea8c9aa9->enter($__internal_5a808437f8a791e6edb5a2dc4136cfbd8e0646e36c0d4f55b0372f98ea8c9aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e403a83fc974965188305bcbd8c4f59756fabf7f3a873ab62f9731b0a688eb1->leave($__internal_9e403a83fc974965188305bcbd8c4f59756fabf7f3a873ab62f9731b0a688eb1_prof);

        
        $__internal_5a808437f8a791e6edb5a2dc4136cfbd8e0646e36c0d4f55b0372f98ea8c9aa9->leave($__internal_5a808437f8a791e6edb5a2dc4136cfbd8e0646e36c0d4f55b0372f98ea8c9aa9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85fd8d332d4a4673c18325d533651620b8912ffcfc2bc6a527f1dddb86280416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fd8d332d4a4673c18325d533651620b8912ffcfc2bc6a527f1dddb86280416->enter($__internal_85fd8d332d4a4673c18325d533651620b8912ffcfc2bc6a527f1dddb86280416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c35163b0edd69cc4d87543034ee3cbd5496a844378cecc2a71e10b2626296e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35163b0edd69cc4d87543034ee3cbd5496a844378cecc2a71e10b2626296e4f->enter($__internal_c35163b0edd69cc4d87543034ee3cbd5496a844378cecc2a71e10b2626296e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c35163b0edd69cc4d87543034ee3cbd5496a844378cecc2a71e10b2626296e4f->leave($__internal_c35163b0edd69cc4d87543034ee3cbd5496a844378cecc2a71e10b2626296e4f_prof);

        
        $__internal_85fd8d332d4a4673c18325d533651620b8912ffcfc2bc6a527f1dddb86280416->leave($__internal_85fd8d332d4a4673c18325d533651620b8912ffcfc2bc6a527f1dddb86280416_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1216a259521791bda8aaf0a89b710d7022d00c858a47175ca5c189fb2221b0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1216a259521791bda8aaf0a89b710d7022d00c858a47175ca5c189fb2221b0ae->enter($__internal_1216a259521791bda8aaf0a89b710d7022d00c858a47175ca5c189fb2221b0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9105da6f3525bcd329cbae90bc4e657bc037d1d644a0c6c5fea92b05b678d6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9105da6f3525bcd329cbae90bc4e657bc037d1d644a0c6c5fea92b05b678d6c7->enter($__internal_9105da6f3525bcd329cbae90bc4e657bc037d1d644a0c6c5fea92b05b678d6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9105da6f3525bcd329cbae90bc4e657bc037d1d644a0c6c5fea92b05b678d6c7->leave($__internal_9105da6f3525bcd329cbae90bc4e657bc037d1d644a0c6c5fea92b05b678d6c7_prof);

        
        $__internal_1216a259521791bda8aaf0a89b710d7022d00c858a47175ca5c189fb2221b0ae->leave($__internal_1216a259521791bda8aaf0a89b710d7022d00c858a47175ca5c189fb2221b0ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b28825fa2a2d11a48a6c82aed5a31e5fd8e6736452e53e7c183c9d131833779b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28825fa2a2d11a48a6c82aed5a31e5fd8e6736452e53e7c183c9d131833779b->enter($__internal_b28825fa2a2d11a48a6c82aed5a31e5fd8e6736452e53e7c183c9d131833779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95aab9ce3606a0f5374f175a9f8532bd35a39c96ff43e8994599ca59c73a1d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95aab9ce3606a0f5374f175a9f8532bd35a39c96ff43e8994599ca59c73a1d97->enter($__internal_95aab9ce3606a0f5374f175a9f8532bd35a39c96ff43e8994599ca59c73a1d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_95aab9ce3606a0f5374f175a9f8532bd35a39c96ff43e8994599ca59c73a1d97->leave($__internal_95aab9ce3606a0f5374f175a9f8532bd35a39c96ff43e8994599ca59c73a1d97_prof);

        
        $__internal_b28825fa2a2d11a48a6c82aed5a31e5fd8e6736452e53e7c183c9d131833779b->leave($__internal_b28825fa2a2d11a48a6c82aed5a31e5fd8e6736452e53e7c183c9d131833779b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
