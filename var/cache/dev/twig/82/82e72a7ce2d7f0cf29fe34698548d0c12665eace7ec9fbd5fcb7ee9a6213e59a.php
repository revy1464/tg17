<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_81adae75faad2e6ba3c986a31a7c8b6df32ae167cdececdf2a290bce27b530a6 extends Twig_Template
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
        $__internal_347905c95f880f4793d5714acb066a1ec8727c76aa4351a04eb0bc3b4e2f27e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347905c95f880f4793d5714acb066a1ec8727c76aa4351a04eb0bc3b4e2f27e8->enter($__internal_347905c95f880f4793d5714acb066a1ec8727c76aa4351a04eb0bc3b4e2f27e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f5217d0e88c449c8951e207819aa328bc69dc42832d9335bf032b7c7d9ee45d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5217d0e88c449c8951e207819aa328bc69dc42832d9335bf032b7c7d9ee45d5->enter($__internal_f5217d0e88c449c8951e207819aa328bc69dc42832d9335bf032b7c7d9ee45d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_347905c95f880f4793d5714acb066a1ec8727c76aa4351a04eb0bc3b4e2f27e8->leave($__internal_347905c95f880f4793d5714acb066a1ec8727c76aa4351a04eb0bc3b4e2f27e8_prof);

        
        $__internal_f5217d0e88c449c8951e207819aa328bc69dc42832d9335bf032b7c7d9ee45d5->leave($__internal_f5217d0e88c449c8951e207819aa328bc69dc42832d9335bf032b7c7d9ee45d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
