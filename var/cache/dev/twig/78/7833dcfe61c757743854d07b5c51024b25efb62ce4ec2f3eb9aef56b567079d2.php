<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2217e951f851b5300708fb402981f8cf553a5d24f371a268136f234a1fe2dfc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f47ad37205c8c4089569cb613da46bf178f2852d0a2f11b5a01fc0ac283b983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f47ad37205c8c4089569cb613da46bf178f2852d0a2f11b5a01fc0ac283b983->enter($__internal_0f47ad37205c8c4089569cb613da46bf178f2852d0a2f11b5a01fc0ac283b983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e87275b426506c52d1912284200b4979fdadd32db9f718319fdae22cca5166ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87275b426506c52d1912284200b4979fdadd32db9f718319fdae22cca5166ec->enter($__internal_e87275b426506c52d1912284200b4979fdadd32db9f718319fdae22cca5166ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f47ad37205c8c4089569cb613da46bf178f2852d0a2f11b5a01fc0ac283b983->leave($__internal_0f47ad37205c8c4089569cb613da46bf178f2852d0a2f11b5a01fc0ac283b983_prof);

        
        $__internal_e87275b426506c52d1912284200b4979fdadd32db9f718319fdae22cca5166ec->leave($__internal_e87275b426506c52d1912284200b4979fdadd32db9f718319fdae22cca5166ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c181374d591e3b8778f3bec3023a06b66b3e72331f248417e989a6f12388fe91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c181374d591e3b8778f3bec3023a06b66b3e72331f248417e989a6f12388fe91->enter($__internal_c181374d591e3b8778f3bec3023a06b66b3e72331f248417e989a6f12388fe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0437b27d49335a31174180d39d3a54b6393d81425c7d7d8673235076d80ad23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0437b27d49335a31174180d39d3a54b6393d81425c7d7d8673235076d80ad23->enter($__internal_b0437b27d49335a31174180d39d3a54b6393d81425c7d7d8673235076d80ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b0437b27d49335a31174180d39d3a54b6393d81425c7d7d8673235076d80ad23->leave($__internal_b0437b27d49335a31174180d39d3a54b6393d81425c7d7d8673235076d80ad23_prof);

        
        $__internal_c181374d591e3b8778f3bec3023a06b66b3e72331f248417e989a6f12388fe91->leave($__internal_c181374d591e3b8778f3bec3023a06b66b3e72331f248417e989a6f12388fe91_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e17a394ed78e56e3c3e92f9063a2c1e53507c9c7206c7d23c8a5992afc4ab5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e17a394ed78e56e3c3e92f9063a2c1e53507c9c7206c7d23c8a5992afc4ab5e->enter($__internal_3e17a394ed78e56e3c3e92f9063a2c1e53507c9c7206c7d23c8a5992afc4ab5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40cfed0afbb5cc3ca64994640c6f197e70f432f6f8c0d50e9a6483bb31f125ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cfed0afbb5cc3ca64994640c6f197e70f432f6f8c0d50e9a6483bb31f125ef->enter($__internal_40cfed0afbb5cc3ca64994640c6f197e70f432f6f8c0d50e9a6483bb31f125ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_40cfed0afbb5cc3ca64994640c6f197e70f432f6f8c0d50e9a6483bb31f125ef->leave($__internal_40cfed0afbb5cc3ca64994640c6f197e70f432f6f8c0d50e9a6483bb31f125ef_prof);

        
        $__internal_3e17a394ed78e56e3c3e92f9063a2c1e53507c9c7206c7d23c8a5992afc4ab5e->leave($__internal_3e17a394ed78e56e3c3e92f9063a2c1e53507c9c7206c7d23c8a5992afc4ab5e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
