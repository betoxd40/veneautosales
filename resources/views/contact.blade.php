@extends('layouts.layoutMenu')

@section('content')

    <div id="banner-contact" class="container-fluid"></div>

    <div class="container" id="contact-x">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="tit2 text-center pt-5 pb-2">Send us a message!</h2>
            </div>
            <div class="col-12">
                <p class="text-center w-75 mx-auto">We’d love to hear from you. Please contact us by calling, using the form below or directly coming to our office.</p>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="row pt-4">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                        <h3 class="pl-2">Location</h3>
                    </div>
                    <div class="col-12">
                        <p>230 SW Cutoff, Worcester 01604</p>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                        <h3 class="pl-2">Call us!</h3>
                    </div>
                    <div class="col-12">
                        <p>Luis Sifontes (Owner) 774-330- 9044</p>
                    </div>
                    <div class="col-12">
                        <p>Gabriel Munoz (Owner) 774-239- 5286</p>
                    </div>
                </div>
            </div>
        </div>



        <form class="pb-5" method="POST" v-on:submit.prevent="sendEmail">
            <div class="row" class="justify-content-around">
                <div class="col-md-6 col-sm-12 pt-5 pb-4">
                    <input type="text" class="inputs form-control d-block mx-auto" id="name" v-model="name" placeholder="Name..." required>
                </div>

                <div class="col-md-6 col-sm-12 pt-sm-2 pt-md-5 pb-2">
                    <input type="text" class="inputs form-control d-block mx-auto" id="last_name" v-model="last_name" placeholder="Last name..." required>
                </div>
                <div class="col-md-6 pt-2 pb-0 pb-md-4">
                    <input type="text" class="inputs form-control d-block mx-auto" placeholder="Country..." id="country" v-model="country" required>
                </div>
                <div class="col-md-6 col-sm-12 pt-2 pb-2">
                    <input type="text" class="inputs form-control d-block mx-auto" placeholder="State..." id="state" v-model="state" required>
                </div>
                <div class="col-md-6 col-sm-12 pt-2 pb-0 pb-md-5">
                    <input type="text" class="inputs form-control d-block mx-auto" placeholder="Email..." id="email" v-model="email" required>
                </div>

                <div class="col-md-6 col-sm-12 pt-2 pb-3">
                    <input type="text" class="inputs form-control d-block mx-auto" placeholder="Cellphone..." id="cellphone" v-model="cellphone" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pb-4">
                    <textarea id="message" v-model="message" class="textarea form-control d-block"  rows="2" placeholder="Message..." required></textarea>
                </div>
            </div>
            <div class="row ">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary px-5 cursor-pointer">SEND</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="mensaje-email"></div>
                </div>
            </div>
        </form>


    </div>
    <script>
        var vm5 = new Vue({
            el: '#contact-x',
            data: {
                name: '',
                last_name: '',
                country: '',
                state: '',
                email: '',
                cellphone: '',
                message: ''
            },
            methods: {
                sendEmail: function() {
                    var url = 'contact-resource';
                    axios.post(url, {
                        name: this.name,
                        last_name: this.last_name,
                        country: this.country,
                        state: this.state,
                        email: this.email,
                        cellphone: this.cellphone,
                        message: this.message
                    }).then(response => {
                        this.name = '';
                        this.last_name ='';
                        this.country = '';
                        this.state = '';
                        this.email = '';
                        this.cellphone = '';
                        this.message = '';
                        $("input").val('');
                        swal("Thank you for contacting Veneautosales.", "Soon we will contact you as soon as possible.", "success");
                }).catch(error => {
                        document.getElementById('mensaje-email').innerHTML = '<p>ERROR</p>';
                });
                }
            }
        });
    </script>

@endsection

