<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_928b65361d976b567f694af5f7337a0c3a855e3669ed393679b0f7fb05e6f7d3 extends Twig_Template
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
        $__internal_f4bfc5aeb8430ef30b7ce076e24be393bb5cbac184fe55d0386f3f2c2b6515f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bfc5aeb8430ef30b7ce076e24be393bb5cbac184fe55d0386f3f2c2b6515f1->enter($__internal_f4bfc5aeb8430ef30b7ce076e24be393bb5cbac184fe55d0386f3f2c2b6515f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cbe28711de94ecaf3ec3962fd0f2ab6e0da6ff948c1c934b7dba87f843fc10f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe28711de94ecaf3ec3962fd0f2ab6e0da6ff948c1c934b7dba87f843fc10f5->enter($__internal_cbe28711de94ecaf3ec3962fd0f2ab6e0da6ff948c1c934b7dba87f843fc10f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f4bfc5aeb8430ef30b7ce076e24be393bb5cbac184fe55d0386f3f2c2b6515f1->leave($__internal_f4bfc5aeb8430ef30b7ce076e24be393bb5cbac184fe55d0386f3f2c2b6515f1_prof);

        
        $__internal_cbe28711de94ecaf3ec3962fd0f2ab6e0da6ff948c1c934b7dba87f843fc10f5->leave($__internal_cbe28711de94ecaf3ec3962fd0f2ab6e0da6ff948c1c934b7dba87f843fc10f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
