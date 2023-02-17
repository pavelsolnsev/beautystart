{% from './partners.php' import data as items %}

<section class="partners lazy" id="partners">
  <div class="container">
    <h2 class="section-title partners__title">Партнеры</h2>
    <div class="partners__wrapper">

      {% for item in items %}
      <div class="partners__item">
        <img src="img/partners/{{ item.icon | safe }}.png" alt="Партнер - {{ item.alt | safe }}">
      </div>
      {% endfor %}

    </div>
  </div>
</section>