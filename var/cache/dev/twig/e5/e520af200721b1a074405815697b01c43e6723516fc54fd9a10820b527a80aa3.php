<?php

/* ::base.html.twig */
class __TwigTemplate_ed670b1aee3e66b8ce31e5932f55a332c35f0ac82419849f8f18b38bb46e527f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb40396e42633c02cbbac21df4ff81a4149fa9cde6ec4787481ed5b097f5487e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb40396e42633c02cbbac21df4ff81a4149fa9cde6ec4787481ed5b097f5487e->enter($__internal_fb40396e42633c02cbbac21df4ff81a4149fa9cde6ec4787481ed5b097f5487e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cdbd984d2a7cdc0c169d46b364077adf57530208b7074cf9e198afab1390447b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbd984d2a7cdc0c169d46b364077adf57530208b7074cf9e198afab1390447b->enter($__internal_cdbd984d2a7cdc0c169d46b364077adf57530208b7074cf9e198afab1390447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fb40396e42633c02cbbac21df4ff81a4149fa9cde6ec4787481ed5b097f5487e->leave($__internal_fb40396e42633c02cbbac21df4ff81a4149fa9cde6ec4787481ed5b097f5487e_prof);

        
        $__internal_cdbd984d2a7cdc0c169d46b364077adf57530208b7074cf9e198afab1390447b->leave($__internal_cdbd984d2a7cdc0c169d46b364077adf57530208b7074cf9e198afab1390447b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_263b7059a370ba30410537caf6acbb73be4f10fb4e45b720d6b0fd44c815266a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263b7059a370ba30410537caf6acbb73be4f10fb4e45b720d6b0fd44c815266a->enter($__internal_263b7059a370ba30410537caf6acbb73be4f10fb4e45b720d6b0fd44c815266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a33d016adff1a96c2e4529a23a571a7eb122b19cb63a9d927f25ec5e502867e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a33d016adff1a96c2e4529a23a571a7eb122b19cb63a9d927f25ec5e502867e->enter($__internal_0a33d016adff1a96c2e4529a23a571a7eb122b19cb63a9d927f25ec5e502867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0a33d016adff1a96c2e4529a23a571a7eb122b19cb63a9d927f25ec5e502867e->leave($__internal_0a33d016adff1a96c2e4529a23a571a7eb122b19cb63a9d927f25ec5e502867e_prof);

        
        $__internal_263b7059a370ba30410537caf6acbb73be4f10fb4e45b720d6b0fd44c815266a->leave($__internal_263b7059a370ba30410537caf6acbb73be4f10fb4e45b720d6b0fd44c815266a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5772b784ed72956161c6bafc3e82c0aaae929acb1a07e9a621692e173494498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5772b784ed72956161c6bafc3e82c0aaae929acb1a07e9a621692e173494498->enter($__internal_b5772b784ed72956161c6bafc3e82c0aaae929acb1a07e9a621692e173494498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ea535e2de44c6367655ea69bf3fcdb90e568274cc5974d6d721d1a19d40b045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea535e2de44c6367655ea69bf3fcdb90e568274cc5974d6d721d1a19d40b045->enter($__internal_0ea535e2de44c6367655ea69bf3fcdb90e568274cc5974d6d721d1a19d40b045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ea535e2de44c6367655ea69bf3fcdb90e568274cc5974d6d721d1a19d40b045->leave($__internal_0ea535e2de44c6367655ea69bf3fcdb90e568274cc5974d6d721d1a19d40b045_prof);

        
        $__internal_b5772b784ed72956161c6bafc3e82c0aaae929acb1a07e9a621692e173494498->leave($__internal_b5772b784ed72956161c6bafc3e82c0aaae929acb1a07e9a621692e173494498_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4897905b1bf4150e82e9853b8e358707405f658d3841056a7b207b1173acdc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4897905b1bf4150e82e9853b8e358707405f658d3841056a7b207b1173acdc31->enter($__internal_4897905b1bf4150e82e9853b8e358707405f658d3841056a7b207b1173acdc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3151ef17320c1a37d042e0a94bd0531d0cb594d6f65f5017dd7d238c46c1053e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3151ef17320c1a37d042e0a94bd0531d0cb594d6f65f5017dd7d238c46c1053e->enter($__internal_3151ef17320c1a37d042e0a94bd0531d0cb594d6f65f5017dd7d238c46c1053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3151ef17320c1a37d042e0a94bd0531d0cb594d6f65f5017dd7d238c46c1053e->leave($__internal_3151ef17320c1a37d042e0a94bd0531d0cb594d6f65f5017dd7d238c46c1053e_prof);

        
        $__internal_4897905b1bf4150e82e9853b8e358707405f658d3841056a7b207b1173acdc31->leave($__internal_4897905b1bf4150e82e9853b8e358707405f658d3841056a7b207b1173acdc31_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ac452a89a29bc4d2efad8ff316559ac415b38473f913fad65bba8cfa4f035fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac452a89a29bc4d2efad8ff316559ac415b38473f913fad65bba8cfa4f035fe->enter($__internal_6ac452a89a29bc4d2efad8ff316559ac415b38473f913fad65bba8cfa4f035fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_099a7e52abf2274fff5cc1f40423e7a361a7f1c15589bd647a33468210721356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099a7e52abf2274fff5cc1f40423e7a361a7f1c15589bd647a33468210721356->enter($__internal_099a7e52abf2274fff5cc1f40423e7a361a7f1c15589bd647a33468210721356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_099a7e52abf2274fff5cc1f40423e7a361a7f1c15589bd647a33468210721356->leave($__internal_099a7e52abf2274fff5cc1f40423e7a361a7f1c15589bd647a33468210721356_prof);

        
        $__internal_6ac452a89a29bc4d2efad8ff316559ac415b38473f913fad65bba8cfa4f035fe->leave($__internal_6ac452a89a29bc4d2efad8ff316559ac415b38473f913fad65bba8cfa4f035fe_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\AppServ\\www\\symfony3\\app/Resources\\views/base.html.twig");
    }
}
