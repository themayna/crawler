<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_71bebd6b020a05f151cf140392e2b64f00c0c93947f29cc03338ff170739e2b4 extends Twig_Template
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
        $__internal_a96ba15bf519b9e95bcec3aaf223ac0dc117b67b92aa6da24950305ffc480e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96ba15bf519b9e95bcec3aaf223ac0dc117b67b92aa6da24950305ffc480e35->enter($__internal_a96ba15bf519b9e95bcec3aaf223ac0dc117b67b92aa6da24950305ffc480e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e61773e21df33925b6f6754486bb17e9a93b085376d588b717d0f6697411df3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61773e21df33925b6f6754486bb17e9a93b085376d588b717d0f6697411df3a->enter($__internal_e61773e21df33925b6f6754486bb17e9a93b085376d588b717d0f6697411df3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a96ba15bf519b9e95bcec3aaf223ac0dc117b67b92aa6da24950305ffc480e35->leave($__internal_a96ba15bf519b9e95bcec3aaf223ac0dc117b67b92aa6da24950305ffc480e35_prof);

        
        $__internal_e61773e21df33925b6f6754486bb17e9a93b085376d588b717d0f6697411df3a->leave($__internal_e61773e21df33925b6f6754486bb17e9a93b085376d588b717d0f6697411df3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
