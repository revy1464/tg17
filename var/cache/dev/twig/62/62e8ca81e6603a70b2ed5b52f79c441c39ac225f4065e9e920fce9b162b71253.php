<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6933c1a269f5ebb2ab91156c4fdd38c99aa769be7bbda253785f2c5d18f25 extends Twig_Template
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
        $__internal_4b3c6236119937a5360422beaffe746fe60b0a07329ad36874d0d77739c91dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3c6236119937a5360422beaffe746fe60b0a07329ad36874d0d77739c91dc7->enter($__internal_4b3c6236119937a5360422beaffe746fe60b0a07329ad36874d0d77739c91dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a4ca604ac27f8d930db8961d3f6e23d4f81f34adc9aa98a61f9dffc35c7aca31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ca604ac27f8d930db8961d3f6e23d4f81f34adc9aa98a61f9dffc35c7aca31->enter($__internal_a4ca604ac27f8d930db8961d3f6e23d4f81f34adc9aa98a61f9dffc35c7aca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4b3c6236119937a5360422beaffe746fe60b0a07329ad36874d0d77739c91dc7->leave($__internal_4b3c6236119937a5360422beaffe746fe60b0a07329ad36874d0d77739c91dc7_prof);

        
        $__internal_a4ca604ac27f8d930db8961d3f6e23d4f81f34adc9aa98a61f9dffc35c7aca31->leave($__internal_a4ca604ac27f8d930db8961d3f6e23d4f81f34adc9aa98a61f9dffc35c7aca31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
