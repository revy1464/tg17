<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3b018fbd580c5be6ffb89741207d2dea4649010432a67a30fccb66d4833933b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b018fbd580c5be6ffb89741207d2dea4649010432a67a30fccb66d4833933b->enter($__internal_e3b018fbd580c5be6ffb89741207d2dea4649010432a67a30fccb66d4833933b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e08204e53d892cbff02a91ff6bd4d8ebab656f577c0bfcdbdb5116829402a484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08204e53d892cbff02a91ff6bd4d8ebab656f577c0bfcdbdb5116829402a484->enter($__internal_e08204e53d892cbff02a91ff6bd4d8ebab656f577c0bfcdbdb5116829402a484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b018fbd580c5be6ffb89741207d2dea4649010432a67a30fccb66d4833933b->leave($__internal_e3b018fbd580c5be6ffb89741207d2dea4649010432a67a30fccb66d4833933b_prof);

        
        $__internal_e08204e53d892cbff02a91ff6bd4d8ebab656f577c0bfcdbdb5116829402a484->leave($__internal_e08204e53d892cbff02a91ff6bd4d8ebab656f577c0bfcdbdb5116829402a484_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f54667dd501c79f9d40e145ac94b21e88d21d8b26316852439c9d7afdb3aff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f54667dd501c79f9d40e145ac94b21e88d21d8b26316852439c9d7afdb3aff6->enter($__internal_6f54667dd501c79f9d40e145ac94b21e88d21d8b26316852439c9d7afdb3aff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72f08c4277f4007706c5c931da1d839f417134d7355b2ede2d7f619ef19d6a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f08c4277f4007706c5c931da1d839f417134d7355b2ede2d7f619ef19d6a03->enter($__internal_72f08c4277f4007706c5c931da1d839f417134d7355b2ede2d7f619ef19d6a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72f08c4277f4007706c5c931da1d839f417134d7355b2ede2d7f619ef19d6a03->leave($__internal_72f08c4277f4007706c5c931da1d839f417134d7355b2ede2d7f619ef19d6a03_prof);

        
        $__internal_6f54667dd501c79f9d40e145ac94b21e88d21d8b26316852439c9d7afdb3aff6->leave($__internal_6f54667dd501c79f9d40e145ac94b21e88d21d8b26316852439c9d7afdb3aff6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_297086f99a0f2fc88bfd27f2d07301901bf72972368beaa4d02918d6dfa7e6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297086f99a0f2fc88bfd27f2d07301901bf72972368beaa4d02918d6dfa7e6ea->enter($__internal_297086f99a0f2fc88bfd27f2d07301901bf72972368beaa4d02918d6dfa7e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21ff48d083541d080640b41f9959bbc7f1be5197a083d2ffef236d882bc7f021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ff48d083541d080640b41f9959bbc7f1be5197a083d2ffef236d882bc7f021->enter($__internal_21ff48d083541d080640b41f9959bbc7f1be5197a083d2ffef236d882bc7f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21ff48d083541d080640b41f9959bbc7f1be5197a083d2ffef236d882bc7f021->leave($__internal_21ff48d083541d080640b41f9959bbc7f1be5197a083d2ffef236d882bc7f021_prof);

        
        $__internal_297086f99a0f2fc88bfd27f2d07301901bf72972368beaa4d02918d6dfa7e6ea->leave($__internal_297086f99a0f2fc88bfd27f2d07301901bf72972368beaa4d02918d6dfa7e6ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_099abf9119af19fef4449825f944dcb041956ff40545a98b151afd4fdb758918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099abf9119af19fef4449825f944dcb041956ff40545a98b151afd4fdb758918->enter($__internal_099abf9119af19fef4449825f944dcb041956ff40545a98b151afd4fdb758918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41d4a2e397740dca0c19568b9bd59e717da30c6272ba3de7247ec7e05e161910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d4a2e397740dca0c19568b9bd59e717da30c6272ba3de7247ec7e05e161910->enter($__internal_41d4a2e397740dca0c19568b9bd59e717da30c6272ba3de7247ec7e05e161910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41d4a2e397740dca0c19568b9bd59e717da30c6272ba3de7247ec7e05e161910->leave($__internal_41d4a2e397740dca0c19568b9bd59e717da30c6272ba3de7247ec7e05e161910_prof);

        
        $__internal_099abf9119af19fef4449825f944dcb041956ff40545a98b151afd4fdb758918->leave($__internal_099abf9119af19fef4449825f944dcb041956ff40545a98b151afd4fdb758918_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
