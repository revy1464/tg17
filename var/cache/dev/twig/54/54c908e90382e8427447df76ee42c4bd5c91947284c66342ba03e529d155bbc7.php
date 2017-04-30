<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_53839805dc5d40feee01e1e76eef794f27432b5592295ec3a47dc244c0f55ab2 extends Twig_Template
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
        $__internal_1e2b2b91055fb82ac51ca12a168c918c9e6db78fc08a961efd555a745cfb1d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2b2b91055fb82ac51ca12a168c918c9e6db78fc08a961efd555a745cfb1d76->enter($__internal_1e2b2b91055fb82ac51ca12a168c918c9e6db78fc08a961efd555a745cfb1d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c903f4ba91b067df8e772e9e687f7d06438b3da30d0eca50876f8019517afce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c903f4ba91b067df8e772e9e687f7d06438b3da30d0eca50876f8019517afce7->enter($__internal_c903f4ba91b067df8e772e9e687f7d06438b3da30d0eca50876f8019517afce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1e2b2b91055fb82ac51ca12a168c918c9e6db78fc08a961efd555a745cfb1d76->leave($__internal_1e2b2b91055fb82ac51ca12a168c918c9e6db78fc08a961efd555a745cfb1d76_prof);

        
        $__internal_c903f4ba91b067df8e772e9e687f7d06438b3da30d0eca50876f8019517afce7->leave($__internal_c903f4ba91b067df8e772e9e687f7d06438b3da30d0eca50876f8019517afce7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
