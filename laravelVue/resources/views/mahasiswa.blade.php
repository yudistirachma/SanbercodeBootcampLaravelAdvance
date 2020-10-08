<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>laravelVue</title>
</head>
<body>
    <div class="container">
        <h1>Mahasiswa</h1>
        <div id="app">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(data, index) in mahasiswas">
                    <th scope="row">@{{index}}</th>
                    <td>@{{data.nama}}</td>
                    <td>@{{data.jurusan}}</td>
                    <td><button type="button" class="btn btn-outline-danger" data-toggle="modal"data-target="#exampleModal">hapus</button></td>
                    <td><button type="button" class="btn btn-outline-warning" data-toggle="modal"data-target="#exampleModal">edit</button></td>
                    <td><button type="button" class="btn btn-outline-primary" data-toggle="modal"data-target="#exampleModal">tambah</button></td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{url('asaetsVue/vue.js')}}"></script>
<script src="{{url('asaetsVue/vue-resource.js')}}"></script>
<script>
    let v = new Vue({
        el : "#app",
        data : {
            isi : "",
            mahasiswas : []
        },
        methods : {
            store : function () {
                this.$http.post('/api').then(response => {
                this.mahasiswas = response.body;
            });
            },
            update : function () {
                
                
            },
            delete : function () {
                
            }
        },
        mounted : function () {
            this.$http.get('/api').then(response => {
            this.mahasiswas = response.body;
            });
        }
    });
</script>
</html>