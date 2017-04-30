<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ec6d46555e2034d392cd4f045ddf46fc6f02ca06ac3658e287a7488bdcb299c3 extends Twig_Template
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
        $__internal_b56913c2c5c7c3692faded43b1d751f7b28082471d1056b4418ab2e7a17d274b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56913c2c5c7c3692faded43b1d751f7b28082471d1056b4418ab2e7a17d274b->enter($__internal_b56913c2c5c7c3692faded43b1d751f7b28082471d1056b4418ab2e7a17d274b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ba05d89cb4429cb16b7771c61ba9dcc096b786a29be3236c3d7df0b9383bbd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba05d89cb4429cb16b7771c61ba9dcc096b786a29be3236c3d7df0b9383bbd0b->enter($__internal_ba05d89cb4429cb16b7771c61ba9dcc096b786a29be3236c3d7df0b9383bbd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b56913c2c5c7c3692faded43b1d751f7b28082471d1056b4418ab2e7a17d274b->leave($__internal_b56913c2c5c7c3692faded43b1d751f7b28082471d1056b4418ab2e7a17d274b_prof);

        
        $__internal_ba05d89cb4429cb16b7771c61ba9dcc096b786a29be3236c3d7df0b9383bbd0b->leave($__internal_ba05d89cb4429cb16b7771c61ba9dcc096b786a29be3236c3d7df0b9383bbd0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
