<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_d8ea75b6c2d377aba41203b1a18c3f8f94d4c3343678b1ba705a4fd690930e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_295d759655db116428ebc8e99e65e8dd38871daaaaf03a198383f433f5012683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295d759655db116428ebc8e99e65e8dd38871daaaaf03a198383f433f5012683->enter($__internal_295d759655db116428ebc8e99e65e8dd38871daaaaf03a198383f433f5012683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_21f93d1b30890dff8a32600bc7118beb199da1faede3f2fb57a90cf254e86e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f93d1b30890dff8a32600bc7118beb199da1faede3f2fb57a90cf254e86e57->enter($__internal_21f93d1b30890dff8a32600bc7118beb199da1faede3f2fb57a90cf254e86e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_295d759655db116428ebc8e99e65e8dd38871daaaaf03a198383f433f5012683->leave($__internal_295d759655db116428ebc8e99e65e8dd38871daaaaf03a198383f433f5012683_prof);

        
        $__internal_21f93d1b30890dff8a32600bc7118beb199da1faede3f2fb57a90cf254e86e57->leave($__internal_21f93d1b30890dff8a32600bc7118beb199da1faede3f2fb57a90cf254e86e57_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/home/pi/www/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
