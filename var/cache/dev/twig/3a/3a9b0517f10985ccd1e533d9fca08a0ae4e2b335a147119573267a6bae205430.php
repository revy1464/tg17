<?php

/* base.html.twig */
class __TwigTemplate_cacf579b6000f723f17482e8fbcf34b983262632f4c235fe52e12381e458265c extends Twig_Template
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
        $__internal_455d689ad7dee9a9a46f20578083864632a121cb470f45e4c59a484ed5384a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455d689ad7dee9a9a46f20578083864632a121cb470f45e4c59a484ed5384a56->enter($__internal_455d689ad7dee9a9a46f20578083864632a121cb470f45e4c59a484ed5384a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f3c3a7a338e851836d8a8b33e285f6d58e3a957566a02add330015a4ccc5c15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c3a7a338e851836d8a8b33e285f6d58e3a957566a02add330015a4ccc5c15a->enter($__internal_f3c3a7a338e851836d8a8b33e285f6d58e3a957566a02add330015a4ccc5c15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_455d689ad7dee9a9a46f20578083864632a121cb470f45e4c59a484ed5384a56->leave($__internal_455d689ad7dee9a9a46f20578083864632a121cb470f45e4c59a484ed5384a56_prof);

        
        $__internal_f3c3a7a338e851836d8a8b33e285f6d58e3a957566a02add330015a4ccc5c15a->leave($__internal_f3c3a7a338e851836d8a8b33e285f6d58e3a957566a02add330015a4ccc5c15a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_424cd5119e22754b1350fc6714e181135f410c79c964292098b87f1ddd4668a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424cd5119e22754b1350fc6714e181135f410c79c964292098b87f1ddd4668a8->enter($__internal_424cd5119e22754b1350fc6714e181135f410c79c964292098b87f1ddd4668a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f4d2604efa30f47dc8c5399febf29969b78a2a7167b01cece7b1fa3ed053dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4d2604efa30f47dc8c5399febf29969b78a2a7167b01cece7b1fa3ed053dcb->enter($__internal_5f4d2604efa30f47dc8c5399febf29969b78a2a7167b01cece7b1fa3ed053dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f4d2604efa30f47dc8c5399febf29969b78a2a7167b01cece7b1fa3ed053dcb->leave($__internal_5f4d2604efa30f47dc8c5399febf29969b78a2a7167b01cece7b1fa3ed053dcb_prof);

        
        $__internal_424cd5119e22754b1350fc6714e181135f410c79c964292098b87f1ddd4668a8->leave($__internal_424cd5119e22754b1350fc6714e181135f410c79c964292098b87f1ddd4668a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acbf93a4ac116b885eac3893f735fbe8f4ffc4d4e071ff4ccf5c75a91f59f1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbf93a4ac116b885eac3893f735fbe8f4ffc4d4e071ff4ccf5c75a91f59f1e7->enter($__internal_acbf93a4ac116b885eac3893f735fbe8f4ffc4d4e071ff4ccf5c75a91f59f1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2d7eb75eafe9a5abb5bb8eaa5fec0601808fb3265fd5aab0fb3e0f37904da35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d7eb75eafe9a5abb5bb8eaa5fec0601808fb3265fd5aab0fb3e0f37904da35->enter($__internal_b2d7eb75eafe9a5abb5bb8eaa5fec0601808fb3265fd5aab0fb3e0f37904da35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b2d7eb75eafe9a5abb5bb8eaa5fec0601808fb3265fd5aab0fb3e0f37904da35->leave($__internal_b2d7eb75eafe9a5abb5bb8eaa5fec0601808fb3265fd5aab0fb3e0f37904da35_prof);

        
        $__internal_acbf93a4ac116b885eac3893f735fbe8f4ffc4d4e071ff4ccf5c75a91f59f1e7->leave($__internal_acbf93a4ac116b885eac3893f735fbe8f4ffc4d4e071ff4ccf5c75a91f59f1e7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bd7fa9910ee3df7a90a75debe11ba9814ef8b1b8faf33358d6c8d5ac4da1b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd7fa9910ee3df7a90a75debe11ba9814ef8b1b8faf33358d6c8d5ac4da1b9d->enter($__internal_2bd7fa9910ee3df7a90a75debe11ba9814ef8b1b8faf33358d6c8d5ac4da1b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed26fac05cdb46e536e0982dd758b9147e9ae6e1e0b699b92dcbed0a87adad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed26fac05cdb46e536e0982dd758b9147e9ae6e1e0b699b92dcbed0a87adad5->enter($__internal_8ed26fac05cdb46e536e0982dd758b9147e9ae6e1e0b699b92dcbed0a87adad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ed26fac05cdb46e536e0982dd758b9147e9ae6e1e0b699b92dcbed0a87adad5->leave($__internal_8ed26fac05cdb46e536e0982dd758b9147e9ae6e1e0b699b92dcbed0a87adad5_prof);

        
        $__internal_2bd7fa9910ee3df7a90a75debe11ba9814ef8b1b8faf33358d6c8d5ac4da1b9d->leave($__internal_2bd7fa9910ee3df7a90a75debe11ba9814ef8b1b8faf33358d6c8d5ac4da1b9d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67d366c7a49c57d06543976e0ad436cea6bd0198e416d5b72edfc4eb3cc323d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d366c7a49c57d06543976e0ad436cea6bd0198e416d5b72edfc4eb3cc323d8->enter($__internal_67d366c7a49c57d06543976e0ad436cea6bd0198e416d5b72edfc4eb3cc323d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f2c3c6b2de57b48448536b99885a40cf993094ad021e34b36d65c2461b740e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c3c6b2de57b48448536b99885a40cf993094ad021e34b36d65c2461b740e79->enter($__internal_f2c3c6b2de57b48448536b99885a40cf993094ad021e34b36d65c2461b740e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f2c3c6b2de57b48448536b99885a40cf993094ad021e34b36d65c2461b740e79->leave($__internal_f2c3c6b2de57b48448536b99885a40cf993094ad021e34b36d65c2461b740e79_prof);

        
        $__internal_67d366c7a49c57d06543976e0ad436cea6bd0198e416d5b72edfc4eb3cc323d8->leave($__internal_67d366c7a49c57d06543976e0ad436cea6bd0198e416d5b72edfc4eb3cc323d8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\AppServ\\www\\symfony3\\app\\Resources\\views\\base.html.twig");
    }
}
