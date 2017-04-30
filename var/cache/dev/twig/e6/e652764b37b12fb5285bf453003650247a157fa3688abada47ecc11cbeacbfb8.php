<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ba2c9c6653249656a5b527bfb1a065ad7669a2343aa93f250caf2227fcfe53ab extends Twig_Template
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
        $__internal_dab37a190372b6004b61c8953a0256b58706b731ed9521c08fa7b5e951774895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab37a190372b6004b61c8953a0256b58706b731ed9521c08fa7b5e951774895->enter($__internal_dab37a190372b6004b61c8953a0256b58706b731ed9521c08fa7b5e951774895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_3c10a2394a5c4f6de656fd2a854e434780611b52b7c520835df12605ca0816b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c10a2394a5c4f6de656fd2a854e434780611b52b7c520835df12605ca0816b1->enter($__internal_3c10a2394a5c4f6de656fd2a854e434780611b52b7c520835df12605ca0816b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dab37a190372b6004b61c8953a0256b58706b731ed9521c08fa7b5e951774895->leave($__internal_dab37a190372b6004b61c8953a0256b58706b731ed9521c08fa7b5e951774895_prof);

        
        $__internal_3c10a2394a5c4f6de656fd2a854e434780611b52b7c520835df12605ca0816b1->leave($__internal_3c10a2394a5c4f6de656fd2a854e434780611b52b7c520835df12605ca0816b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
