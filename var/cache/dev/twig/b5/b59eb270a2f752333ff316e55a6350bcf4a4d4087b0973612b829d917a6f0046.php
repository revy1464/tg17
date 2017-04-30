<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8b2a29beef47614af8f624c4629a4dbd63828ec2fa153ac163f68ba72fd05d25 extends Twig_Template
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
        $__internal_8328e22a68bc68e6ca5c8c2d3d361fe10602fc7c75282cf151830fdf5146cbe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8328e22a68bc68e6ca5c8c2d3d361fe10602fc7c75282cf151830fdf5146cbe8->enter($__internal_8328e22a68bc68e6ca5c8c2d3d361fe10602fc7c75282cf151830fdf5146cbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_592e43a52f0caacbe38e09ca187bc90d1e07e84a3e4f7b3d90b1e65cf5b4a07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592e43a52f0caacbe38e09ca187bc90d1e07e84a3e4f7b3d90b1e65cf5b4a07a->enter($__internal_592e43a52f0caacbe38e09ca187bc90d1e07e84a3e4f7b3d90b1e65cf5b4a07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8328e22a68bc68e6ca5c8c2d3d361fe10602fc7c75282cf151830fdf5146cbe8->leave($__internal_8328e22a68bc68e6ca5c8c2d3d361fe10602fc7c75282cf151830fdf5146cbe8_prof);

        
        $__internal_592e43a52f0caacbe38e09ca187bc90d1e07e84a3e4f7b3d90b1e65cf5b4a07a->leave($__internal_592e43a52f0caacbe38e09ca187bc90d1e07e84a3e4f7b3d90b1e65cf5b4a07a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
