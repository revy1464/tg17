<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd9b472061677e100d0f0a19ab190dc4b4a04a6db43ba963cd690561170a9900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11cae1d978aed5deda229351e96abf24640304e124fb8d6f0ff92c1d02d0824f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cae1d978aed5deda229351e96abf24640304e124fb8d6f0ff92c1d02d0824f->enter($__internal_11cae1d978aed5deda229351e96abf24640304e124fb8d6f0ff92c1d02d0824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_57033ca9f7154fed370ca7d8f6cc1cbd165a60eb7b38e4297f0cd0525e1c1fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57033ca9f7154fed370ca7d8f6cc1cbd165a60eb7b38e4297f0cd0525e1c1fc3->enter($__internal_57033ca9f7154fed370ca7d8f6cc1cbd165a60eb7b38e4297f0cd0525e1c1fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11cae1d978aed5deda229351e96abf24640304e124fb8d6f0ff92c1d02d0824f->leave($__internal_11cae1d978aed5deda229351e96abf24640304e124fb8d6f0ff92c1d02d0824f_prof);

        
        $__internal_57033ca9f7154fed370ca7d8f6cc1cbd165a60eb7b38e4297f0cd0525e1c1fc3->leave($__internal_57033ca9f7154fed370ca7d8f6cc1cbd165a60eb7b38e4297f0cd0525e1c1fc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3595bff73a9e16c065f2fba5c5793535f50fbf56e6b6d8b1d445ab2b9292cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3595bff73a9e16c065f2fba5c5793535f50fbf56e6b6d8b1d445ab2b9292cdc->enter($__internal_f3595bff73a9e16c065f2fba5c5793535f50fbf56e6b6d8b1d445ab2b9292cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2fbbcbf1493b29e19bda094fe4db74646e3fdb4de2ba6376d8f1742dec58a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fbbcbf1493b29e19bda094fe4db74646e3fdb4de2ba6376d8f1742dec58a49->enter($__internal_c2fbbcbf1493b29e19bda094fe4db74646e3fdb4de2ba6376d8f1742dec58a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c2fbbcbf1493b29e19bda094fe4db74646e3fdb4de2ba6376d8f1742dec58a49->leave($__internal_c2fbbcbf1493b29e19bda094fe4db74646e3fdb4de2ba6376d8f1742dec58a49_prof);

        
        $__internal_f3595bff73a9e16c065f2fba5c5793535f50fbf56e6b6d8b1d445ab2b9292cdc->leave($__internal_f3595bff73a9e16c065f2fba5c5793535f50fbf56e6b6d8b1d445ab2b9292cdc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c8ab4dcbf909f06963718758d26e1ff605f712ed3ce58c4d352f95001d89f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8ab4dcbf909f06963718758d26e1ff605f712ed3ce58c4d352f95001d89f99->enter($__internal_3c8ab4dcbf909f06963718758d26e1ff605f712ed3ce58c4d352f95001d89f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12803baa2841fdb87498f1a9c1c8a86e6a3a50009bb03c1d7b6fe570be799916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12803baa2841fdb87498f1a9c1c8a86e6a3a50009bb03c1d7b6fe570be799916->enter($__internal_12803baa2841fdb87498f1a9c1c8a86e6a3a50009bb03c1d7b6fe570be799916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_12803baa2841fdb87498f1a9c1c8a86e6a3a50009bb03c1d7b6fe570be799916->leave($__internal_12803baa2841fdb87498f1a9c1c8a86e6a3a50009bb03c1d7b6fe570be799916_prof);

        
        $__internal_3c8ab4dcbf909f06963718758d26e1ff605f712ed3ce58c4d352f95001d89f99->leave($__internal_3c8ab4dcbf909f06963718758d26e1ff605f712ed3ce58c4d352f95001d89f99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
