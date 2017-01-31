<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d83cc7f4a67640cf4366d51d8c47dccbb3ab825c9be740072656ff100b56b62 extends Twig_Template
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
        $__internal_087cf6800ef7ddb4080e93783aed86dbf0fa4470f7db878ac4127594588811ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087cf6800ef7ddb4080e93783aed86dbf0fa4470f7db878ac4127594588811ee->enter($__internal_087cf6800ef7ddb4080e93783aed86dbf0fa4470f7db878ac4127594588811ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f93ab97c8b33bbe8af98131ace6b132e090534b65636b75f515d61f4df84a521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93ab97c8b33bbe8af98131ace6b132e090534b65636b75f515d61f4df84a521->enter($__internal_f93ab97c8b33bbe8af98131ace6b132e090534b65636b75f515d61f4df84a521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_087cf6800ef7ddb4080e93783aed86dbf0fa4470f7db878ac4127594588811ee->leave($__internal_087cf6800ef7ddb4080e93783aed86dbf0fa4470f7db878ac4127594588811ee_prof);

        
        $__internal_f93ab97c8b33bbe8af98131ace6b132e090534b65636b75f515d61f4df84a521->leave($__internal_f93ab97c8b33bbe8af98131ace6b132e090534b65636b75f515d61f4df84a521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
