<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_60f4ec78c4b7cd383730742837bb6b3740b4e14ca380bac4513551a7028251bb extends Twig_Template
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
        $__internal_879beeb1ca095beaea17e19dbcd3b78ddf7ec53b9920a6d856f71aec9e92e8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879beeb1ca095beaea17e19dbcd3b78ddf7ec53b9920a6d856f71aec9e92e8b6->enter($__internal_879beeb1ca095beaea17e19dbcd3b78ddf7ec53b9920a6d856f71aec9e92e8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_623d2d07e869fff530ab3ec4cac284d012025aa9934d88e8f24e88b5b73b2c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623d2d07e869fff530ab3ec4cac284d012025aa9934d88e8f24e88b5b73b2c15->enter($__internal_623d2d07e869fff530ab3ec4cac284d012025aa9934d88e8f24e88b5b73b2c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_879beeb1ca095beaea17e19dbcd3b78ddf7ec53b9920a6d856f71aec9e92e8b6->leave($__internal_879beeb1ca095beaea17e19dbcd3b78ddf7ec53b9920a6d856f71aec9e92e8b6_prof);

        
        $__internal_623d2d07e869fff530ab3ec4cac284d012025aa9934d88e8f24e88b5b73b2c15->leave($__internal_623d2d07e869fff530ab3ec4cac284d012025aa9934d88e8f24e88b5b73b2c15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
