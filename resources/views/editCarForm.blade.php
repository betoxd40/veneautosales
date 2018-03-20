<!-- Modal-->
<div id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title text-orange">Modify Car</strong>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form  method="POST" v-on:submit.prevent="updateCar(fillCar.id)">
                    
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Make</label>
                            <input type="text" class="form-control" name="name" v-model="fillCar.name" required>
                        </div>
                        
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Type</label>
                            <input  type="text" class="form-control" name="type" v-model="fillCar.type" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Model</label>
                            <input type="text" class="form-control" name="model" v-model="fillCar.model" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Trim</label>
                            <input type="text" class="form-control" name="trim" v-model="fillCar.trim" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Body</label>
                            <input type="text" placeholder="Body" class="form-control" name="body" v-model="fillCar.body" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Exterior</label>
                            <input type="text" class="form-control" name="exterior" v-model="fillCar.exterior" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Interior</label>
                            <input type="text" class="form-control" name="interior" v-model="fillCar.interior" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Doors</label>
                            <input type="text" class="form-control" name="doors" v-model="fillCar.doors" title="Enter the number of doors of the vehicle. for example: 1, 2, 4, 6" pattern="[0-9]+" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Vin</label>
                            <input type="text" class="form-control" name="vin" v-model="fillCar.vin" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Mileage</label>
                            <input type="text" class="form-control" name="mileage" v-model="fillCar.mileage" title="Enter the correct vehicle mileage. for example: 0, 342453, 212343" pattern="[0-9]+" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Engine</label>
                            <input type="text" class="form-control" name="engine" v-model="fillCar.engine" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Fuel</label>
                            <select class="form-control" name="fuel" v-model="fillCar.fuel" required>
                                <option>Gas</option>
                                <option>Hybrid</option>
                                <option>Electric</option>
                            </select>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Drive</label>
                            <input type="text" class="form-control" name="drive" v-model="fillCar.drive" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Mpg</label>
                            <input type="text" class="form-control" name="mpg" v-model="fillCar.mpg" title="Enter the correct MPG of the vehicle. for example: 367, 230, 51, 21" pattern="[0-9]+" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Year</label>
                            <input type="text" class="form-control" name="year" v-model="fillCar.year" title="Enter the year of the vehicle. for example: 1983, 1999, 2012, 2017" pattern="[0-9]+" required>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="form-control-label">Price</label>
                            <input type="text" class="form-control" name="price" v-model="fillCar.price" title="Enter the price of the vehicle. for example: 500$, 10000.00$, 20000.5$" pattern="^[0-9]*\.?[0-9]*$" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-6">
                          <label class="form-control-label">Code</label>
                          <input type="text" placeholder="Code" class="form-control" name="code" v-model="fillCar.code" required>
                        </div>

                        <div class="form-group col-12">
                          <label class="form-control-label">Comments</label>
                          <textarea placeholder="comments" class="form-control" name="comments" v-model="fillCar.comments"></textarea>
                        </div>
                       
                      </div>
                    <hr>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-control-label h5 text-white">Main Image</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <img :src="fillCar.mainImg" class="img-fluid">
                            </div>
                            <div class="col-6 d-flex flex-column">
                                <label class="form-control-label text-white">Change main image</label>
                                <small class="help-block-none text-white">
                                    Select the image you want to replace with the current image, and then save the changes.</small>
                                <input type="file" placeholder="Imagen principal" id="main_image" name="main_image" accept="image/png,image/jpeg" @change="imageChangedCar">
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-control-label h5 text-white">Secondary Images</label>
                                </div>
                            </div>
                            <div v-for="imgSecondary in fillCar.secondaryImg">
                                <div class="row py-3">
                                    <div class="col-6">
                                        <img :src="imgSecondary" class="img-fluid">
                                    </div>
                                    <div class="col-6 d-flex flex-column">
                                        <a href="#" :id="imgSecondary" @click="deleteSecundary(imgSecondary)">Delete image</a>
                                    </div>
                                </div>
                            </div>

                            
                            <label class="btn btn-primary" style="border-radius: 100px; font-weight: bold;" for="newImg">+</label>
                            <input type="file" id="newImg"  @change="addImg" style="visibility:hidden;" multiple>
                            <div class="showImage pt-2">

                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Save changes">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    </div>
            </form> {{-- <pre style="color: white">@{{$data}}</pre> --}}
            </div>

        </div>
    </div>
</div>

</section>