<?php

/* AppBundle:usuarios:index.html.twig */
class __TwigTemplate_36ce18c19467724222ff65d46256e036a33275505e523a10e71a8f7a27ab638b extends Twig_Template
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
        $__internal_52ed555444e8381659eb3c11cf9145c2d5e9674fca5d747bdeb32f78be4b4a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ed555444e8381659eb3c11cf9145c2d5e9674fca5d747bdeb32f78be4b4a87->enter($__internal_52ed555444e8381659eb3c11cf9145c2d5e9674fca5d747bdeb32f78be4b4a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:usuarios:index.html.twig"));

        $__internal_968519554cf75547732a59eea26e914589fadb7260df8200bd82bcb64005a69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968519554cf75547732a59eea26e914589fadb7260df8200bd82bcb64005a69b->enter($__internal_968519554cf75547732a59eea26e914589fadb7260df8200bd82bcb64005a69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:usuarios:index.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        
        $__internal_52ed555444e8381659eb3c11cf9145c2d5e9674fca5d747bdeb32f78be4b4a87->leave($__internal_52ed555444e8381659eb3c11cf9145c2d5e9674fca5d747bdeb32f78be4b4a87_prof);

        
        $__internal_968519554cf75547732a59eea26e914589fadb7260df8200bd82bcb64005a69b->leave($__internal_968519554cf75547732a59eea26e914589fadb7260df8200bd82bcb64005a69b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:usuarios:index.html.twig";
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
{{texto}}", "AppBundle:usuarios:index.html.twig", "C:\\AppServ\\www\\symfony3\\src\\AppBundle/Resources/views/usuarios/index.html.twig");
    }
}
