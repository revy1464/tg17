<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_633e562032fc2c207cb7b9d09c6a739a81d66b6c442451a74eeb29393ef2e537 extends Twig_Template
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
        $__internal_78483ac565b393542003fde941db4a965ee8b182fd901cf2430ad234c530d9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78483ac565b393542003fde941db4a965ee8b182fd901cf2430ad234c530d9c4->enter($__internal_78483ac565b393542003fde941db4a965ee8b182fd901cf2430ad234c530d9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_067b1fb8459c9ee0bb9064b9b2bcbe88f9809490b35430d70de95da7c31ec8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067b1fb8459c9ee0bb9064b9b2bcbe88f9809490b35430d70de95da7c31ec8eb->enter($__internal_067b1fb8459c9ee0bb9064b9b2bcbe88f9809490b35430d70de95da7c31ec8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_78483ac565b393542003fde941db4a965ee8b182fd901cf2430ad234c530d9c4->leave($__internal_78483ac565b393542003fde941db4a965ee8b182fd901cf2430ad234c530d9c4_prof);

        
        $__internal_067b1fb8459c9ee0bb9064b9b2bcbe88f9809490b35430d70de95da7c31ec8eb->leave($__internal_067b1fb8459c9ee0bb9064b9b2bcbe88f9809490b35430d70de95da7c31ec8eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
