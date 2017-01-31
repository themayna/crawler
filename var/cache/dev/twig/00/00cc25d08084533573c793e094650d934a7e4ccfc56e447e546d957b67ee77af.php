<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_05df047184e4785d4cd18dc0cd190470ac7181e2abe31e0e8bb84410d5831618 extends Twig_Template
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
        $__internal_1d44e5d546a934bd7707576f6de4342e5f6b6062882b6d15eec09a31fe9e72b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d44e5d546a934bd7707576f6de4342e5f6b6062882b6d15eec09a31fe9e72b3->enter($__internal_1d44e5d546a934bd7707576f6de4342e5f6b6062882b6d15eec09a31fe9e72b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8b7e7760410da59d0b3e04b51a024521d1c1011514f5090fe7c41a1829561f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7e7760410da59d0b3e04b51a024521d1c1011514f5090fe7c41a1829561f2a->enter($__internal_8b7e7760410da59d0b3e04b51a024521d1c1011514f5090fe7c41a1829561f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1d44e5d546a934bd7707576f6de4342e5f6b6062882b6d15eec09a31fe9e72b3->leave($__internal_1d44e5d546a934bd7707576f6de4342e5f6b6062882b6d15eec09a31fe9e72b3_prof);

        
        $__internal_8b7e7760410da59d0b3e04b51a024521d1c1011514f5090fe7c41a1829561f2a->leave($__internal_8b7e7760410da59d0b3e04b51a024521d1c1011514f5090fe7c41a1829561f2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
