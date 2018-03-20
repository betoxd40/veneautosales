<!-- Modal-->
<div id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left" >
    <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title text-white">Modify Car</strong>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p class="text-white" v-if="del">Are you sure to eliminate the car?</p>
                <p class="text-white" v-else >Are you sure to sale the car?</p>
                <form  method="POST" v-on:submit.prevent="deleteCar(deleteCarId)">
                    <
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Yes">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</section>