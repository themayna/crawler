<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_a663d6ea047c9d15c83e09c8c0dd70f7298c34ba327478d64a94cc78175eb207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c9078b4370c90eca0d0f7d8ae9e16e86b4670f30cd47955b69427fc1b1c6d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9078b4370c90eca0d0f7d8ae9e16e86b4670f30cd47955b69427fc1b1c6d98->enter($__internal_5c9078b4370c90eca0d0f7d8ae9e16e86b4670f30cd47955b69427fc1b1c6d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_77c7e90a904e6779f6322cc7b1e6e8949d11e2ba831272690917c4d186b396b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c7e90a904e6779f6322cc7b1e6e8949d11e2ba831272690917c4d186b396b5->enter($__internal_77c7e90a904e6779f6322cc7b1e6e8949d11e2ba831272690917c4d186b396b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_5c9078b4370c90eca0d0f7d8ae9e16e86b4670f30cd47955b69427fc1b1c6d98->leave($__internal_5c9078b4370c90eca0d0f7d8ae9e16e86b4670f30cd47955b69427fc1b1c6d98_prof);

        
        $__internal_77c7e90a904e6779f6322cc7b1e6e8949d11e2ba831272690917c4d186b396b5->leave($__internal_77c7e90a904e6779f6322cc7b1e6e8949d11e2ba831272690917c4d186b396b5_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_9f6d1d8b17075b2c72f335c775d012f744805a248088a273b87dc16d5900abef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6d1d8b17075b2c72f335c775d012f744805a248088a273b87dc16d5900abef->enter($__internal_9f6d1d8b17075b2c72f335c775d012f744805a248088a273b87dc16d5900abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_4589762c0549f667652d2d57d9b1832cdd532169b3b0884791a6fe7224cd3acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4589762c0549f667652d2d57d9b1832cdd532169b3b0884791a6fe7224cd3acd->enter($__internal_4589762c0549f667652d2d57d9b1832cdd532169b3b0884791a6fe7224cd3acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 4
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "              method=\"POST\"
              ";
            // line 17
            if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 19
            echo "              >

            ";
            // line 21
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 23
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 26
            echo "
            ";
            // line 27
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 59
            echo "
            ";
            // line 60
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 63
            echo "
            ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 66
            $this->displayBlock('formactions', $context, $blocks);
            // line 110
            echo "        </form>
    ";
        }
        // line 112
        echo "
    ";
        // line 113
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_4589762c0549f667652d2d57d9b1832cdd532169b3b0884791a6fe7224cd3acd->leave($__internal_4589762c0549f667652d2d57d9b1832cdd532169b3b0884791a6fe7224cd3acd_prof);

        
        $__internal_9f6d1d8b17075b2c72f335c775d012f744805a248088a273b87dc16d5900abef->leave($__internal_9f6d1d8b17075b2c72f335c775d012f744805a248088a273b87dc16d5900abef_prof);

    }

    // line 14
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_411e84fa742dddac6e6df7156f2eb4a53292e8f11c1a82948611f653fb893abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411e84fa742dddac6e6df7156f2eb4a53292e8f11c1a82948611f653fb893abd->enter($__internal_411e84fa742dddac6e6df7156f2eb4a53292e8f11c1a82948611f653fb893abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_31e0cdcb584e17c5392bc7844b5811d262341fbf3313248cb5c4436915d37ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e0cdcb584e17c5392bc7844b5811d262341fbf3313248cb5c4436915d37ad0->enter($__internal_31e0cdcb584e17c5392bc7844b5811d262341fbf3313248cb5c4436915d37ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_31e0cdcb584e17c5392bc7844b5811d262341fbf3313248cb5c4436915d37ad0->leave($__internal_31e0cdcb584e17c5392bc7844b5811d262341fbf3313248cb5c4436915d37ad0_prof);

        
        $__internal_411e84fa742dddac6e6df7156f2eb4a53292e8f11c1a82948611f653fb893abd->leave($__internal_411e84fa742dddac6e6df7156f2eb4a53292e8f11c1a82948611f653fb893abd_prof);

    }

    // line 18
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_364764a33d752e08d32bbc14d45d3fe4c385fd354d6e7c1052c02e2ec0149b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364764a33d752e08d32bbc14d45d3fe4c385fd354d6e7c1052c02e2ec0149b1d->enter($__internal_364764a33d752e08d32bbc14d45d3fe4c385fd354d6e7c1052c02e2ec0149b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_ce665d73ba43ec2c7ab02fc4b144290498acf4520b1e0cf4d0a57d0488c7395f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce665d73ba43ec2c7ab02fc4b144290498acf4520b1e0cf4d0a57d0488c7395f->enter($__internal_ce665d73ba43ec2c7ab02fc4b144290498acf4520b1e0cf4d0a57d0488c7395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_ce665d73ba43ec2c7ab02fc4b144290498acf4520b1e0cf4d0a57d0488c7395f->leave($__internal_ce665d73ba43ec2c7ab02fc4b144290498acf4520b1e0cf4d0a57d0488c7395f_prof);

        
        $__internal_364764a33d752e08d32bbc14d45d3fe4c385fd354d6e7c1052c02e2ec0149b1d->leave($__internal_364764a33d752e08d32bbc14d45d3fe4c385fd354d6e7c1052c02e2ec0149b1d_prof);

    }

    // line 23
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_04ad403a36e67ee1d239b36eb5028e6ac88f4ad515fa3c7962e5c6eef3fe4889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ad403a36e67ee1d239b36eb5028e6ac88f4ad515fa3c7962e5c6eef3fe4889->enter($__internal_04ad403a36e67ee1d239b36eb5028e6ac88f4ad515fa3c7962e5c6eef3fe4889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_3ec290c6c13c649ce778c63c9d127f4732ffcbdcdd84c54432a5ac091e9e6976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec290c6c13c649ce778c63c9d127f4732ffcbdcdd84c54432a5ac091e9e6976->enter($__internal_3ec290c6c13c649ce778c63c9d127f4732ffcbdcdd84c54432a5ac091e9e6976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 24
        echo "                <div class=\"row\">
            ";
        
        $__internal_3ec290c6c13c649ce778c63c9d127f4732ffcbdcdd84c54432a5ac091e9e6976->leave($__internal_3ec290c6c13c649ce778c63c9d127f4732ffcbdcdd84c54432a5ac091e9e6976_prof);

        
        $__internal_04ad403a36e67ee1d239b36eb5028e6ac88f4ad515fa3c7962e5c6eef3fe4889->leave($__internal_04ad403a36e67ee1d239b36eb5028e6ac88f4ad515fa3c7962e5c6eef3fe4889_prof);

    }

    // line 27
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_785ae32e98a0f1ca4984e8d01de70914293d0c15905997d5a510cfee2d6156e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785ae32e98a0f1ca4984e8d01de70914293d0c15905997d5a510cfee2d6156e6->enter($__internal_785ae32e98a0f1ca4984e8d01de70914293d0c15905997d5a510cfee2d6156e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_805d61adca5345b42309f1283e81a18ed1cafcc5b6a8bc93858138d4ea52fa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d61adca5345b42309f1283e81a18ed1cafcc5b6a8bc93858138d4ea52fa74->enter($__internal_805d61adca5345b42309f1283e81a18ed1cafcc5b6a8bc93858138d4ea52fa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 28
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 29
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 31
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 32
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 35
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 40
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 43
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 44
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 46
                echo "
                                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_helper"]) ? $context["form_helper"] : $this->getContext($context, "form_helper")), "render_groups", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 2 => $this->getAttribute($context["form_tab"], "groups", array(), "array"), 3 => (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))), "method"), "html", null, true);
                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 55
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_helper"]) ? $context["form_helper"] : $this->getContext($context, "form_helper")), "render_groups", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), 3 => (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))), "method"), "html", null, true);
            echo "
                    ";
        }
        // line 57
        echo "                </div>
            ";
        
        $__internal_805d61adca5345b42309f1283e81a18ed1cafcc5b6a8bc93858138d4ea52fa74->leave($__internal_805d61adca5345b42309f1283e81a18ed1cafcc5b6a8bc93858138d4ea52fa74_prof);

        
        $__internal_785ae32e98a0f1ca4984e8d01de70914293d0c15905997d5a510cfee2d6156e6->leave($__internal_785ae32e98a0f1ca4984e8d01de70914293d0c15905997d5a510cfee2d6156e6_prof);

    }

    // line 60
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_eed9c7f91fea36d35e26d51a5aab370f38b0735c650a914c276ca4d86818a0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed9c7f91fea36d35e26d51a5aab370f38b0735c650a914c276ca4d86818a0b1->enter($__internal_eed9c7f91fea36d35e26d51a5aab370f38b0735c650a914c276ca4d86818a0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_acda7ad7d5d099a816bac8e3606095ed750c19f8d17adf21fbc42b7c5ccabd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acda7ad7d5d099a816bac8e3606095ed750c19f8d17adf21fbc42b7c5ccabd74->enter($__internal_acda7ad7d5d099a816bac8e3606095ed750c19f8d17adf21fbc42b7c5ccabd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 61
        echo "                </div>
            ";
        
        $__internal_acda7ad7d5d099a816bac8e3606095ed750c19f8d17adf21fbc42b7c5ccabd74->leave($__internal_acda7ad7d5d099a816bac8e3606095ed750c19f8d17adf21fbc42b7c5ccabd74_prof);

        
        $__internal_eed9c7f91fea36d35e26d51a5aab370f38b0735c650a914c276ca4d86818a0b1->leave($__internal_eed9c7f91fea36d35e26d51a5aab370f38b0735c650a914c276ca4d86818a0b1_prof);

    }

    // line 66
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_f9d821adcdc978521d38b2d2e5f1447420db92e036047ff629ce20120ececbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d821adcdc978521d38b2d2e5f1447420db92e036047ff629ce20120ececbe2->enter($__internal_f9d821adcdc978521d38b2d2e5f1447420db92e036047ff629ce20120ececbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_9584dfad9c98f02c09a4fd30b33ea3a63115c3b18fb1aa7d8d2e7a152261f2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9584dfad9c98f02c09a4fd30b33ea3a63115c3b18fb1aa7d8d2e7a152261f2d8->enter($__internal_9584dfad9c98f02c09a4fd30b33ea3a63115c3b18fb1aa7d8d2e7a152261f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 67
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 68
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 108
        echo "                </div>
            ";
        
        $__internal_9584dfad9c98f02c09a4fd30b33ea3a63115c3b18fb1aa7d8d2e7a152261f2d8->leave($__internal_9584dfad9c98f02c09a4fd30b33ea3a63115c3b18fb1aa7d8d2e7a152261f2d8_prof);

        
        $__internal_f9d821adcdc978521d38b2d2e5f1447420db92e036047ff629ce20120ececbe2->leave($__internal_f9d821adcdc978521d38b2d2e5f1447420db92e036047ff629ce20120ececbe2_prof);

    }

    // line 68
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_459aef0a92bc34de237ffa675c440d56014fbea8a119ec5a72331ce0ff1ff52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459aef0a92bc34de237ffa675c440d56014fbea8a119ec5a72331ce0ff1ff52e->enter($__internal_459aef0a92bc34de237ffa675c440d56014fbea8a119ec5a72331ce0ff1ff52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_973f738e6acfb7d98d2a951e93d71eea7584965f4f706e7528660039c35b143d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973f738e6acfb7d98d2a951e93d71eea7584965f4f706e7528660039c35b143d->enter($__internal_973f738e6acfb7d98d2a951e93d71eea7584965f4f706e7528660039c35b143d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 69
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 70
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 71
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 73
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 75
            echo "                    ";
        } else {
            // line 76
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 77
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 82
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 85
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 86
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 88
                echo "
                            ";
                // line 89
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 90
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 93
                echo "
                            ";
                // line 94
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 95
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 97
                echo "                        ";
            } else {
                // line 98
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 99
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 101
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 102
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 104
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 106
            echo "                    ";
        }
        // line 107
        echo "                ";
        
        $__internal_973f738e6acfb7d98d2a951e93d71eea7584965f4f706e7528660039c35b143d->leave($__internal_973f738e6acfb7d98d2a951e93d71eea7584965f4f706e7528660039c35b143d_prof);

        
        $__internal_459aef0a92bc34de237ffa675c440d56014fbea8a119ec5a72331ce0ff1ff52e->leave($__internal_459aef0a92bc34de237ffa675c440d56014fbea8a119ec5a72331ce0ff1ff52e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  522 => 107,  519 => 106,  513 => 104,  507 => 102,  504 => 101,  498 => 99,  495 => 98,  492 => 97,  484 => 95,  482 => 94,  479 => 93,  472 => 91,  467 => 90,  465 => 89,  462 => 88,  456 => 86,  454 => 85,  448 => 83,  445 => 82,  439 => 79,  435 => 77,  432 => 76,  429 => 75,  423 => 73,  417 => 71,  414 => 70,  411 => 69,  402 => 68,  391 => 108,  389 => 68,  386 => 67,  377 => 66,  366 => 61,  357 => 60,  346 => 57,  340 => 55,  335 => 52,  316 => 47,  313 => 46,  307 => 44,  305 => 43,  292 => 40,  275 => 39,  271 => 37,  246 => 35,  229 => 34,  225 => 32,  223 => 31,  219 => 29,  216 => 28,  207 => 27,  196 => 24,  187 => 23,  170 => 18,  152 => 14,  139 => 113,  136 => 112,  132 => 110,  130 => 66,  125 => 64,  122 => 63,  120 => 60,  117 => 59,  115 => 27,  112 => 26,  110 => 23,  105 => 21,  101 => 19,  98 => 18,  94 => 17,  91 => 16,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  67 => 8,  64 => 7,  62 => 6,  59 => 5,  57 => 4,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {% set url = admin.id(object) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ name|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasroute('delete') and admin.isGranted('DELETE', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasroute('acl') and admin.isGranted('MASTER', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.isGranted('EDIT') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "/home/pi/www/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
