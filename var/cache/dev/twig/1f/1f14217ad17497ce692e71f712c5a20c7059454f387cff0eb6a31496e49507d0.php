<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f3defe0f75614e153998bf8fb316ac33a171f8ae713cd81fba113152e65f9515 extends Twig_Template
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
        $__internal_bf1cfe0a3a66da4f77e1886ac1a4cd15934e0c339115cbfa406b7846fb5b93d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1cfe0a3a66da4f77e1886ac1a4cd15934e0c339115cbfa406b7846fb5b93d9->enter($__internal_bf1cfe0a3a66da4f77e1886ac1a4cd15934e0c339115cbfa406b7846fb5b93d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cd00aa0e622a49b62b820d874201a8523b9f97cf0c0395c209a4fabcbc05d55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd00aa0e622a49b62b820d874201a8523b9f97cf0c0395c209a4fabcbc05d55f->enter($__internal_cd00aa0e622a49b62b820d874201a8523b9f97cf0c0395c209a4fabcbc05d55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bf1cfe0a3a66da4f77e1886ac1a4cd15934e0c339115cbfa406b7846fb5b93d9->leave($__internal_bf1cfe0a3a66da4f77e1886ac1a4cd15934e0c339115cbfa406b7846fb5b93d9_prof);

        
        $__internal_cd00aa0e622a49b62b820d874201a8523b9f97cf0c0395c209a4fabcbc05d55f->leave($__internal_cd00aa0e622a49b62b820d874201a8523b9f97cf0c0395c209a4fabcbc05d55f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
