<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b9bc5e6949cf687e112dc306ab9355c199d7cd7d89ea38462bc9381124e8050e extends Twig_Template
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
        $__internal_3afb68aa45ac2741199a30dd6d1a0acde1a80d40ad4897113508794af198d6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afb68aa45ac2741199a30dd6d1a0acde1a80d40ad4897113508794af198d6cf->enter($__internal_3afb68aa45ac2741199a30dd6d1a0acde1a80d40ad4897113508794af198d6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_418861bae46a175be4287f6db4174372a5403b4771776067fd8636bbacefdc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418861bae46a175be4287f6db4174372a5403b4771776067fd8636bbacefdc21->enter($__internal_418861bae46a175be4287f6db4174372a5403b4771776067fd8636bbacefdc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3afb68aa45ac2741199a30dd6d1a0acde1a80d40ad4897113508794af198d6cf->leave($__internal_3afb68aa45ac2741199a30dd6d1a0acde1a80d40ad4897113508794af198d6cf_prof);

        
        $__internal_418861bae46a175be4287f6db4174372a5403b4771776067fd8636bbacefdc21->leave($__internal_418861bae46a175be4287f6db4174372a5403b4771776067fd8636bbacefdc21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
