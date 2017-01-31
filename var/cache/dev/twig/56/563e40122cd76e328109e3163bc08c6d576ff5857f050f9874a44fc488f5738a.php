<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_53cffb39e2741b475995220b9752f0b648b1f897c6060d4f8f11efcb8503422e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_244c6123d8852cc00093db130de94db526960032578aadeb1f237643ef1ca000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244c6123d8852cc00093db130de94db526960032578aadeb1f237643ef1ca000->enter($__internal_244c6123d8852cc00093db130de94db526960032578aadeb1f237643ef1ca000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_9d59192baa9f9b437a074a84db9b698c29070ca33fbbd02db0cec454c7f06e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d59192baa9f9b437a074a84db9b698c29070ca33fbbd02db0cec454c7f06e12->enter($__internal_9d59192baa9f9b437a074a84db9b698c29070ca33fbbd02db0cec454c7f06e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_244c6123d8852cc00093db130de94db526960032578aadeb1f237643ef1ca000->leave($__internal_244c6123d8852cc00093db130de94db526960032578aadeb1f237643ef1ca000_prof);

        
        $__internal_9d59192baa9f9b437a074a84db9b698c29070ca33fbbd02db0cec454c7f06e12->leave($__internal_9d59192baa9f9b437a074a84db9b698c29070ca33fbbd02db0cec454c7f06e12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
