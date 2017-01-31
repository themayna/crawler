<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8f4edfd7c699a67ca1a7ebdecae963e1b29b917bee72d01b01dfe291ad6477c1 extends Twig_Template
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
        $__internal_1672f70c7bbf0a87621620425bd8463a8fa417215605034890757bb5b5797c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1672f70c7bbf0a87621620425bd8463a8fa417215605034890757bb5b5797c10->enter($__internal_1672f70c7bbf0a87621620425bd8463a8fa417215605034890757bb5b5797c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_da00a736e643fc4d91c4fdccff09d458c70aa28d35179cdb28ece3a1bdd68b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da00a736e643fc4d91c4fdccff09d458c70aa28d35179cdb28ece3a1bdd68b7b->enter($__internal_da00a736e643fc4d91c4fdccff09d458c70aa28d35179cdb28ece3a1bdd68b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1672f70c7bbf0a87621620425bd8463a8fa417215605034890757bb5b5797c10->leave($__internal_1672f70c7bbf0a87621620425bd8463a8fa417215605034890757bb5b5797c10_prof);

        
        $__internal_da00a736e643fc4d91c4fdccff09d458c70aa28d35179cdb28ece3a1bdd68b7b->leave($__internal_da00a736e643fc4d91c4fdccff09d458c70aa28d35179cdb28ece3a1bdd68b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/pi/www/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
