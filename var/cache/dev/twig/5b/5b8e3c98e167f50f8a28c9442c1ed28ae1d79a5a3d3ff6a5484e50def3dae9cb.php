<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ec4b762bc2a9d67212dd4ea5414bd39190d7d6ba1020ba6e208064e3816b8c0d extends Twig_Template
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
        $__internal_e555dcbafc4e41a2f1a6d506411fc790506f04826149e1479ebd058a1e9c1ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e555dcbafc4e41a2f1a6d506411fc790506f04826149e1479ebd058a1e9c1ea2->enter($__internal_e555dcbafc4e41a2f1a6d506411fc790506f04826149e1479ebd058a1e9c1ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4945eda83af12ee38843a01dad615fbb22538e1c61d5276f19394d2ba0ceb406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4945eda83af12ee38843a01dad615fbb22538e1c61d5276f19394d2ba0ceb406->enter($__internal_4945eda83af12ee38843a01dad615fbb22538e1c61d5276f19394d2ba0ceb406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e555dcbafc4e41a2f1a6d506411fc790506f04826149e1479ebd058a1e9c1ea2->leave($__internal_e555dcbafc4e41a2f1a6d506411fc790506f04826149e1479ebd058a1e9c1ea2_prof);

        
        $__internal_4945eda83af12ee38843a01dad615fbb22538e1c61d5276f19394d2ba0ceb406->leave($__internal_4945eda83af12ee38843a01dad615fbb22538e1c61d5276f19394d2ba0ceb406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
