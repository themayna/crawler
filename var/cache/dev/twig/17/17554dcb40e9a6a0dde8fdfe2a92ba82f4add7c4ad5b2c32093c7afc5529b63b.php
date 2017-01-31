<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_99d32c8bc8dabb7ef17730fbafe84a0dc5e1ffc15ed455185271c7f201eb9d29 extends Twig_Template
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
        $__internal_ee6deb09b8897f14e8e6259bdd94a547981a85b96adbbef727117b02184f59c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6deb09b8897f14e8e6259bdd94a547981a85b96adbbef727117b02184f59c4->enter($__internal_ee6deb09b8897f14e8e6259bdd94a547981a85b96adbbef727117b02184f59c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a00c68a2186b65fb72841d7654756cf2857bcc6aa8692f7281100705ab971778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00c68a2186b65fb72841d7654756cf2857bcc6aa8692f7281100705ab971778->enter($__internal_a00c68a2186b65fb72841d7654756cf2857bcc6aa8692f7281100705ab971778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ee6deb09b8897f14e8e6259bdd94a547981a85b96adbbef727117b02184f59c4->leave($__internal_ee6deb09b8897f14e8e6259bdd94a547981a85b96adbbef727117b02184f59c4_prof);

        
        $__internal_a00c68a2186b65fb72841d7654756cf2857bcc6aa8692f7281100705ab971778->leave($__internal_a00c68a2186b65fb72841d7654756cf2857bcc6aa8692f7281100705ab971778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
