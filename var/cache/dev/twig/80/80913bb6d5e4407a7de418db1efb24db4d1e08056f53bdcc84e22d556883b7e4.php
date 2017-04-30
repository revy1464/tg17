<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9781175d7d2f96a0c4395b170a783381bf7238ea78dcfd332ae3f67f5fa84a44 extends Twig_Template
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
        $__internal_ad33674eb8d33f240f827be01b05320dd882d0eca6e885327cf5047fa5ea5ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad33674eb8d33f240f827be01b05320dd882d0eca6e885327cf5047fa5ea5ecc->enter($__internal_ad33674eb8d33f240f827be01b05320dd882d0eca6e885327cf5047fa5ea5ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_162b6710571649ffddf946454f0bd6d465357c77ff840afabbfd4cf8a3d0d741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162b6710571649ffddf946454f0bd6d465357c77ff840afabbfd4cf8a3d0d741->enter($__internal_162b6710571649ffddf946454f0bd6d465357c77ff840afabbfd4cf8a3d0d741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ad33674eb8d33f240f827be01b05320dd882d0eca6e885327cf5047fa5ea5ecc->leave($__internal_ad33674eb8d33f240f827be01b05320dd882d0eca6e885327cf5047fa5ea5ecc_prof);

        
        $__internal_162b6710571649ffddf946454f0bd6d465357c77ff840afabbfd4cf8a3d0d741->leave($__internal_162b6710571649ffddf946454f0bd6d465357c77ff840afabbfd4cf8a3d0d741_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
