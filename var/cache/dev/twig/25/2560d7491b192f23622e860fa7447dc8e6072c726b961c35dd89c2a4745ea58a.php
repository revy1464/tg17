<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a871aee7f51dae2fd77ad02e36815f2f473ff62658b7a3f5351364fe4bec8f9e extends Twig_Template
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
        $__internal_5ad4fd4ed110cf05b188dbda2565aaeb8411e960b64e5e802c5a6d76a93884e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad4fd4ed110cf05b188dbda2565aaeb8411e960b64e5e802c5a6d76a93884e4->enter($__internal_5ad4fd4ed110cf05b188dbda2565aaeb8411e960b64e5e802c5a6d76a93884e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1a65e2ffd151c233299997f6fa52b12b4796871180756e135a516548906ab846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a65e2ffd151c233299997f6fa52b12b4796871180756e135a516548906ab846->enter($__internal_1a65e2ffd151c233299997f6fa52b12b4796871180756e135a516548906ab846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5ad4fd4ed110cf05b188dbda2565aaeb8411e960b64e5e802c5a6d76a93884e4->leave($__internal_5ad4fd4ed110cf05b188dbda2565aaeb8411e960b64e5e802c5a6d76a93884e4_prof);

        
        $__internal_1a65e2ffd151c233299997f6fa52b12b4796871180756e135a516548906ab846->leave($__internal_1a65e2ffd151c233299997f6fa52b12b4796871180756e135a516548906ab846_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
