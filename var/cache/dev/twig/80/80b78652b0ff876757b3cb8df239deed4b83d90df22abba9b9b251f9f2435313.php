<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a78a6ff1855a11fa56b9aa6f9e619d5d8d1b705a194d0b65fc2ec565b651ab79 extends Twig_Template
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
        $__internal_337d6c9fb3fa4ee4acdedaed9c1c2f796d1e4541dd95a18b1eb89cec28c700f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337d6c9fb3fa4ee4acdedaed9c1c2f796d1e4541dd95a18b1eb89cec28c700f5->enter($__internal_337d6c9fb3fa4ee4acdedaed9c1c2f796d1e4541dd95a18b1eb89cec28c700f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_97d3922bd703435d3e401dfeb1772b62b7b35cde2d7ea6f76401cd190282bb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d3922bd703435d3e401dfeb1772b62b7b35cde2d7ea6f76401cd190282bb6d->enter($__internal_97d3922bd703435d3e401dfeb1772b62b7b35cde2d7ea6f76401cd190282bb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_337d6c9fb3fa4ee4acdedaed9c1c2f796d1e4541dd95a18b1eb89cec28c700f5->leave($__internal_337d6c9fb3fa4ee4acdedaed9c1c2f796d1e4541dd95a18b1eb89cec28c700f5_prof);

        
        $__internal_97d3922bd703435d3e401dfeb1772b62b7b35cde2d7ea6f76401cd190282bb6d->leave($__internal_97d3922bd703435d3e401dfeb1772b62b7b35cde2d7ea6f76401cd190282bb6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
