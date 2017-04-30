<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3c1e989bc1e6d036adbf4dd72cdd5c30b24d7b1eb719f118ff343db1b4c092b8 extends Twig_Template
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
        $__internal_4713157e805a4da08f7755c50f069a501cf96f33c8fb22e43106082fdd7c888a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4713157e805a4da08f7755c50f069a501cf96f33c8fb22e43106082fdd7c888a->enter($__internal_4713157e805a4da08f7755c50f069a501cf96f33c8fb22e43106082fdd7c888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ed48da4d6aed9e45eff4a146368aca81fef47407904e62573d24b634abfe52be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed48da4d6aed9e45eff4a146368aca81fef47407904e62573d24b634abfe52be->enter($__internal_ed48da4d6aed9e45eff4a146368aca81fef47407904e62573d24b634abfe52be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4713157e805a4da08f7755c50f069a501cf96f33c8fb22e43106082fdd7c888a->leave($__internal_4713157e805a4da08f7755c50f069a501cf96f33c8fb22e43106082fdd7c888a_prof);

        
        $__internal_ed48da4d6aed9e45eff4a146368aca81fef47407904e62573d24b634abfe52be->leave($__internal_ed48da4d6aed9e45eff4a146368aca81fef47407904e62573d24b634abfe52be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
