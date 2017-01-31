<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_ae8b84b29e6d5ce0087789b1472b14ee81d878435a36a979a8718adaf695921d extends Twig_Template
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
        $__internal_9b915df25cef4359195d2589176e68afd05477a945674c2ef0b9c6fbb69a6392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b915df25cef4359195d2589176e68afd05477a945674c2ef0b9c6fbb69a6392->enter($__internal_9b915df25cef4359195d2589176e68afd05477a945674c2ef0b9c6fbb69a6392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        $__internal_2a47fbd07aa5fa256792360b8672e746dc345a4f7721bd2062461f4650bea4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a47fbd07aa5fa256792360b8672e746dc345a4f7721bd2062461f4650bea4aa->enter($__internal_2a47fbd07aa5fa256792360b8672e746dc345a4f7721bd2062461f4650bea4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9b915df25cef4359195d2589176e68afd05477a945674c2ef0b9c6fbb69a6392->leave($__internal_9b915df25cef4359195d2589176e68afd05477a945674c2ef0b9c6fbb69a6392_prof);

        
        $__internal_2a47fbd07aa5fa256792360b8672e746dc345a4f7721bd2062461f4650bea4aa->leave($__internal_2a47fbd07aa5fa256792360b8672e746dc345a4f7721bd2062461f4650bea4aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig", "/home/pi/www/vendor/sonata-project/admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}
