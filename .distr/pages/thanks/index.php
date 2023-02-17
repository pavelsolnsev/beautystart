{% extends 'default.php' %}

{% set BODY_CLASS = 'page-thanks' %}

{% block blocks %}
  {% include 'header/block.php' %}
  {% include 'thanks/block.php' %}
  {% include 'footer/block.php' %}
{% endblock %}