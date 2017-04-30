<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6023dfddd742055927c2478bd8aca76cd5d258ed0deeafefe067b10a6c6dc2c0 extends Twig_Template
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
        $__internal_4c5691bb0f4b40db519156efce6f32b7bd802b224d1ea83dbb14d899e02d0fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5691bb0f4b40db519156efce6f32b7bd802b224d1ea83dbb14d899e02d0fe6->enter($__internal_4c5691bb0f4b40db519156efce6f32b7bd802b224d1ea83dbb14d899e02d0fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e8b2534f0b771e02b9ebbdd576d04700bd2630a4d81373d42e700f29f4c2bd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b2534f0b771e02b9ebbdd576d04700bd2630a4d81373d42e700f29f4c2bd78->enter($__internal_e8b2534f0b771e02b9ebbdd576d04700bd2630a4d81373d42e700f29f4c2bd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4c5691bb0f4b40db519156efce6f32b7bd802b224d1ea83dbb14d899e02d0fe6->leave($__internal_4c5691bb0f4b40db519156efce6f32b7bd802b224d1ea83dbb14d899e02d0fe6_prof);

        
        $__internal_e8b2534f0b771e02b9ebbdd576d04700bd2630a4d81373d42e700f29f4c2bd78->leave($__internal_e8b2534f0b771e02b9ebbdd576d04700bd2630a4d81373d42e700f29f4c2bd78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
