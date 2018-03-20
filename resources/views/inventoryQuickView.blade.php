<!-- Modal-->

<div id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="row py-2">
                <div class="col-12">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close pr-4"><span aria-hidden="true">×</span></button>
                </div>
            </div>

        </div>
        <div class="modal-body">
            <div class="row">
               <div class="col-12 col-md-7" >
                   <div id="gallery">
                    <div id="main">
                        <div class="row text-center">
                            <div class="col-1  mt-sm-0 pt-4 pt-lg-5 mt-md-3 mt-lg-4 no-padding">
                                <i id="izq" class="fa fa-arrow-circle-left fa-2x fr" aria-hidden="true" @click="next"></i>
                            </div>
                            <div class="col-10">
                                <a :href="fillCar.actuallyImg">
                                    <img id="demo" :src="fillCar.actuallyImg"  :data-zoom-image="fillCar.actuallyImg" class="img-fluid"/>
                                </a>

                            </div>
                            <div class="col-1 mt-sm-0 pt-4 pt-lg-5 mt-md-3 mt-lg-4 no-padding">
                                <i id="der" class="fa fa-arrow-circle-right fa-2x" aria-hidden="true" @click="next"></i>
                            </div>
                        </div>
                    </div>
                    <div id="slide">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10 ">
                                <div id="secundary">
                                    <a href="#" v-for="img in fillSecondary" :data-image="img" :data-zoom-image="img"  @click="changeMainImage(img)">
                                        <img :src="img" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-1"></div>

                        </div>

                    </div>
                  </div>
                   <div class="col-12">
                       <div class="row">
                           <div class="col-12 pt-4">
                               <h3>Quick Review</h3>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-6">
                               <ul class="no-padding pl-3">
                                   <li class="py-1"><h6 class="text-oswald"><strong>Body: </strong>@{{ fillCar.body }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>Trim: </strong>@{{ fillCar.trim }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>Exterior: </strong>@{{ fillCar.exterior }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>Interior: </strong>@{{ fillCar.interior }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>Fuel: </strong>@{{ fillCar.fuel }}</h6></li>
                               </ul>
                           </div>
                           <div class="col-6">
                               <ul class="no-padding">
                                   <li class="py-1"><h6 class="text-oswald"><strong>Doors: </strong>@{{ fillCar.doors }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>Mileage: </strong>@{{ fillCar.mileage.toLocaleString() }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>MPG: </strong>@{{ fillCar.mpg.toLocaleString() }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>Engine: </strong>@{{ fillCar.engine }}</h6></li>
                                   <li class="py-1"><h6 class="text-oswald"><strong>Drive: </strong>@{{ fillCar.drive }}</h6></li>
                               </ul>
                           </div>
                       </div>
                   </div>


                </div>
               
                <div class="col-12 col-md-5">
                    <div class="row">
                        <div class="col-12">
                            <h3>@{{ fillCar.year }} @{{ fillCar.name }} @{{ fillCar.model }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pt-3">
                            <h5 class="text-oswald">Price: <span class="pull-right font-weight-bold">$ @{{ fillCar.price.toLocaleString() }}</span></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="hr-side-bar">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="add-specials">
                                <h3 class="pt-2 text-yellow">Add special features on this vehicle</h3>
                                <h6 class="text-oswald text-black pt-2">Your car is your best ally; therefore, it should be optimized to help you in every situation. That’s why we offer some special features that you can add to your vehicle to make it just great!</h6>
                                <ul class="no-padding pl-3 text-black">
                                    <li><h6 class="text-oswald text-black pt-3">GPS/Navigation System</h6></li>
                                    <li><h6 class="text-oswald text-black">Remote Starter</h6></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                                <div class="col-12">
                                    <h3 class="text-oswald text-black py-2">Share This Vehicle </h3>
                                </div>
                                <div class="row pl-3 pt-2">
                                    <div class="col-2">
                                        <a :href="urlForFacebook" target="_blank">
                                            <i class="fa fa-facebook fa-2x pr-3  text-black"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                      <a :href="urlForTwitter" target="_blank">
                                            <i class="fa fa-twitter fa-2x pr-3 text-black"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <a  data-dismiss="modal" data-toggle="modal" data-target="#exampleModal2" class="btn btn-sche text-white pointer">Schedule your appointment</a>

                        </div>
                    </div>



                </div>
            </div>

        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-12">
                    <a :href="/vehicle-information/ + fullViewsUrl" class="text-oswald pr-5 h5">View full details</a>
                </div>
            </div>
        </div>
    </div>


</div>

<div id="exampleModal2" class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="row py-2">
                <div class="col-12">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close pr-4"><span aria-hidden="true">×</span></button>
                </div>
            </div>
        </div>
        <div class="modal-body">
            <h2>Schedule your appointment</h2>
            <p>Please fill in your desired test date and your contact info. We’ll call/email you as soon as possible to give you further details about your appointment. And don’t worry about your information, it’ll be safe and we’ll share it with no one.</p>

            <form method="POST" v-on:submit.prevent="sendEmail(fillCar.code)">
                <div class="row pt-4">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="name" class="form-control" id="name" placeholder="Name..." v-model="name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="name" class="form-control" id="name" placeholder="Last name..." v-model="lastName">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="name" class="form-control" id="name" placeholder="Cellphone..." v-model="cellphone">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="name" placeholder="Email..." v-model="email">
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row pt-2">
                    <div class="col-12">
                        <h5 class="text-oswald pb-2">Schedule your Date</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control datepicker" id="date" placeholder="Select value" v-model="date">
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary text-oswald pointer">SEND</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

