class ContactUsForm {
    constructor(form, options) {
        this.form = form
        let box = document.querySelector('.message_box');
   


        form.addEventListener('submit', this.onSubmit);


    }

    onSubmit = (event) => {
        const formWrapper = document.querySelector('.form-group');
        const formMessage = document.querySelector('.messege-sent');
        event.preventDefault();
        const status = document.querySelector('.form-mail')?.value;

        const form_data = this.getData();
        for (let index = 0; index < form.elements.length; index++) {
            const element = form.elements[index];
            form_data[element.name] = element.value
        }
        fetch(__mainData.ajaxUrl, {
            method: 'POST',
            body: new URLSearchParams(form_data),
        }).then(function (response) {
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            if (data.status === 'fail') {

                return box.innerHTML = '<h2 class="text-2xl">המייל שהזנת לא תקין !</h2>'
            }
            formWrapper.style.display = 'none';
            formMessage.style.display = 'block';
            // box.innerHTML = '<h2 class="text-2xl">ההודעה נשלחה בהצלחה, תודה</h2>'
            // box.innerHTML = '<div class="section8-form-message"><h1 class="lp-section8-title my-5">ההודעה נשלחה בצלחה!</h1><p class="lp_sec8_form-message-text">תודה שפניתם אלינו</p></div>'
        }).catch(function (error) {

        });
    }

    getData = () => {
        const data = {
            action: "contactus",
            url: window.location.href,
            nonce: __mainData.nonce,
        };

        Object.keys(this.form.elements).forEach((key) => {
            let element = this.form.elements[key];
            data[element.name] = element.value;
        });
        return data;
    };
}

export default ContactUsForm;