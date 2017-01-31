<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f545595115687d7ed2aa66cb0ce4caa35974271ff400b6f173f5a4bbdacda6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d465ff021aea8c2d9b4c8a98b52a3a2595dd39712e2a93121cd7687b59c1969e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d465ff021aea8c2d9b4c8a98b52a3a2595dd39712e2a93121cd7687b59c1969e->enter($__internal_d465ff021aea8c2d9b4c8a98b52a3a2595dd39712e2a93121cd7687b59c1969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f6a6218521765d5e68872d04b258cb5455db730834f74e68926fd64b23fbc7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a6218521765d5e68872d04b258cb5455db730834f74e68926fd64b23fbc7ee->enter($__internal_f6a6218521765d5e68872d04b258cb5455db730834f74e68926fd64b23fbc7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d465ff021aea8c2d9b4c8a98b52a3a2595dd39712e2a93121cd7687b59c1969e->leave($__internal_d465ff021aea8c2d9b4c8a98b52a3a2595dd39712e2a93121cd7687b59c1969e_prof);

        
        $__internal_f6a6218521765d5e68872d04b258cb5455db730834f74e68926fd64b23fbc7ee->leave($__internal_f6a6218521765d5e68872d04b258cb5455db730834f74e68926fd64b23fbc7ee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6df49a8f76ef0a30ebe23731ad2cf779cfb8f7bafff7e13a88eee33325b65b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6df49a8f76ef0a30ebe23731ad2cf779cfb8f7bafff7e13a88eee33325b65b0->enter($__internal_a6df49a8f76ef0a30ebe23731ad2cf779cfb8f7bafff7e13a88eee33325b65b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_124e923e211c502988603fecf285b3a31bfc52aa7598897ac764924f0079f41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124e923e211c502988603fecf285b3a31bfc52aa7598897ac764924f0079f41d->enter($__internal_124e923e211c502988603fecf285b3a31bfc52aa7598897ac764924f0079f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_124e923e211c502988603fecf285b3a31bfc52aa7598897ac764924f0079f41d->leave($__internal_124e923e211c502988603fecf285b3a31bfc52aa7598897ac764924f0079f41d_prof);

        
        $__internal_a6df49a8f76ef0a30ebe23731ad2cf779cfb8f7bafff7e13a88eee33325b65b0->leave($__internal_a6df49a8f76ef0a30ebe23731ad2cf779cfb8f7bafff7e13a88eee33325b65b0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
