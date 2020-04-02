<div class="equal-height-md">
    <div class="col-xs-12 col-md-4 gray-dark">
        <div class="content">
            <h2>Контакты</h2>
            <hr>
            <p class="postal-address spaced">
                <span class="name">DMREM</span>
                <br>
                <span class="email">dmres.service@gmail.com</span>
                <br>
                <span class="zip">220040</span><span class="city">Минск</span>
                <br>
                Белорусия
            </p>
            <p class="contact-media spaced">
                T <span class="phone-number">+375 29 775-04-65</span>
                <br>
                T <span class="fax-number">+375 29 547-01-70</span>
                <br>
                <a class="email" href="mailto:dmres.service@gmail.com">dmres.service@gmail.com</a>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-md-8 gray-dark">
        <form name="contact" method="POST"  action="/send-request" v-on:submit.prevent="sendRequest()">
            <label for="name" class="title">Имя</label>
            <input  id="name" class="input-md-6" type="text" required v-model="requestParts.formData.name">
            <label for="name" class="error"></label>

            <label for="email" class="title">E-Mail</label>
            <input id="email" name="email" class="input-md-6" type="email" required v-model="requestParts.formData.email">
            <label for="email" class="error"></label>
            <label for="message" class="title">Сообщение</label>
            <textarea id="message" name="message" class="input-sm-12" v-model="requestParts.formData.message"></textarea>
            <label for="message" class="error"></label>
            <div class="clearfix"></div>
            <button id="form-btn-submit" type="submit" :disabled=isDisabled() ><span class="fa fa-paper-plane"></span> Отправить</button>
            <div class="form-status" id="form-status-spinner">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                Sending..
            </div>
            <div class="form-status" id="form-status-ok">
                <i class="fa fa-check form-status-icn-ok" aria-hidden="true"></i> Message successfully sent.
            </div>
            <div class="form-status" id="form-status-fail">
                <i class="fa fa-exclamation-triangle form-status-icn-fail" aria-hidden="true"></i> Error occured while sending the message.
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
</div>