<?php

/* AppBundle:Controlador:index.html.twig */
class __TwigTemplate_977221b8bc32ddba0fb2bfa5770eadb4c2500117c6f2f7e10461772ab579632b extends Twig_Template
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
        $__internal_136e95afe3f3bafc812deda0324e4f9b9acb72eebb10fb4c143b51d96646687a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136e95afe3f3bafc812deda0324e4f9b9acb72eebb10fb4c143b51d96646687a->enter($__internal_136e95afe3f3bafc812deda0324e4f9b9acb72eebb10fb4c143b51d96646687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Controlador:index.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        
        $__internal_136e95afe3f3bafc812deda0324e4f9b9acb72eebb10fb4c143b51d96646687a->leave($__internal_136e95afe3f3bafc812deda0324e4f9b9acb72eebb10fb4c143b51d96646687a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Controlador:index.html.twig";
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
{{texto}}", "AppBundle:Controlador:index.html.twig", "C:\\AppServ\\www\\symfony3\\src\\AppBundle/Resources/views/Controlador/index.html.twig");
    }
}
