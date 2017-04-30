<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_84d8e4234ad8da65ead528aca2feb7c0ec16b867fc9e73a841cdd2f377dc8b9a extends Twig_Template
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
        $__internal_eb846145678a8877b111c32928fce4c243cb23d1c7a7aeec9c5b4c540d27570f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb846145678a8877b111c32928fce4c243cb23d1c7a7aeec9c5b4c540d27570f->enter($__internal_eb846145678a8877b111c32928fce4c243cb23d1c7a7aeec9c5b4c540d27570f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5722a577b2920dc81afb00540c959f30a7867c081ed8782e07a9dbe867613b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5722a577b2920dc81afb00540c959f30a7867c081ed8782e07a9dbe867613b3f->enter($__internal_5722a577b2920dc81afb00540c959f30a7867c081ed8782e07a9dbe867613b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_eb846145678a8877b111c32928fce4c243cb23d1c7a7aeec9c5b4c540d27570f->leave($__internal_eb846145678a8877b111c32928fce4c243cb23d1c7a7aeec9c5b4c540d27570f_prof);

        
        $__internal_5722a577b2920dc81afb00540c959f30a7867c081ed8782e07a9dbe867613b3f->leave($__internal_5722a577b2920dc81afb00540c959f30a7867c081ed8782e07a9dbe867613b3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
