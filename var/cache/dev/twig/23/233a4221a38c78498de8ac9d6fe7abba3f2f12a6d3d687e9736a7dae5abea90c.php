<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_083c5e26d3c15ab56bdcedf83a767c6a394074d8726cb70eb68955acbfe30803 extends Twig_Template
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
        $__internal_6f10767532b932b6f410e9778fa94e534020df977c343dbf19df7d119dd556e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f10767532b932b6f410e9778fa94e534020df977c343dbf19df7d119dd556e7->enter($__internal_6f10767532b932b6f410e9778fa94e534020df977c343dbf19df7d119dd556e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a4b105a2cd9dfc71546688fbe5fe6d24202e179cf8151a3029296210e35e74dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b105a2cd9dfc71546688fbe5fe6d24202e179cf8151a3029296210e35e74dc->enter($__internal_a4b105a2cd9dfc71546688fbe5fe6d24202e179cf8151a3029296210e35e74dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6f10767532b932b6f410e9778fa94e534020df977c343dbf19df7d119dd556e7->leave($__internal_6f10767532b932b6f410e9778fa94e534020df977c343dbf19df7d119dd556e7_prof);

        
        $__internal_a4b105a2cd9dfc71546688fbe5fe6d24202e179cf8151a3029296210e35e74dc->leave($__internal_a4b105a2cd9dfc71546688fbe5fe6d24202e179cf8151a3029296210e35e74dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
