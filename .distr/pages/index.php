{% extends "default.php" %}

{% block blocks %}
  {% include 'header/block.php' %}
  {% include 'main/block.php' %}
  {% include 'form-block/block.php' %}
  {% include 'teachers/block.php' %}
  {% include 'form-block/block.php' %}
  {% include 'program/block.php' %}
  {% include 'format/block.php' %}
  {% include 'get/block.php' %}
  <?php if($version != 'noprice') { ?>
    {% include 'price/block.php' %}
  <?php } ?>
  {% include 'partners/block.php' %}
  {% include 'contacts/block.php' %}
  {% include 'synergy/block.php' %}
  {% include 'bottom/block.php' %}
  {% include 'footer/block.php' %}
{% endblock %}

{% block popups %}
{% include 'popup/popup.php' %}
{% endblock %}