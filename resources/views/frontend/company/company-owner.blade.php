<div id="owner" style="min-height: 250px">

    <h2 class="text-center" v-if="div===1"> Firmanın Sahibi Siz Misiniz?</h2>
    <h2 class="text-center" v-if="div===2">Form Alanını Lütfen Doldurunuz</h2>
    <h2 class="text-center" v-if="div===3">Firma sahibi siz seniz aşağıda bulunan giriş yap butonuna tıklayarak oradan kayıtlı mail adresinizi ile şifre sıfırlama isteğinde bulunarak sizin mail adresinize gelecek olan şifre sıfırlama maili ile şifrenizi sıfırladıktan sonra şirket bilgilerinizi güncelleye bilirsiniz</h2>
    
    <div class="col-md-12 is-user-company-owner" v-if="div===1">
        <p class="text-justify">Firma sahibi iseniz lütfen ilerleyiniz.
            Firma sahibi siz seniz aşağıda bulunan giriş yap butonuna tıklayarak oradan kayıtlı mail adresinizi ile şifre sıfırlama isteğinde bulunarak sizin mail adresinize gelecek olan şifre sıfırlama maili ile şifrenizi sıfırladıktan sonra şirket bilgilerinizi güncelleye bilirsiniz
    </div>
    
    <div class="is-user-company-owner" v-if="div===2">
        <form action="{{ route('owner-company',$company->id) }}" method="post">
            @csrf
            <div class="form-group">
                <div class="col-10">
                    <label for="fullname">İsim Soyisim : </label>
                    <input type="text" name="fullname" id="fullname" class="control input_owner">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email : 
                    <input type="text" name="email" id="email" class="form-control input_owner">
                </label>
            </div>
            
            <div class="form-group">
                <label for="phone">Telefon : 
                    <input type="text" name="phone" id="phone" class="form-control input_owner">
                </label>
            </div>

            <div class="form-group">
                <label for="message">Mesaj : 
                    <textarea type="text" name="message" id="message" class="form-control input_owner"></textarea>
                </label>
            </div>
            <button class="company-owner-submit-button" @click="send()" v-if="div===2">GÖNDER</button>
        </form>
    </div>

    <div class="is-user-company-owner" v-if="div===3">
        Firma sahibi siz seniz aşağıda bulunan giriş yap butonuna tıklayarak oradan kayıtlı mail adresinizi ile şifre sıfırlama isteğinde bulunarak sizin mail adresinize gelecek olan şifre sıfırlama maili ile şifrenizi sıfırladıktan sonra şirket bilgilerinizi güncelleye bilirsiniz
    </div>

    <div class="buttons">
        <button class="company-owner-next-button" @click="next()" v-if="div<=1"
                :disabled="disabled_next_button || (password!==password_confirmation)">İLERİ
        </button>
    </div>


</div>





