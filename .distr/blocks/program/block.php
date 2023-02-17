{% from './program.php' import data as items %}

<section class="program lazy" id="program">
  <div class="container">
    <h2 class="section-title program__title">Программа курса</h2>

    <div class="program__wrapper">

      {% for item in items %}
      <div class="program__item active">
        <!-- <div class="program__item-arrow arrow"></div> -->

        <div class="program__item-img">
          <img src="img/program/{{ item.pic | safe }}.png" alt="icon" class="">
        </div>

        <div class="program__item-question">
          <div class="program__item-title">{{ item.question | safe }}</div>
        </div>


        <div class="program__item-answer">
          <ul class="program__item-list">
            {% for point in item.answer %}
            <li class="program__item-point">{{ point | safe }}</li>
            {% endfor %}
          </ul>
        </div>

      </div>
      {% endfor %}

    </div>
  </div>
</section>