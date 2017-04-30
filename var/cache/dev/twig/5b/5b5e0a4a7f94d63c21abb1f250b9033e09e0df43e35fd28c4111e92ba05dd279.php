<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b9b25b08d5c69581c7667fcda75a2ced09ec222373a448552c5e0ffb9baf130b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_107b7993426069b01e00cf7bd28a4dc61775496dd04742eb4c0428d87dcc5e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107b7993426069b01e00cf7bd28a4dc61775496dd04742eb4c0428d87dcc5e00->enter($__internal_107b7993426069b01e00cf7bd28a4dc61775496dd04742eb4c0428d87dcc5e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1a1d1300887778361ad7ee9c42072e7ea55874ede4d93de30ceebaa4de5a85d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1d1300887778361ad7ee9c42072e7ea55874ede4d93de30ceebaa4de5a85d0->enter($__internal_1a1d1300887778361ad7ee9c42072e7ea55874ede4d93de30ceebaa4de5a85d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107b7993426069b01e00cf7bd28a4dc61775496dd04742eb4c0428d87dcc5e00->leave($__internal_107b7993426069b01e00cf7bd28a4dc61775496dd04742eb4c0428d87dcc5e00_prof);

        
        $__internal_1a1d1300887778361ad7ee9c42072e7ea55874ede4d93de30ceebaa4de5a85d0->leave($__internal_1a1d1300887778361ad7ee9c42072e7ea55874ede4d93de30ceebaa4de5a85d0_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_779f837203381ea3db3abe18f92dbeeca55d84cdde245cabd06d7b21b221b78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779f837203381ea3db3abe18f92dbeeca55d84cdde245cabd06d7b21b221b78c->enter($__internal_779f837203381ea3db3abe18f92dbeeca55d84cdde245cabd06d7b21b221b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_753306c852fb4d8e32b6a518782458f461f97c895122e20b1fc5abcc2777a1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753306c852fb4d8e32b6a518782458f461f97c895122e20b1fc5abcc2777a1e2->enter($__internal_753306c852fb4d8e32b6a518782458f461f97c895122e20b1fc5abcc2777a1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_753306c852fb4d8e32b6a518782458f461f97c895122e20b1fc5abcc2777a1e2->leave($__internal_753306c852fb4d8e32b6a518782458f461f97c895122e20b1fc5abcc2777a1e2_prof);

        
        $__internal_779f837203381ea3db3abe18f92dbeeca55d84cdde245cabd06d7b21b221b78c->leave($__internal_779f837203381ea3db3abe18f92dbeeca55d84cdde245cabd06d7b21b221b78c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bbda4aec91d0ba4d0c742bd7e7ae67c3269b0a8f71b92756889a91806ebe946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbda4aec91d0ba4d0c742bd7e7ae67c3269b0a8f71b92756889a91806ebe946->enter($__internal_9bbda4aec91d0ba4d0c742bd7e7ae67c3269b0a8f71b92756889a91806ebe946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55b6f1a928a5f5a3762ce59c72f3f988f2b4f37d773b275ba139d28dfda04389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b6f1a928a5f5a3762ce59c72f3f988f2b4f37d773b275ba139d28dfda04389->enter($__internal_55b6f1a928a5f5a3762ce59c72f3f988f2b4f37d773b275ba139d28dfda04389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_55b6f1a928a5f5a3762ce59c72f3f988f2b4f37d773b275ba139d28dfda04389->leave($__internal_55b6f1a928a5f5a3762ce59c72f3f988f2b4f37d773b275ba139d28dfda04389_prof);

        
        $__internal_9bbda4aec91d0ba4d0c742bd7e7ae67c3269b0a8f71b92756889a91806ebe946->leave($__internal_9bbda4aec91d0ba4d0c742bd7e7ae67c3269b0a8f71b92756889a91806ebe946_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
