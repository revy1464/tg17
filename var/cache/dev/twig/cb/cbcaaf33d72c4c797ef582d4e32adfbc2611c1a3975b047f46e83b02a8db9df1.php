<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_de1f5f72e120339d190fec1b11a3597a53c62af32e76a907f28ce77092c7d32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1609ac9e8d3a2509724ef3d38439b7f28c8f999d0251d53e549137d55170476c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1609ac9e8d3a2509724ef3d38439b7f28c8f999d0251d53e549137d55170476c->enter($__internal_1609ac9e8d3a2509724ef3d38439b7f28c8f999d0251d53e549137d55170476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_74b051d18a32bbee691428ec1f0a63e851d25c596fb08069fe7a9894727d6cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b051d18a32bbee691428ec1f0a63e851d25c596fb08069fe7a9894727d6cbd->enter($__internal_74b051d18a32bbee691428ec1f0a63e851d25c596fb08069fe7a9894727d6cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1609ac9e8d3a2509724ef3d38439b7f28c8f999d0251d53e549137d55170476c->leave($__internal_1609ac9e8d3a2509724ef3d38439b7f28c8f999d0251d53e549137d55170476c_prof);

        
        $__internal_74b051d18a32bbee691428ec1f0a63e851d25c596fb08069fe7a9894727d6cbd->leave($__internal_74b051d18a32bbee691428ec1f0a63e851d25c596fb08069fe7a9894727d6cbd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
