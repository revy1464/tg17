<?php

/* @App/usuarios/index.html.twig */
class __TwigTemplate_66ab6acc05e51549256ff0c075e62472280cc72657f3c8d36f57e44bc72291e0 extends Twig_Template
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
        $__internal_55ab6997f2fef986d4d3be869e74c52fe44fc4a23a395fcf02bd2d1e726ba99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ab6997f2fef986d4d3be869e74c52fe44fc4a23a395fcf02bd2d1e726ba99d->enter($__internal_55ab6997f2fef986d4d3be869e74c52fe44fc4a23a395fcf02bd2d1e726ba99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/usuarios/index.html.twig"));

        $__internal_8fda1938da8d16b70fdc8c34fbfc8d029fa4e30dfd1f0030b7b8efa3f9a5f9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fda1938da8d16b70fdc8c34fbfc8d029fa4e30dfd1f0030b7b8efa3f9a5f9fd->enter($__internal_8fda1938da8d16b70fdc8c34fbfc8d029fa4e30dfd1f0030b7b8efa3f9a5f9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/usuarios/index.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        
        $__internal_55ab6997f2fef986d4d3be869e74c52fe44fc4a23a395fcf02bd2d1e726ba99d->leave($__internal_55ab6997f2fef986d4d3be869e74c52fe44fc4a23a395fcf02bd2d1e726ba99d_prof);

        
        $__internal_8fda1938da8d16b70fdc8c34fbfc8d029fa4e30dfd1f0030b7b8efa3f9a5f9fd->leave($__internal_8fda1938da8d16b70fdc8c34fbfc8d029fa4e30dfd1f0030b7b8efa3f9a5f9fd_prof);

    }

    public function getTemplateName()
    {
        return "@App/usuarios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
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
{{texto}}", "@App/usuarios/index.html.twig", "C:\\AppServ\\www\\symfony3\\src\\AppBundle\\Resources\\views\\usuarios\\index.html.twig");
    }
}
