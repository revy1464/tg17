<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dbe3596093799abfcc846c93c6aef5fe75cbd6a3fa3eb6d816cf5d49cfd6e8c5 extends Twig_Template
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
        $__internal_2a88d409fb303988974f2dd733e87e539ae57d30f35724fb3fd2906cde5baa98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a88d409fb303988974f2dd733e87e539ae57d30f35724fb3fd2906cde5baa98->enter($__internal_2a88d409fb303988974f2dd733e87e539ae57d30f35724fb3fd2906cde5baa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d3ae4f2c100c0ebece81351badfdede170a2de82e22d9ad7fa6aba1605a39b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ae4f2c100c0ebece81351badfdede170a2de82e22d9ad7fa6aba1605a39b81->enter($__internal_d3ae4f2c100c0ebece81351badfdede170a2de82e22d9ad7fa6aba1605a39b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2a88d409fb303988974f2dd733e87e539ae57d30f35724fb3fd2906cde5baa98->leave($__internal_2a88d409fb303988974f2dd733e87e539ae57d30f35724fb3fd2906cde5baa98_prof);

        
        $__internal_d3ae4f2c100c0ebece81351badfdede170a2de82e22d9ad7fa6aba1605a39b81->leave($__internal_d3ae4f2c100c0ebece81351badfdede170a2de82e22d9ad7fa6aba1605a39b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
