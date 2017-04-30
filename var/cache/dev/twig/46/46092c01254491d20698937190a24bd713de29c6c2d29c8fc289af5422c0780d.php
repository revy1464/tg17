<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bc4aa508fa507f6e799d778c57026a449a85d83d46c32467104ce2b28c814a1c extends Twig_Template
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
        $__internal_92f4ac098d0e6052afb0e33c5683b0fdf2613f44f3298ff5c8ff4cf00661e98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f4ac098d0e6052afb0e33c5683b0fdf2613f44f3298ff5c8ff4cf00661e98a->enter($__internal_92f4ac098d0e6052afb0e33c5683b0fdf2613f44f3298ff5c8ff4cf00661e98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_aac0e03d70ee3057268516d22c88e2c5535daad6133b4f3e8448e9f034ad76fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac0e03d70ee3057268516d22c88e2c5535daad6133b4f3e8448e9f034ad76fc->enter($__internal_aac0e03d70ee3057268516d22c88e2c5535daad6133b4f3e8448e9f034ad76fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_92f4ac098d0e6052afb0e33c5683b0fdf2613f44f3298ff5c8ff4cf00661e98a->leave($__internal_92f4ac098d0e6052afb0e33c5683b0fdf2613f44f3298ff5c8ff4cf00661e98a_prof);

        
        $__internal_aac0e03d70ee3057268516d22c88e2c5535daad6133b4f3e8448e9f034ad76fc->leave($__internal_aac0e03d70ee3057268516d22c88e2c5535daad6133b4f3e8448e9f034ad76fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
