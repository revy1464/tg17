<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_898c425b961ff697b50402eff4a8175a1e1c615dcf8c63fd7371d89381c0a53e extends Twig_Template
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
        $__internal_505f04c161cfa32737ebe833ce63b1d77771767b2dc6895cc2ab33429b020abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505f04c161cfa32737ebe833ce63b1d77771767b2dc6895cc2ab33429b020abc->enter($__internal_505f04c161cfa32737ebe833ce63b1d77771767b2dc6895cc2ab33429b020abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_7ca18a418a4cf2c695579716bbb3244ec0ebbcf0e075dc033b894b38103bf092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca18a418a4cf2c695579716bbb3244ec0ebbcf0e075dc033b894b38103bf092->enter($__internal_7ca18a418a4cf2c695579716bbb3244ec0ebbcf0e075dc033b894b38103bf092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_505f04c161cfa32737ebe833ce63b1d77771767b2dc6895cc2ab33429b020abc->leave($__internal_505f04c161cfa32737ebe833ce63b1d77771767b2dc6895cc2ab33429b020abc_prof);

        
        $__internal_7ca18a418a4cf2c695579716bbb3244ec0ebbcf0e075dc033b894b38103bf092->leave($__internal_7ca18a418a4cf2c695579716bbb3244ec0ebbcf0e075dc033b894b38103bf092_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
