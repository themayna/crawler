<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_48d41f524b5e1d5f24d03e1a3afe7423b6a4b18e52500c710cad310e5b28992b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cf03d5a2f647cfdd3cd8bf1c783809ce671f3868461765a65ece7847132c0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf03d5a2f647cfdd3cd8bf1c783809ce671f3868461765a65ece7847132c0ea->enter($__internal_1cf03d5a2f647cfdd3cd8bf1c783809ce671f3868461765a65ece7847132c0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_074c61be5c05cdab59602286433be26581640eb8e01e847dcdc794cc2974a4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074c61be5c05cdab59602286433be26581640eb8e01e847dcdc794cc2974a4b9->enter($__internal_074c61be5c05cdab59602286433be26581640eb8e01e847dcdc794cc2974a4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf03d5a2f647cfdd3cd8bf1c783809ce671f3868461765a65ece7847132c0ea->leave($__internal_1cf03d5a2f647cfdd3cd8bf1c783809ce671f3868461765a65ece7847132c0ea_prof);

        
        $__internal_074c61be5c05cdab59602286433be26581640eb8e01e847dcdc794cc2974a4b9->leave($__internal_074c61be5c05cdab59602286433be26581640eb8e01e847dcdc794cc2974a4b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b56f3b2d23d4271427ae7103314e976168957c74eb00f98c9e43fbe2f4753ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b56f3b2d23d4271427ae7103314e976168957c74eb00f98c9e43fbe2f4753ce->enter($__internal_7b56f3b2d23d4271427ae7103314e976168957c74eb00f98c9e43fbe2f4753ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa6058978ddf659b1cdf634cdf5bd30a168cd7c0c9a04fc62d15d40e8961fd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6058978ddf659b1cdf634cdf5bd30a168cd7c0c9a04fc62d15d40e8961fd0a->enter($__internal_aa6058978ddf659b1cdf634cdf5bd30a168cd7c0c9a04fc62d15d40e8961fd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_aa6058978ddf659b1cdf634cdf5bd30a168cd7c0c9a04fc62d15d40e8961fd0a->leave($__internal_aa6058978ddf659b1cdf634cdf5bd30a168cd7c0c9a04fc62d15d40e8961fd0a_prof);

        
        $__internal_7b56f3b2d23d4271427ae7103314e976168957c74eb00f98c9e43fbe2f4753ce->leave($__internal_7b56f3b2d23d4271427ae7103314e976168957c74eb00f98c9e43fbe2f4753ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
