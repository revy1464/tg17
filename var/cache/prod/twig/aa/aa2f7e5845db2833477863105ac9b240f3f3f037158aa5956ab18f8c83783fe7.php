<?php

/* AppBundle:Usuarios:index.html.twig */
class __TwigTemplate_7750cb79d98aeed06386bbd7d81c6efe0b06458a2c6bccac0c778717177cdec9 extends Twig_Template
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
        $__internal_ee8c67b8c944aee7927ad7c8365a049d84640b1e4dd9e0365a6d407311ba3dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8c67b8c944aee7927ad7c8365a049d84640b1e4dd9e0365a6d407311ba3dc1->enter($__internal_ee8c67b8c944aee7927ad7c8365a049d84640b1e4dd9e0365a6d407311ba3dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Usuarios:index.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        
        $__internal_ee8c67b8c944aee7927ad7c8365a049d84640b1e4dd9e0365a6d407311ba3dc1->leave($__internal_ee8c67b8c944aee7927ad7c8365a049d84640b1e4dd9e0365a6d407311ba3dc1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{{texto}}", "AppBundle:Usuarios:index.html.twig", "C:\\AppServ\\www\\symfony3\\src\\AppBundle/Resources/views/Usuarios/index.html.twig");
    }
}
