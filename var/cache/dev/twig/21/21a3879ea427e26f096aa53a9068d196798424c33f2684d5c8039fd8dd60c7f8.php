<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact.html.twig */
class __TwigTemplate_3dde58d1633974f8344f416b1ee997b4f46a5ca7a1810fcebc8327a32921af82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
                <!-- Page Add Section Begin -->
                <section class=\"page-add\">
                        <div class=\"container\">
                                <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                                <div class=\"page-breadcrumb\">
                                                        <h2>Contact us<span>.</span></h2>
                                                </div>
                                        </div>
                                        <div class=\"col-lg-8\">
                                                <img src=\"img/add.jpg\" alt=\"\">
                                        </div>
                                </div>
                        </div>
                </section>
                <!-- Page Add Section End -->

                <!-- Contact Section Begin -->
                <div class=\"contact-section\">
                        <div class=\"container\">
                                <div class=\"row\">
                                        <div class=\"col-lg-8\">
                                                <form action=\"#\" class=\"contact-form\">
                                                        <div class=\"row\">
                                                                <div class=\"col-lg-6\">
                                                                        <input type=\"text\" placeholder=\"First Name\">
                                                                </div>
                                                                <div class=\"col-lg-6\">
                                                                        <input type=\"text\" placeholder=\"Last Name\">
                                                                </div>
                                                                <div class=\"col-lg-12\">
                                                                        <input type=\"email\" placeholder=\"E-mail\">
                                                                        <input type=\"text\" placeholder=\"Subject\">
                                                                        <textarea placeholder=\"Message\"></textarea>
                                                                </div>
                                                                <div class=\"col-lg-12 text-right\">
                                                                        <button type=\"submit\">Send message</button>
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                        <div class=\"col-lg-3 offset-lg-1\">
                                                <div class=\"contact-widget\">
                                                        <div class=\"cw-item\">
                                                                <h5>Location</h5>
                                                                <ul>
                                                                        <li>1525 Awesome Lane, </li>
                                                                        <li>Los Angeles, CA</li>
                                                                </ul>
                                                        </div>
                                                        <div class=\"cw-item\">
                                                                <h5>Phone</h5>
                                                                <ul>
                                                                        <li>+1 (603)535-4592</li>
                                                                        <li>+1 (603)535-4556</li>
                                                                </ul>
                                                        </div>
                                                        <div class=\"cw-item\">
                                                                <h5>E-mail</h5>
                                                                <ul>
                                                                        <li>contact@violetstore.com</li>
                                                                        <li>www.violetstore.com</li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class=\"map\">
                                        <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                        <iframe
                                                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd\"
                                                                height=\"560\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- Contact Section End -->

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

        {% block body %}

                <!-- Page Add Section Begin -->
                <section class=\"page-add\">
                        <div class=\"container\">
                                <div class=\"row\">
                                        <div class=\"col-lg-4\">
                                                <div class=\"page-breadcrumb\">
                                                        <h2>Contact us<span>.</span></h2>
                                                </div>
                                        </div>
                                        <div class=\"col-lg-8\">
                                                <img src=\"img/add.jpg\" alt=\"\">
                                        </div>
                                </div>
                        </div>
                </section>
                <!-- Page Add Section End -->

                <!-- Contact Section Begin -->
                <div class=\"contact-section\">
                        <div class=\"container\">
                                <div class=\"row\">
                                        <div class=\"col-lg-8\">
                                                <form action=\"#\" class=\"contact-form\">
                                                        <div class=\"row\">
                                                                <div class=\"col-lg-6\">
                                                                        <input type=\"text\" placeholder=\"First Name\">
                                                                </div>
                                                                <div class=\"col-lg-6\">
                                                                        <input type=\"text\" placeholder=\"Last Name\">
                                                                </div>
                                                                <div class=\"col-lg-12\">
                                                                        <input type=\"email\" placeholder=\"E-mail\">
                                                                        <input type=\"text\" placeholder=\"Subject\">
                                                                        <textarea placeholder=\"Message\"></textarea>
                                                                </div>
                                                                <div class=\"col-lg-12 text-right\">
                                                                        <button type=\"submit\">Send message</button>
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                        <div class=\"col-lg-3 offset-lg-1\">
                                                <div class=\"contact-widget\">
                                                        <div class=\"cw-item\">
                                                                <h5>Location</h5>
                                                                <ul>
                                                                        <li>1525 Awesome Lane, </li>
                                                                        <li>Los Angeles, CA</li>
                                                                </ul>
                                                        </div>
                                                        <div class=\"cw-item\">
                                                                <h5>Phone</h5>
                                                                <ul>
                                                                        <li>+1 (603)535-4592</li>
                                                                        <li>+1 (603)535-4556</li>
                                                                </ul>
                                                        </div>
                                                        <div class=\"cw-item\">
                                                                <h5>E-mail</h5>
                                                                <ul>
                                                                        <li>contact@violetstore.com</li>
                                                                        <li>www.violetstore.com</li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class=\"map\">
                                        <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                        <iframe
                                                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd\"
                                                                height=\"560\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- Contact Section End -->

        {% endblock %}

", "contact.html.twig", "C:\\wamp64\\www\\marketplace\\templates\\contact.html.twig");
    }
}
