<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_28e705f056180ea68eb0655f43f78da599490ebd82844bec379d4e2eca0af02a extends Twig_Template
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
        $__internal_39cd771852d3388e8a385fb86b0cf9312a9752f9c2ef3e84843a8fc0fff2de19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39cd771852d3388e8a385fb86b0cf9312a9752f9c2ef3e84843a8fc0fff2de19->enter($__internal_39cd771852d3388e8a385fb86b0cf9312a9752f9c2ef3e84843a8fc0fff2de19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_aea29269baf53bd5a4d83641524ce15baa4797d84dbdc329bd6014d9601d6af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea29269baf53bd5a4d83641524ce15baa4797d84dbdc329bd6014d9601d6af3->enter($__internal_aea29269baf53bd5a4d83641524ce15baa4797d84dbdc329bd6014d9601d6af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_39cd771852d3388e8a385fb86b0cf9312a9752f9c2ef3e84843a8fc0fff2de19->leave($__internal_39cd771852d3388e8a385fb86b0cf9312a9752f9c2ef3e84843a8fc0fff2de19_prof);

        
        $__internal_aea29269baf53bd5a4d83641524ce15baa4797d84dbdc329bd6014d9601d6af3->leave($__internal_aea29269baf53bd5a4d83641524ce15baa4797d84dbdc329bd6014d9601d6af3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
