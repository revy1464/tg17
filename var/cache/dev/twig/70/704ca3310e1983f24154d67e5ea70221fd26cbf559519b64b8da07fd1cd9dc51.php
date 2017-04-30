<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3159f0d967b285144a2b9f1ebbce44504ad0cf05866b700f2f437d5849d4bfef extends Twig_Template
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
        $__internal_d377116f992fc77c63ca718f6969d631d6e59b7b5b9f12df80a7fc6cd91f95d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d377116f992fc77c63ca718f6969d631d6e59b7b5b9f12df80a7fc6cd91f95d5->enter($__internal_d377116f992fc77c63ca718f6969d631d6e59b7b5b9f12df80a7fc6cd91f95d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2d9eeadafcbbb45f966f79b9f20fbd4f4747010fbe0d759b07162cd6ebd2968c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9eeadafcbbb45f966f79b9f20fbd4f4747010fbe0d759b07162cd6ebd2968c->enter($__internal_2d9eeadafcbbb45f966f79b9f20fbd4f4747010fbe0d759b07162cd6ebd2968c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d377116f992fc77c63ca718f6969d631d6e59b7b5b9f12df80a7fc6cd91f95d5->leave($__internal_d377116f992fc77c63ca718f6969d631d6e59b7b5b9f12df80a7fc6cd91f95d5_prof);

        
        $__internal_2d9eeadafcbbb45f966f79b9f20fbd4f4747010fbe0d759b07162cd6ebd2968c->leave($__internal_2d9eeadafcbbb45f966f79b9f20fbd4f4747010fbe0d759b07162cd6ebd2968c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
