<?php

/* SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_846f885762cd8ae3b25a4a24c5b9b80f7a1453ac92662b823ff036835033194d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 13);
        $this->blocks = array(
            'sonata_admin_mongo_one_widget' => array($this, 'block_sonata_admin_mongo_one_widget'),
            'sonata_admin_mongo_many_widget' => array($this, 'block_sonata_admin_mongo_many_widget'),
            'sonata_admin_mongo_collection' => array($this, 'block_sonata_admin_mongo_collection'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b00131b0a478653a04fca6cd791b3ded4f709e5748a8b637029261d06430128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b00131b0a478653a04fca6cd791b3ded4f709e5748a8b637029261d06430128->enter($__internal_6b00131b0a478653a04fca6cd791b3ded4f709e5748a8b637029261d06430128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_cae5a046a4e733988437bb518dfff90788e18a28fde01924bfd0a16805adb655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae5a046a4e733988437bb518dfff90788e18a28fde01924bfd0a16805adb655->enter($__internal_cae5a046a4e733988437bb518dfff90788e18a28fde01924bfd0a16805adb655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b00131b0a478653a04fca6cd791b3ded4f709e5748a8b637029261d06430128->leave($__internal_6b00131b0a478653a04fca6cd791b3ded4f709e5748a8b637029261d06430128_prof);

        
        $__internal_cae5a046a4e733988437bb518dfff90788e18a28fde01924bfd0a16805adb655->leave($__internal_cae5a046a4e733988437bb518dfff90788e18a28fde01924bfd0a16805adb655_prof);

    }

    // line 17
    public function block_sonata_admin_mongo_one_widget($context, array $blocks = array())
    {
        $__internal_c996832264328a730fe9638127b206a314732c44feb717c37ffd741217427660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c996832264328a730fe9638127b206a314732c44feb717c37ffd741217427660->enter($__internal_c996832264328a730fe9638127b206a314732c44feb717c37ffd741217427660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_one_widget"));

        $__internal_4bce02add5265d811cabbf9dda9602816420f2cc73dcc6436dde62af9739b2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bce02add5265d811cabbf9dda9602816420f2cc73dcc6436dde62af9739b2f0->enter($__internal_4bce02add5265d811cabbf9dda9602816420f2cc73dcc6436dde62af9739b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_one_widget"));

        // line 18
        echo "    ";
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 18)->display($context);
        
        $__internal_4bce02add5265d811cabbf9dda9602816420f2cc73dcc6436dde62af9739b2f0->leave($__internal_4bce02add5265d811cabbf9dda9602816420f2cc73dcc6436dde62af9739b2f0_prof);

        
        $__internal_c996832264328a730fe9638127b206a314732c44feb717c37ffd741217427660->leave($__internal_c996832264328a730fe9638127b206a314732c44feb717c37ffd741217427660_prof);

    }

    // line 21
    public function block_sonata_admin_mongo_many_widget($context, array $blocks = array())
    {
        $__internal_740186371dd6a4d14e9652289494761284b07d591378d5d106dd65fd396f5774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740186371dd6a4d14e9652289494761284b07d591378d5d106dd65fd396f5774->enter($__internal_740186371dd6a4d14e9652289494761284b07d591378d5d106dd65fd396f5774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_many_widget"));

        $__internal_ae7f28a69bc3ed548ae02ad83fb5fcf3a36af7f50ce6c3f94c5868cea077932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7f28a69bc3ed548ae02ad83fb5fcf3a36af7f50ce6c3f94c5868cea077932c->enter($__internal_ae7f28a69bc3ed548ae02ad83fb5fcf3a36af7f50ce6c3f94c5868cea077932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_many_widget"));

        // line 22
        echo "    ";
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 22)->display($context);
        
        $__internal_ae7f28a69bc3ed548ae02ad83fb5fcf3a36af7f50ce6c3f94c5868cea077932c->leave($__internal_ae7f28a69bc3ed548ae02ad83fb5fcf3a36af7f50ce6c3f94c5868cea077932c_prof);

        
        $__internal_740186371dd6a4d14e9652289494761284b07d591378d5d106dd65fd396f5774->leave($__internal_740186371dd6a4d14e9652289494761284b07d591378d5d106dd65fd396f5774_prof);

    }

    // line 25
    public function block_sonata_admin_mongo_collection($context, array $blocks = array())
    {
        $__internal_7cd76241d40584a6febf2e8a75f3a2b3cf9a32fd15ea0f4412cd3a020f587b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd76241d40584a6febf2e8a75f3a2b3cf9a32fd15ea0f4412cd3a020f587b93->enter($__internal_7cd76241d40584a6febf2e8a75f3a2b3cf9a32fd15ea0f4412cd3a020f587b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_collection"));

        $__internal_f008b0228a48bcdd90b438f8e692cbfa105910ecbfe5451709316d84a0adfdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f008b0228a48bcdd90b438f8e692cbfa105910ecbfe5451709316d84a0adfdc4->enter($__internal_f008b0228a48bcdd90b438f8e692cbfa105910ecbfe5451709316d84a0adfdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_collection"));

        // line 26
        echo "    ";
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_collection.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 26)->display($context);
        
        $__internal_f008b0228a48bcdd90b438f8e692cbfa105910ecbfe5451709316d84a0adfdc4->leave($__internal_f008b0228a48bcdd90b438f8e692cbfa105910ecbfe5451709316d84a0adfdc4_prof);

        
        $__internal_7cd76241d40584a6febf2e8a75f3a2b3cf9a32fd15ea0f4412cd3a020f587b93->leave($__internal_7cd76241d40584a6febf2e8a75f3a2b3cf9a32fd15ea0f4412cd3a020f587b93_prof);

    }

    // line 29
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_46e13be2522114fd537ba160aba2cec19521a83a6c5ee2e7b84d9ca5225e0cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e13be2522114fd537ba160aba2cec19521a83a6c5ee2e7b84d9ca5225e0cb5->enter($__internal_46e13be2522114fd537ba160aba2cec19521a83a6c5ee2e7b84d9ca5225e0cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        $__internal_f8b078554c41aefdc3b7efc8f203c97d68e684f4aee5409041e4de05e1512c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b078554c41aefdc3b7efc8f203c97d68e684f4aee5409041e4de05e1512c4b->enter($__internal_f8b078554c41aefdc3b7efc8f203c97d68e684f4aee5409041e4de05e1512c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 30
        echo "    ";
        // line 34
        echo "
    ";
        // line 36
        echo "
    ";
        // line 37
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 38
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 39
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "one")) {
            // line 40
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 41
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "many")) {
            // line 42
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            // line 45
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_f8b078554c41aefdc3b7efc8f203c97d68e684f4aee5409041e4de05e1512c4b->leave($__internal_f8b078554c41aefdc3b7efc8f203c97d68e684f4aee5409041e4de05e1512c4b_prof);

        
        $__internal_46e13be2522114fd537ba160aba2cec19521a83a6c5ee2e7b84d9ca5225e0cb5->leave($__internal_46e13be2522114fd537ba160aba2cec19521a83a6c5ee2e7b84d9ca5225e0cb5_prof);

    }

    // line 49
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_ce0142fd50523a0025043988e9639587d38b493df741ef4dcfe42f996011d7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0142fd50523a0025043988e9639587d38b493df741ef4dcfe42f996011d7b5->enter($__internal_ce0142fd50523a0025043988e9639587d38b493df741ef4dcfe42f996011d7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        $__internal_44205a7dd391f6f3dffc8e5778d5da5fbd54d05b87b2a1fb53993a291332e896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44205a7dd391f6f3dffc8e5778d5da5fbd54d05b87b2a1fb53993a291332e896->enter($__internal_44205a7dd391f6f3dffc8e5778d5da5fbd54d05b87b2a1fb53993a291332e896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 50
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 54
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 55
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 56
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 57
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()))));
            // line 58
            echo "
                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 60
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 64
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 67
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 68
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_list_";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       title=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 77
        echo "
                ";
        // line 78
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 79
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_add_";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-success btn-sm sonata-ba-action\"
                       title=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 88
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 91
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 92
            echo "                    <a href=\"\"
                       onclick=\"return remove_selected_element_";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-danger btn-sm sonata-ba-action\"
                       title=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 101
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 113
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_association_script.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 113)->display($context);
        
        $__internal_44205a7dd391f6f3dffc8e5778d5da5fbd54d05b87b2a1fb53993a291332e896->leave($__internal_44205a7dd391f6f3dffc8e5778d5da5fbd54d05b87b2a1fb53993a291332e896_prof);

        
        $__internal_ce0142fd50523a0025043988e9639587d38b493df741ef4dcfe42f996011d7b5->leave($__internal_ce0142fd50523a0025043988e9639587d38b493df741ef4dcfe42f996011d7b5_prof);

    }

    // line 116
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_c0ac1daab7755a973c38e27c3762ff41582bd0b26b6e60e8685d320787ce9b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ac1daab7755a973c38e27c3762ff41582bd0b26b6e60e8685d320787ce9b60->enter($__internal_c0ac1daab7755a973c38e27c3762ff41582bd0b26b6e60e8685d320787ce9b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        $__internal_1bead7fa14fd4612ea6d1d465de4c33d87dc8144525856d8798093143c9c60e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bead7fa14fd4612ea6d1d465de4c33d87dc8144525856d8798093143c9c60e1->enter($__internal_1bead7fa14fd4612ea6d1d465de4c33d87dc8144525856d8798093143c9c60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 117
        echo "    ";
        // line 118
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "one")) {
            // line 119
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 120
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "many")) {
            // line 121
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 123
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_1bead7fa14fd4612ea6d1d465de4c33d87dc8144525856d8798093143c9c60e1->leave($__internal_1bead7fa14fd4612ea6d1d465de4c33d87dc8144525856d8798093143c9c60e1_prof);

        
        $__internal_c0ac1daab7755a973c38e27c3762ff41582bd0b26b6e60e8685d320787ce9b60->leave($__internal_c0ac1daab7755a973c38e27c3762ff41582bd0b26b6e60e8685d320787ce9b60_prof);

    }

    // line 127
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_01b23d5942f5e9fa141ab854b4573c648844e28b3e5578c50f4b6c4ec796f03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b23d5942f5e9fa141ab854b4573c648844e28b3e5578c50f4b6c4ec796f03e->enter($__internal_01b23d5942f5e9fa141ab854b4573c648844e28b3e5578c50f4b6c4ec796f03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        $__internal_bb61bc547e223ecdf17eb7829bfe282ecfa1fd36bd899177a8e44774da195dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb61bc547e223ecdf17eb7829bfe282ecfa1fd36bd899177a8e44774da195dae->enter($__internal_bb61bc547e223ecdf17eb7829bfe282ecfa1fd36bd899177a8e44774da195dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 128
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "many")) {
            // line 129
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_collection", $context, $blocks);
            echo "
    ";
        } else {
            // line 131
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_bb61bc547e223ecdf17eb7829bfe282ecfa1fd36bd899177a8e44774da195dae->leave($__internal_bb61bc547e223ecdf17eb7829bfe282ecfa1fd36bd899177a8e44774da195dae_prof);

        
        $__internal_01b23d5942f5e9fa141ab854b4573c648844e28b3e5578c50f4b6c4ec796f03e->leave($__internal_01b23d5942f5e9fa141ab854b4573c648844e28b3e5578c50f4b6c4ec796f03e_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 131,  371 => 129,  368 => 128,  359 => 127,  345 => 123,  339 => 121,  337 => 120,  332 => 119,  329 => 118,  327 => 117,  318 => 116,  308 => 113,  300 => 108,  294 => 105,  288 => 101,  282 => 98,  276 => 95,  271 => 93,  268 => 92,  266 => 91,  261 => 88,  255 => 85,  249 => 82,  244 => 80,  239 => 79,  237 => 78,  234 => 77,  228 => 74,  222 => 71,  217 => 69,  212 => 68,  210 => 67,  205 => 64,  199 => 61,  196 => 60,  194 => 59,  191 => 58,  189 => 57,  188 => 56,  187 => 55,  185 => 54,  183 => 53,  179 => 52,  175 => 51,  170 => 50,  161 => 49,  147 => 45,  145 => 44,  139 => 42,  137 => 41,  132 => 40,  130 => 39,  125 => 38,  123 => 37,  120 => 36,  117 => 34,  115 => 30,  106 => 29,  95 => 26,  86 => 25,  75 => 22,  66 => 21,  55 => 18,  46 => 17,  11 => 13,);
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
(c) Kévin Dunglas <dunglas@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}


{# Custom Sonata Admin Extension #}
{% block sonata_admin_mongo_one_widget %}
    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one.html.twig' %}
{% endblock %}

{% block sonata_admin_mongo_many_widget %}
    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig' %}
{% endblock %}

{% block sonata_admin_mongo_collection %}
    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_collection.html.twig' %}
{% endblock %}

{% block sonata_type_model_widget %}
    {#
        This is not the best way to do if
        TODO : improve this part
    #}

    {#model {{ sonata_admin.field_description.mappingtype }}#}

    {% if sonata_admin.field_description is empty %}
        {{ block('choice_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == 'one' %}
        {{ block('sonata_admin_mongo_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == 'many' %}
        {{ block('sonata_admin_mongo_many_widget') }}
    {% else %}
        {#INVALID MODE : {{ id }}#}
        {{ block('choice_widget') }}
    {% endif %}
{% endblock %}

{% block sonata_type_model_list_widget %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
            <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
                {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}
                    {{ render(url('sonata_admin_short_object_information', {
                        'code':     sonata_admin.field_description.associationadmin.code,
                        'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
                        'uniqid':   sonata_admin.field_description.associationadmin.uniqid
                    })) }}
                {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}
                    <span class=\"inner-field-short-description\">
                        {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}
                    </span>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}\"
                       onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}\"
                       onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                       class=\"btn btn-success btn-sm sonata-ba-action\"
                       title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}
                    <a href=\"\"
                       onclick=\"return remove_selected_element_{{ id }}(this);\"
                       class=\"btn btn-danger btn-sm sonata-ba-action\"
                       title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        {{ btn_delete|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>
        </span>

        <span style=\"display: none\" >
            {{ form_widget(form) }}
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_{{ id }}\">

        </div>
    </div>

    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_association_script.html.twig' %}
{% endblock %}

{% block sonata_type_admin_widget %}
    {#admin {{ sonata_admin.field_description.mappingtype }}#}
    {% if sonata_admin.field_description.mappingtype == 'one' %}
        {{ block('sonata_admin_mongo_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == 'many' %}
        {{ block('sonata_admin_mongo_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }}
    {% endif %}
{% endblock %}

{% block sonata_type_collection_widget %}
    {% if sonata_admin.field_description.mappingtype == 'many' %}
        {{ block('sonata_admin_mongo_collection') }}
    {% else %}
        INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}
    {% endif %}
{% endblock %}
", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", "/home/pi/www/vendor/sonata-project/doctrine-mongodb-admin-bundle/Sonata/DoctrineMongoDBAdminBundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
