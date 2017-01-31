<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_470ad5458cc657fa86edcbbaa9e415bf401c88dfafe211cf5ef52e972e8d51b3 extends Twig_Template
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
        $__internal_d9655c14bbbfde19159ecb6f3afc6b156cdf4bd21473f4a7f945449afcb9c14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9655c14bbbfde19159ecb6f3afc6b156cdf4bd21473f4a7f945449afcb9c14f->enter($__internal_d9655c14bbbfde19159ecb6f3afc6b156cdf4bd21473f4a7f945449afcb9c14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_42e5cb5e13c5403292379532d42eb1392d3c8457b2be3a8cb61ac921e9c9d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e5cb5e13c5403292379532d42eb1392d3c8457b2be3a8cb61ac921e9c9d5d5->enter($__internal_42e5cb5e13c5403292379532d42eb1392d3c8457b2be3a8cb61ac921e9c9d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9655c14bbbfde19159ecb6f3afc6b156cdf4bd21473f4a7f945449afcb9c14f->leave($__internal_d9655c14bbbfde19159ecb6f3afc6b156cdf4bd21473f4a7f945449afcb9c14f_prof);

        
        $__internal_42e5cb5e13c5403292379532d42eb1392d3c8457b2be3a8cb61ac921e9c9d5d5->leave($__internal_42e5cb5e13c5403292379532d42eb1392d3c8457b2be3a8cb61ac921e9c9d5d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8b2b153792e1ab761d9bece75aa05553ce600b534abaf23d4f0f9339dcb0f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b2b153792e1ab761d9bece75aa05553ce600b534abaf23d4f0f9339dcb0f09->enter($__internal_a8b2b153792e1ab761d9bece75aa05553ce600b534abaf23d4f0f9339dcb0f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c09cf8d4d728c9eb94eb988f0dfd0b65e1719ff62702cc426f197ddd187305db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09cf8d4d728c9eb94eb988f0dfd0b65e1719ff62702cc426f197ddd187305db->enter($__internal_c09cf8d4d728c9eb94eb988f0dfd0b65e1719ff62702cc426f197ddd187305db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c09cf8d4d728c9eb94eb988f0dfd0b65e1719ff62702cc426f197ddd187305db->leave($__internal_c09cf8d4d728c9eb94eb988f0dfd0b65e1719ff62702cc426f197ddd187305db_prof);

        
        $__internal_a8b2b153792e1ab761d9bece75aa05553ce600b534abaf23d4f0f9339dcb0f09->leave($__internal_a8b2b153792e1ab761d9bece75aa05553ce600b534abaf23d4f0f9339dcb0f09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_838ea0de6361c3414b0ee8e4630a91c14b65009c6f315c84ade89bc895f657af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838ea0de6361c3414b0ee8e4630a91c14b65009c6f315c84ade89bc895f657af->enter($__internal_838ea0de6361c3414b0ee8e4630a91c14b65009c6f315c84ade89bc895f657af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_834f766112b0566e5343eacd13ceb189cdb5c1222712addfd013c3c310b56df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834f766112b0566e5343eacd13ceb189cdb5c1222712addfd013c3c310b56df7->enter($__internal_834f766112b0566e5343eacd13ceb189cdb5c1222712addfd013c3c310b56df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_834f766112b0566e5343eacd13ceb189cdb5c1222712addfd013c3c310b56df7->leave($__internal_834f766112b0566e5343eacd13ceb189cdb5c1222712addfd013c3c310b56df7_prof);

        
        $__internal_838ea0de6361c3414b0ee8e4630a91c14b65009c6f315c84ade89bc895f657af->leave($__internal_838ea0de6361c3414b0ee8e4630a91c14b65009c6f315c84ade89bc895f657af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01f63138a07ba19b3bc899a495d821f1a038c9868e98bc2eaf915ecdea1498dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f63138a07ba19b3bc899a495d821f1a038c9868e98bc2eaf915ecdea1498dd->enter($__internal_01f63138a07ba19b3bc899a495d821f1a038c9868e98bc2eaf915ecdea1498dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f533ff1af0905fd4e95829001a533fdc16ba84000daeed6b9afb5a003b742a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f533ff1af0905fd4e95829001a533fdc16ba84000daeed6b9afb5a003b742a0->enter($__internal_4f533ff1af0905fd4e95829001a533fdc16ba84000daeed6b9afb5a003b742a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f533ff1af0905fd4e95829001a533fdc16ba84000daeed6b9afb5a003b742a0->leave($__internal_4f533ff1af0905fd4e95829001a533fdc16ba84000daeed6b9afb5a003b742a0_prof);

        
        $__internal_01f63138a07ba19b3bc899a495d821f1a038c9868e98bc2eaf915ecdea1498dd->leave($__internal_01f63138a07ba19b3bc899a495d821f1a038c9868e98bc2eaf915ecdea1498dd_prof);

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
