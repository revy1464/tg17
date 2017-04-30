<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ebb8106dc31eb97b3a188d8aa8937984ef45a6b8bb72ce572cb34f50ccab72be extends Twig_Template
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
        $__internal_3b24aae71b54f15bca80d4f7aff898697c83319d0084893ef8c9c89acd5f6bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b24aae71b54f15bca80d4f7aff898697c83319d0084893ef8c9c89acd5f6bb1->enter($__internal_3b24aae71b54f15bca80d4f7aff898697c83319d0084893ef8c9c89acd5f6bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4fc418a347b8f443b1015ddff8591586d8e0a6b73733a989e119e450c55d35a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc418a347b8f443b1015ddff8591586d8e0a6b73733a989e119e450c55d35a0->enter($__internal_4fc418a347b8f443b1015ddff8591586d8e0a6b73733a989e119e450c55d35a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3b24aae71b54f15bca80d4f7aff898697c83319d0084893ef8c9c89acd5f6bb1->leave($__internal_3b24aae71b54f15bca80d4f7aff898697c83319d0084893ef8c9c89acd5f6bb1_prof);

        
        $__internal_4fc418a347b8f443b1015ddff8591586d8e0a6b73733a989e119e450c55d35a0->leave($__internal_4fc418a347b8f443b1015ddff8591586d8e0a6b73733a989e119e450c55d35a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
