<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9df4e37bce1499bbb28587d006e71bd2355623d3fd09c32d73d39a4b9230ef46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_4670851264d9def578bb767e6f0adcdc47b993d2e4af9efe3948aacd48c32ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4670851264d9def578bb767e6f0adcdc47b993d2e4af9efe3948aacd48c32ae8->enter($__internal_4670851264d9def578bb767e6f0adcdc47b993d2e4af9efe3948aacd48c32ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b4b6795d96a3066ffdc39dbe97c39f2f36467bcf78fa6f73dc247c0865bf3d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b6795d96a3066ffdc39dbe97c39f2f36467bcf78fa6f73dc247c0865bf3d01->enter($__internal_b4b6795d96a3066ffdc39dbe97c39f2f36467bcf78fa6f73dc247c0865bf3d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4670851264d9def578bb767e6f0adcdc47b993d2e4af9efe3948aacd48c32ae8->leave($__internal_4670851264d9def578bb767e6f0adcdc47b993d2e4af9efe3948aacd48c32ae8_prof);

        
        $__internal_b4b6795d96a3066ffdc39dbe97c39f2f36467bcf78fa6f73dc247c0865bf3d01->leave($__internal_b4b6795d96a3066ffdc39dbe97c39f2f36467bcf78fa6f73dc247c0865bf3d01_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a836628999b8852cf1e066d77ec58ff1f5aeea7c6715d08937b9ecaae7b63f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a836628999b8852cf1e066d77ec58ff1f5aeea7c6715d08937b9ecaae7b63f84->enter($__internal_a836628999b8852cf1e066d77ec58ff1f5aeea7c6715d08937b9ecaae7b63f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_776d3b4f77b8d1c7e4d1c06a02f53bec6571fedd642a070d2693c2f827fc408e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776d3b4f77b8d1c7e4d1c06a02f53bec6571fedd642a070d2693c2f827fc408e->enter($__internal_776d3b4f77b8d1c7e4d1c06a02f53bec6571fedd642a070d2693c2f827fc408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_776d3b4f77b8d1c7e4d1c06a02f53bec6571fedd642a070d2693c2f827fc408e->leave($__internal_776d3b4f77b8d1c7e4d1c06a02f53bec6571fedd642a070d2693c2f827fc408e_prof);

        
        $__internal_a836628999b8852cf1e066d77ec58ff1f5aeea7c6715d08937b9ecaae7b63f84->leave($__internal_a836628999b8852cf1e066d77ec58ff1f5aeea7c6715d08937b9ecaae7b63f84_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7df01591ed4063977907e80375364bf6ca2cb25ebe3c8968122fd11caa4a19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7df01591ed4063977907e80375364bf6ca2cb25ebe3c8968122fd11caa4a19b->enter($__internal_e7df01591ed4063977907e80375364bf6ca2cb25ebe3c8968122fd11caa4a19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8cd5233109a5c7070aaf64b97f5a6e621dedca914a12ed8e0880564cd522617a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd5233109a5c7070aaf64b97f5a6e621dedca914a12ed8e0880564cd522617a->enter($__internal_8cd5233109a5c7070aaf64b97f5a6e621dedca914a12ed8e0880564cd522617a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8cd5233109a5c7070aaf64b97f5a6e621dedca914a12ed8e0880564cd522617a->leave($__internal_8cd5233109a5c7070aaf64b97f5a6e621dedca914a12ed8e0880564cd522617a_prof);

        
        $__internal_e7df01591ed4063977907e80375364bf6ca2cb25ebe3c8968122fd11caa4a19b->leave($__internal_e7df01591ed4063977907e80375364bf6ca2cb25ebe3c8968122fd11caa4a19b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
