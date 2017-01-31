<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0928880b95e6e41bc8da2a66a3fe74aa0f108b47cfd43b1fd15bb63604602d7 extends Twig_Template
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
        $__internal_1f53cec9d84e4d8f0dfd40b51aba04cf30f52c99077eb56f541a4c67782aaf7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f53cec9d84e4d8f0dfd40b51aba04cf30f52c99077eb56f541a4c67782aaf7f->enter($__internal_1f53cec9d84e4d8f0dfd40b51aba04cf30f52c99077eb56f541a4c67782aaf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_29003874dd95991af47e54682c2aaf48fb2ee45bdb66fea3eb1ae00f15d807a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29003874dd95991af47e54682c2aaf48fb2ee45bdb66fea3eb1ae00f15d807a9->enter($__internal_29003874dd95991af47e54682c2aaf48fb2ee45bdb66fea3eb1ae00f15d807a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1f53cec9d84e4d8f0dfd40b51aba04cf30f52c99077eb56f541a4c67782aaf7f->leave($__internal_1f53cec9d84e4d8f0dfd40b51aba04cf30f52c99077eb56f541a4c67782aaf7f_prof);

        
        $__internal_29003874dd95991af47e54682c2aaf48fb2ee45bdb66fea3eb1ae00f15d807a9->leave($__internal_29003874dd95991af47e54682c2aaf48fb2ee45bdb66fea3eb1ae00f15d807a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
