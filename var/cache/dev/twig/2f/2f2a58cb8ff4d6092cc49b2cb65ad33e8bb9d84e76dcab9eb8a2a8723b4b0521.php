<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9bec2cb366f3c3c697d0661247e618e3b9cae099356c3bf454e5436a1a4b84a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f63608d8777825c54142b13b335aa224fd2b923f8347c499e86d09a8d8a3840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f63608d8777825c54142b13b335aa224fd2b923f8347c499e86d09a8d8a3840->enter($__internal_4f63608d8777825c54142b13b335aa224fd2b923f8347c499e86d09a8d8a3840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8651ec095f610621af00c92b6066d304cdeabe7dc24ad230466f1693a2e2ce29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8651ec095f610621af00c92b6066d304cdeabe7dc24ad230466f1693a2e2ce29->enter($__internal_8651ec095f610621af00c92b6066d304cdeabe7dc24ad230466f1693a2e2ce29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f63608d8777825c54142b13b335aa224fd2b923f8347c499e86d09a8d8a3840->leave($__internal_4f63608d8777825c54142b13b335aa224fd2b923f8347c499e86d09a8d8a3840_prof);

        
        $__internal_8651ec095f610621af00c92b6066d304cdeabe7dc24ad230466f1693a2e2ce29->leave($__internal_8651ec095f610621af00c92b6066d304cdeabe7dc24ad230466f1693a2e2ce29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f30d36e2a245d0197103b1e10cdcb817f49bd617fbe6418a3da5a7dc0f4d29be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30d36e2a245d0197103b1e10cdcb817f49bd617fbe6418a3da5a7dc0f4d29be->enter($__internal_f30d36e2a245d0197103b1e10cdcb817f49bd617fbe6418a3da5a7dc0f4d29be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4bbedbc94899dfa1a4a503b182aa837b0338ddfbba69bf17c7dfd9a25f64c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bbedbc94899dfa1a4a503b182aa837b0338ddfbba69bf17c7dfd9a25f64c12->enter($__internal_e4bbedbc94899dfa1a4a503b182aa837b0338ddfbba69bf17c7dfd9a25f64c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e4bbedbc94899dfa1a4a503b182aa837b0338ddfbba69bf17c7dfd9a25f64c12->leave($__internal_e4bbedbc94899dfa1a4a503b182aa837b0338ddfbba69bf17c7dfd9a25f64c12_prof);

        
        $__internal_f30d36e2a245d0197103b1e10cdcb817f49bd617fbe6418a3da5a7dc0f4d29be->leave($__internal_f30d36e2a245d0197103b1e10cdcb817f49bd617fbe6418a3da5a7dc0f4d29be_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_90843cf732240fbe7af50c3b4d6215b19986c73749a6812197382cfdd2f10f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90843cf732240fbe7af50c3b4d6215b19986c73749a6812197382cfdd2f10f3e->enter($__internal_90843cf732240fbe7af50c3b4d6215b19986c73749a6812197382cfdd2f10f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1827866b5e12690ee94aa686dc6b60d5dc68b017fa32fac024847da9acc44f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1827866b5e12690ee94aa686dc6b60d5dc68b017fa32fac024847da9acc44f41->enter($__internal_1827866b5e12690ee94aa686dc6b60d5dc68b017fa32fac024847da9acc44f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1827866b5e12690ee94aa686dc6b60d5dc68b017fa32fac024847da9acc44f41->leave($__internal_1827866b5e12690ee94aa686dc6b60d5dc68b017fa32fac024847da9acc44f41_prof);

        
        $__internal_90843cf732240fbe7af50c3b4d6215b19986c73749a6812197382cfdd2f10f3e->leave($__internal_90843cf732240fbe7af50c3b4d6215b19986c73749a6812197382cfdd2f10f3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
