<footer class="{{ View::getFooterClass() }}">

    <div class="footer__items inner-content">

        <div class="footer__item">
            <h2 class="footer__title">{{ __('contacts.address.name') }}</h2>
            <p class="footer__description">
                {{ __('contacts.address.location') }}
                <br>
                {{ __('contacts.address.street') }}
            </p>
        </div>

        <div class="footer__item">
            <h2 class="footer__title">{{ __('contacts.director.name') }}:</h2>
            <p class="footer__description">
                {{ __('contacts.director.last-name') }}
                {{ __('contacts.director.first-name') }}
                {{ __('contacts.director.middle-name') }}
                <br>
                {{ __('contacts.director.tel') }}
                <br>
                {{ __('contacts.mail.email') }}
            </p>
        </div>

        <div class="footer__item">
            <h2 class="footer__title">{{ __('contacts.engineer.name') }}:</h2>
            <p class="footer__description">
                {{ __('contacts.engineer.last-name') }}
                {{ __('contacts.engineer.first-name') }}
                {{ __('contacts.engineer.middle-name') }}
                <br>
                {{ __('contacts.engineer.tel') }}
                <br>
                {{ __('contacts.mail.email') }}
            </p>
        </div>

    </div>

</footer>
