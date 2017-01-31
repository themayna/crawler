<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9d0643677e54094d23d82b3ea78f8acc0aeccb706212c05826a7854cf29aff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be0e9b2d80a81efb76fb1fe608c4127b614a7a529effc0f32c174747e9aa8ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0e9b2d80a81efb76fb1fe608c4127b614a7a529effc0f32c174747e9aa8ddf->enter($__internal_be0e9b2d80a81efb76fb1fe608c4127b614a7a529effc0f32c174747e9aa8ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_2625587ac8793fe4528879fd03e5b13e392a4a097e816181005d472b39900871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2625587ac8793fe4528879fd03e5b13e392a4a097e816181005d472b39900871->enter($__internal_2625587ac8793fe4528879fd03e5b13e392a4a097e816181005d472b39900871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0e9b2d80a81efb76fb1fe608c4127b614a7a529effc0f32c174747e9aa8ddf->leave($__internal_be0e9b2d80a81efb76fb1fe608c4127b614a7a529effc0f32c174747e9aa8ddf_prof);

        
        $__internal_2625587ac8793fe4528879fd03e5b13e392a4a097e816181005d472b39900871->leave($__internal_2625587ac8793fe4528879fd03e5b13e392a4a097e816181005d472b39900871_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea7e9250c2567da31e24e6748235cd7847b8db3e2e2c1b2a413f5af9279dad1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7e9250c2567da31e24e6748235cd7847b8db3e2e2c1b2a413f5af9279dad1c->enter($__internal_ea7e9250c2567da31e24e6748235cd7847b8db3e2e2c1b2a413f5af9279dad1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6cd0ef5edacc48dd321ef561d40735c7cbb7ab6844481563058d32c35b3ff38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cd0ef5edacc48dd321ef561d40735c7cbb7ab6844481563058d32c35b3ff38->enter($__internal_d6cd0ef5edacc48dd321ef561d40735c7cbb7ab6844481563058d32c35b3ff38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d6cd0ef5edacc48dd321ef561d40735c7cbb7ab6844481563058d32c35b3ff38->leave($__internal_d6cd0ef5edacc48dd321ef561d40735c7cbb7ab6844481563058d32c35b3ff38_prof);

        
        $__internal_ea7e9250c2567da31e24e6748235cd7847b8db3e2e2c1b2a413f5af9279dad1c->leave($__internal_ea7e9250c2567da31e24e6748235cd7847b8db3e2e2c1b2a413f5af9279dad1c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da98733ad714358cde76b7b5624dc2f6a04c53fd1a6e7fbdf892c215e2a34bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da98733ad714358cde76b7b5624dc2f6a04c53fd1a6e7fbdf892c215e2a34bea->enter($__internal_da98733ad714358cde76b7b5624dc2f6a04c53fd1a6e7fbdf892c215e2a34bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44e4eaacffccdca9fefb393a21ed8e5dcc75a21c58d28dc65f9c4f08c972d020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e4eaacffccdca9fefb393a21ed8e5dcc75a21c58d28dc65f9c4f08c972d020->enter($__internal_44e4eaacffccdca9fefb393a21ed8e5dcc75a21c58d28dc65f9c4f08c972d020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_44e4eaacffccdca9fefb393a21ed8e5dcc75a21c58d28dc65f9c4f08c972d020->leave($__internal_44e4eaacffccdca9fefb393a21ed8e5dcc75a21c58d28dc65f9c4f08c972d020_prof);

        
        $__internal_da98733ad714358cde76b7b5624dc2f6a04c53fd1a6e7fbdf892c215e2a34bea->leave($__internal_da98733ad714358cde76b7b5624dc2f6a04c53fd1a6e7fbdf892c215e2a34bea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
