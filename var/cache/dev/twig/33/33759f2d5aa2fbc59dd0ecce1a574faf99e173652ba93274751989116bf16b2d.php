<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0d8317a3fd0ec22eaf2fc0b395b7762cf7194e61fbe4efd96498ee899771b688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_6f9b59a71517fd3da860bbfe6c6d060782dd14b094c30ba915759f417f2ef718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9b59a71517fd3da860bbfe6c6d060782dd14b094c30ba915759f417f2ef718->enter($__internal_6f9b59a71517fd3da860bbfe6c6d060782dd14b094c30ba915759f417f2ef718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_eb60eece8c01e29ca6a8fe608876ec015c2c5b1c81e08ec1bcf987141a6118f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb60eece8c01e29ca6a8fe608876ec015c2c5b1c81e08ec1bcf987141a6118f8->enter($__internal_eb60eece8c01e29ca6a8fe608876ec015c2c5b1c81e08ec1bcf987141a6118f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f9b59a71517fd3da860bbfe6c6d060782dd14b094c30ba915759f417f2ef718->leave($__internal_6f9b59a71517fd3da860bbfe6c6d060782dd14b094c30ba915759f417f2ef718_prof);

        
        $__internal_eb60eece8c01e29ca6a8fe608876ec015c2c5b1c81e08ec1bcf987141a6118f8->leave($__internal_eb60eece8c01e29ca6a8fe608876ec015c2c5b1c81e08ec1bcf987141a6118f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2a6854d92c0bf96a5cd4ebea7cff163e81ab6c1357ef311b024c286daabe048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a6854d92c0bf96a5cd4ebea7cff163e81ab6c1357ef311b024c286daabe048->enter($__internal_b2a6854d92c0bf96a5cd4ebea7cff163e81ab6c1357ef311b024c286daabe048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1157447d2e17b137393c356cab8a7b00629f41649ad7b92f07d4ead263fc56c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1157447d2e17b137393c356cab8a7b00629f41649ad7b92f07d4ead263fc56c3->enter($__internal_1157447d2e17b137393c356cab8a7b00629f41649ad7b92f07d4ead263fc56c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1157447d2e17b137393c356cab8a7b00629f41649ad7b92f07d4ead263fc56c3->leave($__internal_1157447d2e17b137393c356cab8a7b00629f41649ad7b92f07d4ead263fc56c3_prof);

        
        $__internal_b2a6854d92c0bf96a5cd4ebea7cff163e81ab6c1357ef311b024c286daabe048->leave($__internal_b2a6854d92c0bf96a5cd4ebea7cff163e81ab6c1357ef311b024c286daabe048_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebe9d4b87d3f11ac5527347939d18bf190033f0ea5f27109fe218abf7a1651f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe9d4b87d3f11ac5527347939d18bf190033f0ea5f27109fe218abf7a1651f7->enter($__internal_ebe9d4b87d3f11ac5527347939d18bf190033f0ea5f27109fe218abf7a1651f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7314aef1e62ee30bfe7b7a75adc6c08897284a46b119104560260595f3e289cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7314aef1e62ee30bfe7b7a75adc6c08897284a46b119104560260595f3e289cb->enter($__internal_7314aef1e62ee30bfe7b7a75adc6c08897284a46b119104560260595f3e289cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7314aef1e62ee30bfe7b7a75adc6c08897284a46b119104560260595f3e289cb->leave($__internal_7314aef1e62ee30bfe7b7a75adc6c08897284a46b119104560260595f3e289cb_prof);

        
        $__internal_ebe9d4b87d3f11ac5527347939d18bf190033f0ea5f27109fe218abf7a1651f7->leave($__internal_ebe9d4b87d3f11ac5527347939d18bf190033f0ea5f27109fe218abf7a1651f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
