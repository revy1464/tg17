<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9f73aad1d1c41cba15b2554e9ba554bdecaeb1bafa27d9717867fe27e1d1473c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_ab95d71b53c1cdc30a9855da71ffddac6b1a4bf8e018ae4420b995ff232821c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab95d71b53c1cdc30a9855da71ffddac6b1a4bf8e018ae4420b995ff232821c3->enter($__internal_ab95d71b53c1cdc30a9855da71ffddac6b1a4bf8e018ae4420b995ff232821c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3927faea2967d8fa2ec5decbff2d3884061635b161143b30407c6faec42081fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3927faea2967d8fa2ec5decbff2d3884061635b161143b30407c6faec42081fe->enter($__internal_3927faea2967d8fa2ec5decbff2d3884061635b161143b30407c6faec42081fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab95d71b53c1cdc30a9855da71ffddac6b1a4bf8e018ae4420b995ff232821c3->leave($__internal_ab95d71b53c1cdc30a9855da71ffddac6b1a4bf8e018ae4420b995ff232821c3_prof);

        
        $__internal_3927faea2967d8fa2ec5decbff2d3884061635b161143b30407c6faec42081fe->leave($__internal_3927faea2967d8fa2ec5decbff2d3884061635b161143b30407c6faec42081fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b5fd01f51ca077b65898a91cebe8080f0bdb47cfb92242736016cb548667643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5fd01f51ca077b65898a91cebe8080f0bdb47cfb92242736016cb548667643->enter($__internal_2b5fd01f51ca077b65898a91cebe8080f0bdb47cfb92242736016cb548667643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2cfe4588557490f4317fc4ce2e0f4aa02d11acea8a99187513b930853eda298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cfe4588557490f4317fc4ce2e0f4aa02d11acea8a99187513b930853eda298->enter($__internal_f2cfe4588557490f4317fc4ce2e0f4aa02d11acea8a99187513b930853eda298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f2cfe4588557490f4317fc4ce2e0f4aa02d11acea8a99187513b930853eda298->leave($__internal_f2cfe4588557490f4317fc4ce2e0f4aa02d11acea8a99187513b930853eda298_prof);

        
        $__internal_2b5fd01f51ca077b65898a91cebe8080f0bdb47cfb92242736016cb548667643->leave($__internal_2b5fd01f51ca077b65898a91cebe8080f0bdb47cfb92242736016cb548667643_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4243509e8ac887793ca68c76bc80a77ca07f96b50a7ddcc6af93184151c61d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4243509e8ac887793ca68c76bc80a77ca07f96b50a7ddcc6af93184151c61d7a->enter($__internal_4243509e8ac887793ca68c76bc80a77ca07f96b50a7ddcc6af93184151c61d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1aa99da938016c7146de93cf3e1a870f928b4d9f7ada23eccab9ccf1310f9d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa99da938016c7146de93cf3e1a870f928b4d9f7ada23eccab9ccf1310f9d90->enter($__internal_1aa99da938016c7146de93cf3e1a870f928b4d9f7ada23eccab9ccf1310f9d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1aa99da938016c7146de93cf3e1a870f928b4d9f7ada23eccab9ccf1310f9d90->leave($__internal_1aa99da938016c7146de93cf3e1a870f928b4d9f7ada23eccab9ccf1310f9d90_prof);

        
        $__internal_4243509e8ac887793ca68c76bc80a77ca07f96b50a7ddcc6af93184151c61d7a->leave($__internal_4243509e8ac887793ca68c76bc80a77ca07f96b50a7ddcc6af93184151c61d7a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
