<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9c0cf6bdd7000e3acefc95aa38752eb3c7a7d4449238e35ac4e312c0be5e8e8f extends Twig_Template
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
        $__internal_68229c40fba627b6fc877f31188c359bee90b1c56f961c3deb8736c64647bfe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68229c40fba627b6fc877f31188c359bee90b1c56f961c3deb8736c64647bfe7->enter($__internal_68229c40fba627b6fc877f31188c359bee90b1c56f961c3deb8736c64647bfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f9baca70b84f9757e9b4f585bc34f44a7cb4b0b64c30d3f9500b1c22a31e483f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9baca70b84f9757e9b4f585bc34f44a7cb4b0b64c30d3f9500b1c22a31e483f->enter($__internal_f9baca70b84f9757e9b4f585bc34f44a7cb4b0b64c30d3f9500b1c22a31e483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_68229c40fba627b6fc877f31188c359bee90b1c56f961c3deb8736c64647bfe7->leave($__internal_68229c40fba627b6fc877f31188c359bee90b1c56f961c3deb8736c64647bfe7_prof);

        
        $__internal_f9baca70b84f9757e9b4f585bc34f44a7cb4b0b64c30d3f9500b1c22a31e483f->leave($__internal_f9baca70b84f9757e9b4f585bc34f44a7cb4b0b64c30d3f9500b1c22a31e483f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
