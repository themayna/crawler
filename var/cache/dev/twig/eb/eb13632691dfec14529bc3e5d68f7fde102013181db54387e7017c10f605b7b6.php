<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49aaf657b4e6121cc0f23b5f80df065fffb78a7157693ad836bbf18fdde96ba5 extends Twig_Template
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
        $__internal_488ec682e130b52776e0f8d51e400cd999c3b3fe939f199c533d366c711ab3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488ec682e130b52776e0f8d51e400cd999c3b3fe939f199c533d366c711ab3d7->enter($__internal_488ec682e130b52776e0f8d51e400cd999c3b3fe939f199c533d366c711ab3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_96b66c950c886a3ab9a6be04caf431749117fba7e6155167f63f58baa5f503f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b66c950c886a3ab9a6be04caf431749117fba7e6155167f63f58baa5f503f0->enter($__internal_96b66c950c886a3ab9a6be04caf431749117fba7e6155167f63f58baa5f503f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_488ec682e130b52776e0f8d51e400cd999c3b3fe939f199c533d366c711ab3d7->leave($__internal_488ec682e130b52776e0f8d51e400cd999c3b3fe939f199c533d366c711ab3d7_prof);

        
        $__internal_96b66c950c886a3ab9a6be04caf431749117fba7e6155167f63f58baa5f503f0->leave($__internal_96b66c950c886a3ab9a6be04caf431749117fba7e6155167f63f58baa5f503f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
