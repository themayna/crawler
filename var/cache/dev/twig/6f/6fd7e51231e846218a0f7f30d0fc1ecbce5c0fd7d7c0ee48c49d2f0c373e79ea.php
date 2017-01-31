<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e71d51fc44277dcd08ec3b48cc56d59e0557e681eb126acb8cbe472937f3ed9d extends Twig_Template
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
        $__internal_bc265e1c4879ff790ac2fe52b546436cc67900ec8be385b964d925357f6346b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc265e1c4879ff790ac2fe52b546436cc67900ec8be385b964d925357f6346b3->enter($__internal_bc265e1c4879ff790ac2fe52b546436cc67900ec8be385b964d925357f6346b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6be8ab619cbf4e4ecc662643af09747ad2d554176ed7ffbbd51be78b0e23e8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be8ab619cbf4e4ecc662643af09747ad2d554176ed7ffbbd51be78b0e23e8f5->enter($__internal_6be8ab619cbf4e4ecc662643af09747ad2d554176ed7ffbbd51be78b0e23e8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bc265e1c4879ff790ac2fe52b546436cc67900ec8be385b964d925357f6346b3->leave($__internal_bc265e1c4879ff790ac2fe52b546436cc67900ec8be385b964d925357f6346b3_prof);

        
        $__internal_6be8ab619cbf4e4ecc662643af09747ad2d554176ed7ffbbd51be78b0e23e8f5->leave($__internal_6be8ab619cbf4e4ecc662643af09747ad2d554176ed7ffbbd51be78b0e23e8f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
