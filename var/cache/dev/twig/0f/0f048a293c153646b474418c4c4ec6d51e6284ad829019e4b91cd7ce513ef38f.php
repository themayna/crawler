<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b5fa16348afc5b8545b052f0bf678f4e5e9b262b5c2282a9c02546ca5f0965c2 extends Twig_Template
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
        $__internal_74692183f1678e109dc34c06fade09d70241289f28a23383ded876e1405ee475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74692183f1678e109dc34c06fade09d70241289f28a23383ded876e1405ee475->enter($__internal_74692183f1678e109dc34c06fade09d70241289f28a23383ded876e1405ee475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_24aae3a33ddd1ce4a131f9f3f6b68a1ff502cdf0368f0fbde30895038a81cf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24aae3a33ddd1ce4a131f9f3f6b68a1ff502cdf0368f0fbde30895038a81cf2c->enter($__internal_24aae3a33ddd1ce4a131f9f3f6b68a1ff502cdf0368f0fbde30895038a81cf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_74692183f1678e109dc34c06fade09d70241289f28a23383ded876e1405ee475->leave($__internal_74692183f1678e109dc34c06fade09d70241289f28a23383ded876e1405ee475_prof);

        
        $__internal_24aae3a33ddd1ce4a131f9f3f6b68a1ff502cdf0368f0fbde30895038a81cf2c->leave($__internal_24aae3a33ddd1ce4a131f9f3f6b68a1ff502cdf0368f0fbde30895038a81cf2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
