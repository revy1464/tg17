<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f2c75c71d755c20233abb6dae5681d4ad78b3f519dc5ee83edf32e5282f28ad7 extends Twig_Template
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
        $__internal_22d89249698391309b326061cfacfdfe9c9f9b539fe211c6f92078d1105ae9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d89249698391309b326061cfacfdfe9c9f9b539fe211c6f92078d1105ae9f6->enter($__internal_22d89249698391309b326061cfacfdfe9c9f9b539fe211c6f92078d1105ae9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_49789b143bb7a9060e3e4c7340ee9396ea231dd05b590eabbbe6aca3ccb257a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49789b143bb7a9060e3e4c7340ee9396ea231dd05b590eabbbe6aca3ccb257a6->enter($__internal_49789b143bb7a9060e3e4c7340ee9396ea231dd05b590eabbbe6aca3ccb257a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_22d89249698391309b326061cfacfdfe9c9f9b539fe211c6f92078d1105ae9f6->leave($__internal_22d89249698391309b326061cfacfdfe9c9f9b539fe211c6f92078d1105ae9f6_prof);

        
        $__internal_49789b143bb7a9060e3e4c7340ee9396ea231dd05b590eabbbe6aca3ccb257a6->leave($__internal_49789b143bb7a9060e3e4c7340ee9396ea231dd05b590eabbbe6aca3ccb257a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
