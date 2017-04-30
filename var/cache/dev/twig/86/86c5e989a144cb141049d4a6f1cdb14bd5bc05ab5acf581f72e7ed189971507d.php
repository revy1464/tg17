<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_12070d718bfc51e8a51c7abb3735953deaf59e9121363fd43fe8f77c18067e86 extends Twig_Template
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
        $__internal_a4833b18b672f84f64c8c25675a6d6bb491a7775753676f0caac50afa7f1296c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4833b18b672f84f64c8c25675a6d6bb491a7775753676f0caac50afa7f1296c->enter($__internal_a4833b18b672f84f64c8c25675a6d6bb491a7775753676f0caac50afa7f1296c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_17c03c212645053507b2f659673020330216eb2b2451bf5255bc0077bd7d469e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c03c212645053507b2f659673020330216eb2b2451bf5255bc0077bd7d469e->enter($__internal_17c03c212645053507b2f659673020330216eb2b2451bf5255bc0077bd7d469e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a4833b18b672f84f64c8c25675a6d6bb491a7775753676f0caac50afa7f1296c->leave($__internal_a4833b18b672f84f64c8c25675a6d6bb491a7775753676f0caac50afa7f1296c_prof);

        
        $__internal_17c03c212645053507b2f659673020330216eb2b2451bf5255bc0077bd7d469e->leave($__internal_17c03c212645053507b2f659673020330216eb2b2451bf5255bc0077bd7d469e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
