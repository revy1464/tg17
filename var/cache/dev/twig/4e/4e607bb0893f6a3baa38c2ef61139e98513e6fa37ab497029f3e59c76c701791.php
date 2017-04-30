<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_415ead967e717ee7456672796cc78232cafb69075362f92cbf8c3e651373f519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d14a098d62f09660a87a106d26d8cbba017845757a96f9ad4f1b57b7eb013b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14a098d62f09660a87a106d26d8cbba017845757a96f9ad4f1b57b7eb013b9b->enter($__internal_d14a098d62f09660a87a106d26d8cbba017845757a96f9ad4f1b57b7eb013b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_131f1b8374097b6f095dff24d8e4f34587f7c736511943de8cf96d0fd14e45de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131f1b8374097b6f095dff24d8e4f34587f7c736511943de8cf96d0fd14e45de->enter($__internal_131f1b8374097b6f095dff24d8e4f34587f7c736511943de8cf96d0fd14e45de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d14a098d62f09660a87a106d26d8cbba017845757a96f9ad4f1b57b7eb013b9b->leave($__internal_d14a098d62f09660a87a106d26d8cbba017845757a96f9ad4f1b57b7eb013b9b_prof);

        
        $__internal_131f1b8374097b6f095dff24d8e4f34587f7c736511943de8cf96d0fd14e45de->leave($__internal_131f1b8374097b6f095dff24d8e4f34587f7c736511943de8cf96d0fd14e45de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4f099d6e425c5d64b48431a0a6d8b228b7ad1ee799ed57280576c18fdfcbe2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f099d6e425c5d64b48431a0a6d8b228b7ad1ee799ed57280576c18fdfcbe2d->enter($__internal_d4f099d6e425c5d64b48431a0a6d8b228b7ad1ee799ed57280576c18fdfcbe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8da56c27c22f413960dc3507370b84c82164c145366724ba8d8cba19e6933162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da56c27c22f413960dc3507370b84c82164c145366724ba8d8cba19e6933162->enter($__internal_8da56c27c22f413960dc3507370b84c82164c145366724ba8d8cba19e6933162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8da56c27c22f413960dc3507370b84c82164c145366724ba8d8cba19e6933162->leave($__internal_8da56c27c22f413960dc3507370b84c82164c145366724ba8d8cba19e6933162_prof);

        
        $__internal_d4f099d6e425c5d64b48431a0a6d8b228b7ad1ee799ed57280576c18fdfcbe2d->leave($__internal_d4f099d6e425c5d64b48431a0a6d8b228b7ad1ee799ed57280576c18fdfcbe2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32e90697f5229c50bc06e2c418810aef8d52e0a3ab27e2d505f8fbe95c386798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e90697f5229c50bc06e2c418810aef8d52e0a3ab27e2d505f8fbe95c386798->enter($__internal_32e90697f5229c50bc06e2c418810aef8d52e0a3ab27e2d505f8fbe95c386798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e6d95986d58ac5a64fdf9d7a0fc93fe3290ebfb8bac9f21695e49829a453ed30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d95986d58ac5a64fdf9d7a0fc93fe3290ebfb8bac9f21695e49829a453ed30->enter($__internal_e6d95986d58ac5a64fdf9d7a0fc93fe3290ebfb8bac9f21695e49829a453ed30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6d95986d58ac5a64fdf9d7a0fc93fe3290ebfb8bac9f21695e49829a453ed30->leave($__internal_e6d95986d58ac5a64fdf9d7a0fc93fe3290ebfb8bac9f21695e49829a453ed30_prof);

        
        $__internal_32e90697f5229c50bc06e2c418810aef8d52e0a3ab27e2d505f8fbe95c386798->leave($__internal_32e90697f5229c50bc06e2c418810aef8d52e0a3ab27e2d505f8fbe95c386798_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89baac84375dd0a8fc2b5b36d9943d2bf42589709e102ba629e0d2dd6da816a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89baac84375dd0a8fc2b5b36d9943d2bf42589709e102ba629e0d2dd6da816a1->enter($__internal_89baac84375dd0a8fc2b5b36d9943d2bf42589709e102ba629e0d2dd6da816a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_811190662bc7b608868db860c0e143340d5c22fc336dc3f37c88cb1e5ee1eed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811190662bc7b608868db860c0e143340d5c22fc336dc3f37c88cb1e5ee1eed8->enter($__internal_811190662bc7b608868db860c0e143340d5c22fc336dc3f37c88cb1e5ee1eed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_811190662bc7b608868db860c0e143340d5c22fc336dc3f37c88cb1e5ee1eed8->leave($__internal_811190662bc7b608868db860c0e143340d5c22fc336dc3f37c88cb1e5ee1eed8_prof);

        
        $__internal_89baac84375dd0a8fc2b5b36d9943d2bf42589709e102ba629e0d2dd6da816a1->leave($__internal_89baac84375dd0a8fc2b5b36d9943d2bf42589709e102ba629e0d2dd6da816a1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
