    <article class="card">
        <figure class="card__figure">
            echo '<img src="'. $item['Img'] .'">';
        </figure>
        <section class="card__body">
            <ul class="card__categories">
                <li class="card__category card__category--gaming">Gaming</li>
            </ul>
            <header>
                <h2 class="card__heading">Wat heeft gamen verpest?</h2>
            </header>
            echo '<p class="card_p">'. $item['Content'] .'</p>';
        </section>

    </article>   