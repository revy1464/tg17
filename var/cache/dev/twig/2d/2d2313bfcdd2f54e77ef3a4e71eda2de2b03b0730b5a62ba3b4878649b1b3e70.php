<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e0f971210a2118e226bb84aee46a0abb2057b39af44c6fd69545236a42f8c632 extends Twig_Template
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
        $__internal_15c52f62f086f230d605f329ce054b6ccb80c6e27779a55305db6c138c9cad17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c52f62f086f230d605f329ce054b6ccb80c6e27779a55305db6c138c9cad17->enter($__internal_15c52f62f086f230d605f329ce054b6ccb80c6e27779a55305db6c138c9cad17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_473510d5ac315bd066d9ee06abb11969e5f73ce3613680a32326bc4f3d6ab170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473510d5ac315bd066d9ee06abb11969e5f73ce3613680a32326bc4f3d6ab170->enter($__internal_473510d5ac315bd066d9ee06abb11969e5f73ce3613680a32326bc4f3d6ab170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_15c52f62f086f230d605f329ce054b6ccb80c6e27779a55305db6c138c9cad17->leave($__internal_15c52f62f086f230d605f329ce054b6ccb80c6e27779a55305db6c138c9cad17_prof);

        
        $__internal_473510d5ac315bd066d9ee06abb11969e5f73ce3613680a32326bc4f3d6ab170->leave($__internal_473510d5ac315bd066d9ee06abb11969e5f73ce3613680a32326bc4f3d6ab170_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
