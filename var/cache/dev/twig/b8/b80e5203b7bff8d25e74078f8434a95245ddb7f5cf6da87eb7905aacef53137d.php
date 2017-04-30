<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_18527f90fd08c94a43f65264c68bddfb33529f5b8cd1d4b52676f822d711b258 extends Twig_Template
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
        $__internal_6f7f769e6d1c51a156cce19860470e5d75a3b6c75b0fdbeb9294b8e1f8f716d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7f769e6d1c51a156cce19860470e5d75a3b6c75b0fdbeb9294b8e1f8f716d2->enter($__internal_6f7f769e6d1c51a156cce19860470e5d75a3b6c75b0fdbeb9294b8e1f8f716d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_91ddd374961f9c493c18c8215ef225301ef7975e5d8e4b56bbf90f26fe6c53c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ddd374961f9c493c18c8215ef225301ef7975e5d8e4b56bbf90f26fe6c53c8->enter($__internal_91ddd374961f9c493c18c8215ef225301ef7975e5d8e4b56bbf90f26fe6c53c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6f7f769e6d1c51a156cce19860470e5d75a3b6c75b0fdbeb9294b8e1f8f716d2->leave($__internal_6f7f769e6d1c51a156cce19860470e5d75a3b6c75b0fdbeb9294b8e1f8f716d2_prof);

        
        $__internal_91ddd374961f9c493c18c8215ef225301ef7975e5d8e4b56bbf90f26fe6c53c8->leave($__internal_91ddd374961f9c493c18c8215ef225301ef7975e5d8e4b56bbf90f26fe6c53c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
