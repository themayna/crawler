<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69cf6b7f9b21e9d842ced26bc026bf699bdc0c47fe259b630483cedeafbac227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cf6b7f9b21e9d842ced26bc026bf699bdc0c47fe259b630483cedeafbac227->enter($__internal_69cf6b7f9b21e9d842ced26bc026bf699bdc0c47fe259b630483cedeafbac227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bf0d1b50fa89d51d79762d51594e77b2b6aac197bc86ec6f7a45b7ed1072db11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0d1b50fa89d51d79762d51594e77b2b6aac197bc86ec6f7a45b7ed1072db11->enter($__internal_bf0d1b50fa89d51d79762d51594e77b2b6aac197bc86ec6f7a45b7ed1072db11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_69cf6b7f9b21e9d842ced26bc026bf699bdc0c47fe259b630483cedeafbac227->leave($__internal_69cf6b7f9b21e9d842ced26bc026bf699bdc0c47fe259b630483cedeafbac227_prof);

        
        $__internal_bf0d1b50fa89d51d79762d51594e77b2b6aac197bc86ec6f7a45b7ed1072db11->leave($__internal_bf0d1b50fa89d51d79762d51594e77b2b6aac197bc86ec6f7a45b7ed1072db11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7d97342ce00c4684aad3246a3cd7c84041355711974ec42967620d8b24c8136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d97342ce00c4684aad3246a3cd7c84041355711974ec42967620d8b24c8136->enter($__internal_f7d97342ce00c4684aad3246a3cd7c84041355711974ec42967620d8b24c8136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_595ad3d82a50c1b84d9faface3aa48e98db5ad98e0c3e289c178bbd005861ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595ad3d82a50c1b84d9faface3aa48e98db5ad98e0c3e289c178bbd005861ab9->enter($__internal_595ad3d82a50c1b84d9faface3aa48e98db5ad98e0c3e289c178bbd005861ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_595ad3d82a50c1b84d9faface3aa48e98db5ad98e0c3e289c178bbd005861ab9->leave($__internal_595ad3d82a50c1b84d9faface3aa48e98db5ad98e0c3e289c178bbd005861ab9_prof);

        
        $__internal_f7d97342ce00c4684aad3246a3cd7c84041355711974ec42967620d8b24c8136->leave($__internal_f7d97342ce00c4684aad3246a3cd7c84041355711974ec42967620d8b24c8136_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0bcd790be86091c59666d8331cd1b165b46b12b8f6dfcaf8e583f33376cf8799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcd790be86091c59666d8331cd1b165b46b12b8f6dfcaf8e583f33376cf8799->enter($__internal_0bcd790be86091c59666d8331cd1b165b46b12b8f6dfcaf8e583f33376cf8799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c4988941093f98051923de06cea25095c0d94d9baac975b9da1c06618499c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4988941093f98051923de06cea25095c0d94d9baac975b9da1c06618499c17->enter($__internal_1c4988941093f98051923de06cea25095c0d94d9baac975b9da1c06618499c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c4988941093f98051923de06cea25095c0d94d9baac975b9da1c06618499c17->leave($__internal_1c4988941093f98051923de06cea25095c0d94d9baac975b9da1c06618499c17_prof);

        
        $__internal_0bcd790be86091c59666d8331cd1b165b46b12b8f6dfcaf8e583f33376cf8799->leave($__internal_0bcd790be86091c59666d8331cd1b165b46b12b8f6dfcaf8e583f33376cf8799_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_08979b9c140ce25af49903d0fca9b398c2c4ef9d4caefadaecaaabe22b450e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08979b9c140ce25af49903d0fca9b398c2c4ef9d4caefadaecaaabe22b450e92->enter($__internal_08979b9c140ce25af49903d0fca9b398c2c4ef9d4caefadaecaaabe22b450e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_155dc4da20c9c0ea5efd189ab81cfe14f2acdffd91355ae8514003ec89728dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155dc4da20c9c0ea5efd189ab81cfe14f2acdffd91355ae8514003ec89728dde->enter($__internal_155dc4da20c9c0ea5efd189ab81cfe14f2acdffd91355ae8514003ec89728dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_155dc4da20c9c0ea5efd189ab81cfe14f2acdffd91355ae8514003ec89728dde->leave($__internal_155dc4da20c9c0ea5efd189ab81cfe14f2acdffd91355ae8514003ec89728dde_prof);

        
        $__internal_08979b9c140ce25af49903d0fca9b398c2c4ef9d4caefadaecaaabe22b450e92->leave($__internal_08979b9c140ce25af49903d0fca9b398c2c4ef9d4caefadaecaaabe22b450e92_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5c76f8d637e929dbf958033abde66995307800cb9117ffacacbd834625ccdcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c76f8d637e929dbf958033abde66995307800cb9117ffacacbd834625ccdcb->enter($__internal_b5c76f8d637e929dbf958033abde66995307800cb9117ffacacbd834625ccdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ecb7963b0690751a9e5952262bb06814519f6cc02b9b607514992488bc25d68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb7963b0690751a9e5952262bb06814519f6cc02b9b607514992488bc25d68a->enter($__internal_ecb7963b0690751a9e5952262bb06814519f6cc02b9b607514992488bc25d68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ecb7963b0690751a9e5952262bb06814519f6cc02b9b607514992488bc25d68a->leave($__internal_ecb7963b0690751a9e5952262bb06814519f6cc02b9b607514992488bc25d68a_prof);

        
        $__internal_b5c76f8d637e929dbf958033abde66995307800cb9117ffacacbd834625ccdcb->leave($__internal_b5c76f8d637e929dbf958033abde66995307800cb9117ffacacbd834625ccdcb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/pi/www/app/Resources/views/base.html.twig");
    }
}
