<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76e61b315397e6bbaa5a08fe26fbd4b0f52c5d35e281c2cec8ce42034285cc22 extends Twig_Template
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
        $__internal_a83d4472acf903b1c2d1af7085c5e44a9681da9f8dc20e34794e7befa23c8901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83d4472acf903b1c2d1af7085c5e44a9681da9f8dc20e34794e7befa23c8901->enter($__internal_a83d4472acf903b1c2d1af7085c5e44a9681da9f8dc20e34794e7befa23c8901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ea27e5f2b7c8d6b1ab9420e47893c0a214c08cb64ec4194973fd69ecd9fc43ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea27e5f2b7c8d6b1ab9420e47893c0a214c08cb64ec4194973fd69ecd9fc43ed->enter($__internal_ea27e5f2b7c8d6b1ab9420e47893c0a214c08cb64ec4194973fd69ecd9fc43ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a83d4472acf903b1c2d1af7085c5e44a9681da9f8dc20e34794e7befa23c8901->leave($__internal_a83d4472acf903b1c2d1af7085c5e44a9681da9f8dc20e34794e7befa23c8901_prof);

        
        $__internal_ea27e5f2b7c8d6b1ab9420e47893c0a214c08cb64ec4194973fd69ecd9fc43ed->leave($__internal_ea27e5f2b7c8d6b1ab9420e47893c0a214c08cb64ec4194973fd69ecd9fc43ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
