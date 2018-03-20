
var vm = new Vue({
    el: '#car',
    data: {
        errors:'',
        newName: '',
        newType: '',
        newModel: '',
        newTrim: '',
        newBody: '',
        newExterior: '',
        newInterior: '',
        newDoors: '',
        newVin: '',
        newMileage: '',
        newEngine: '',
        newFuel: '',
        newDrive: '',
        newMpg: '',
        newYear: '',
        newPrice: '',
        newCode: '',
        newComments: '',
        newImgMain:'',
        newImgSecondary: [],


    },
    methods: {
        createCar: function() {
            var url = 'add-car-resource';
            axios.post(url, {
                name: this.newName,
                type: this.newType,
                model: this.newModel,
                trim: this.newTrim,
                body: this.newBody,
                exterior: this.newExterior,
                interior: this.newInterior,
                doors: this.newDoors,
                vin: this.newVin,
                mileage: this.newMileage,
                engine: this.newEngine,
                fuel: this.newFuel,
                drive: this.newDrive,
                mpg: this.newMpg,
                year: this.newYear,
                price: this.newPrice,
                code: this.newCode,
                comments: this.newComments,
                mainImg :this.newImgMain,
                secondaryImg :this.newImgSecondary,
            }).then(response => {

                this.newName = '';
                this.newType ='';
                this.newModel = '';
                this.newTrim = '';
                this.newBody = '';
                this.newExterior = '';
                this.newInterior = '';
                this.newDoors = '';
                this.newVin = '';
                this.newMileage = '';
                this.newEngine = '';
                this.newFuel = '';
                this.newDrive = '';
                this.newMpg = '';
                this.newYear = '';
                this.newPrice = '';
                this.newCode = '';
                this.newComments='';
                this.newImgMain = '';
                this.newImgSecondary.length=0;
                this.newImgSecondary=[];
                this.errors = '';
                $("input").val('');
                $('.showImage').empty();
                toastr.success('Car added successfully.');
        }).catch(error => {

                this.errors = 'Edit to be able to create successfully'
        });
        },

        imageChanged: function (e){
            
            var fileReader = new FileReader();
            fileReader.readAsDataURL(e.target.files[0]);
            fileReader.onload = (e) => {
                this.newImgMain = e.target.result;
            }
            
        },

        imageChangedMultiply: function (e){
            

            for(i=0; i<e.target.files.length; i++){
                var fileReader = new FileReader();
                fileReader.readAsDataURL(e.target.files[i]);
                fileReader.onload = (e) => {
                    this.newImgSecondary.push(e.target.result);
                }
            }

        }
    }
});

var vm2 = new Vue({
    el: '#modifyCar',
    created: function() {
        this.getCars();
    },
    data: {
        del: false,
        cars: [],
        fillCar: {'id': '', 'code': '' , 'name': '', 'type': '','model': '', 'trim': '','body': '', 'exterior': '','interior': '', 'doors': '','vin': '', 'mileage': '',
            'engine': '', 'fuel': '','drive': '', 'mpg': '','year': '', 'price': '','comments': '', 'imgMain': '','secondaryImg': [],'auxMainImg': '','auxSecundaryImg':[], 'newImg': []},
        errors: '',
        deleteCarId: '',
        search: ''
    },
    methods: {
        getCars: function() {
            var url = 'modify-car-resource';
            axios.get(url).then(response => {
                this.cars = response.data
            });
        },
        selectId: function (car,d){
            this.del=d;
            this.deleteCarId = car.id;
            $('#delete').modal('show');
        },
        editCar: function(car) {
            this.fillCar.id= car.id;
            this.fillCar.code= car.code;
            this.fillCar.name= car.name;
            this.fillCar.type= car.type;
            this.fillCar.model= car.model;
            this.fillCar.trim= car.trim;
            this.fillCar.body= car.body;
            this.fillCar.exterior= car.exterior;
            this.fillCar.interior= car.interior;
            this.fillCar.doors= car.doors;
            this.fillCar.vin= car.vin;
            this.fillCar.mileage= car.mileage;
            this.fillCar.engine= car.engine;
            this.fillCar.fuel= car.fuel;
            this.fillCar.drive= car.drive;
            this.fillCar.mpg= car.mpg;
            this.fillCar.year= car.year;
            this.fillCar.price= car.price;
            this.fillCar.comments=car.comments;
            this.fillCar.mainImg = car.mainImg;
            this.fillCar.secondaryImg = (car.secondaryImg=="") ? [] : car.secondaryImg.split('%%%%');
            this.fillCar.auxSecundaryImg.length=0;
            this.fillCar.auxSecundaryImg.length=[];
            this.fillCar.newImg.length=0;
            this.fillCar.newImg.length=[];
            $('.showImage').empty();
            $('#edit').modal('show');
        },
        updateCar: function(id) {
            var n=this.fillCar.newImg.length+this.fillCar.secondaryImg.length;
            if(n>100){
                toastr.error('The number of images of cars must not be greater than 100', 'Attention!');
            }
            else{
                 var url = 'modify-car-resource/' + id;
                 alert("Entro");
                 axios.put(url, this.fillCar).then(response => {
                 alert("Salio")
                    this.fillCar.auxSecundaryImg.length=0;
                    this.fillCar.newImg.length=0;
                    this.getCars();
                    this.fillCar.secondaryImg.length=0;
                    this.fillCar = {'id': '', 'code': '', 'name': '', 'type': '','model': '', 'trim': '','body': '', 'exterior': '','interior': '', 'doors': '','vin': '', 'mileage': '', 'engine': '', 'fuel': '','drive': '', 'mpg': '','year': '', 'price': '','comments':'' ,'imgMain': '','secondaryImg': [],'auxMainImg': '','auxSecundaryImg':[],'newImg':[]};
                    this.errors   = '';
                    $("input[type=file]").val('');
                    $('.showImage').empty();
                    $('#edit').modal('hide');
                    toastr.success('Successfully updated car.');
                }).catch(error => {
                    this.errors = 'Edit to be able to edit successfully';
                });
            }
        },
        deleteCar: function(id) {
            if(this.del)
                var url = 'modify-car-resource/' + id+'-'+'1';
            else
                var url = 'modify-car-resource/' + id+'-'+'0';

            axios.delete(url).then(response => { //eliminamos
                this.getCars(); //listamos
                this.deleteCarId = '';
                $('#delete').modal('hide');
                toastr.success('Removed correctly.'); //mensaje
        });
        },
        imageChangedCar: function (e){


            var fileReader = new FileReader();
            fileReader.readAsDataURL(e.target.files[0]);
            fileReader.onload = (e) => {
                this.fillCar.auxMainImg = e.target.result;
            }

        },
        deleteSecundary: function(ruta){

            var pos=this.fillCar.secondaryImg.indexOf(ruta);
            if(pos!=-1)
            {
                 this.fillCar.auxSecundaryImg.push(ruta);
                 this.fillCar.secondaryImg.splice(pos, 1);
            }else{
                alert('imagen no enconrada');
            }

        },
        addImg: function (e){

            for(i=0; i<e.target.files.length; i++){
                var fileReader = new FileReader();
                fileReader.readAsDataURL(e.target.files[i]);
                fileReader.onload = (e) => {
                    this.fillCar.newImg.push(e.target.result);
                }
            }

        }
    },
    computed: {
        filteredCars: function(){
            return this.cars.filter((car) => {
                return car.name.match(this.search) || car.code.match(this.search);
            });
        }
    }
});


var vm3 = new Vue({
    el: '#dashboardHome',
    created: function() {
        this.getInfo();
    },
    data: {
        nroCars: '',
        sales: '',
        eliminated: '',
        cars_requests: '',
        info:[]
    },
    methods: {
        getInfo: function() {
            var url = 'getStadistics';
            axios.get(url).then(response => {
                if(response.data[1] != 0){
                    this.nroCars = response.data[0];
                    this.sales = response.data[1][0].sales;
                    this.eliminated = response.data[1][0].eliminated;
                    this.cars_requests = response.data[2];
                }else{
                this.nroCars = response.data[0];
                this.sales = 0;
                this.eliminated = 0;
                this.cars_requests = response.data[2];
            }

        });
        }
    }
})

var vm4 = new Vue({
    el: '#add-user',
    data: {
        name: '',
        last_name: '',
        email: '',
        password: '',
        password_confirmation: '',
        errors: ''
    },
    methods: {
        addUser: function() {
            var url = 'add-user-resource';
            axios.post(url, {
                name: this.name,
                last_name: this.last_name,
                email: this.email,
                password: this.password
            }).then(response => {

                this.name = '';
                this.last_name ='';
                this.email = '';
                this.password = '';
                this.password_confirmation = '';

                $("input").val('');

                toastr.success('User successfully added.');
        }).catch(error => {

                this.errors = 'Edit to be able to create successfully'
        });
        }
    }
});
