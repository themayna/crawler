<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_25c65161d004ec50794a849170338c34132a0bb32e472a9a6fdca51f023bbad2 extends Twig_Template
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
        $__internal_539ea6b567f06e0e0ead0d909b66e9ae38d5cb68dacc33f86d95bba6620c1ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539ea6b567f06e0e0ead0d909b66e9ae38d5cb68dacc33f86d95bba6620c1ca9->enter($__internal_539ea6b567f06e0e0ead0d909b66e9ae38d5cb68dacc33f86d95bba6620c1ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_731f7b27e49df615364b3d45399c137532d6ebf6d250ad449203282007fa09f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731f7b27e49df615364b3d45399c137532d6ebf6d250ad449203282007fa09f7->enter($__internal_731f7b27e49df615364b3d45399c137532d6ebf6d250ad449203282007fa09f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_539ea6b567f06e0e0ead0d909b66e9ae38d5cb68dacc33f86d95bba6620c1ca9->leave($__internal_539ea6b567f06e0e0ead0d909b66e9ae38d5cb68dacc33f86d95bba6620c1ca9_prof);

        
        $__internal_731f7b27e49df615364b3d45399c137532d6ebf6d250ad449203282007fa09f7->leave($__internal_731f7b27e49df615364b3d45399c137532d6ebf6d250ad449203282007fa09f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
