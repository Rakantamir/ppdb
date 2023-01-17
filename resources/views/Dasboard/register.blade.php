<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Laptop_Lending</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">	
   </head>
  <body>

    <div class="container">
     <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4" style="background: #3F4E4F">
        <div class="d-flex flex-column align-items-middle justify-content-center">
        <img src="{{asset('assets/img/wikrama.jpeg')}}" 
        class="rounded-circle d-block m-auto" width="70">
        <div class="text-center mt-2 fw-bold fs-2">Laptop Lending</div>
        
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card-body">
        <div class = "container">
       
                             <form id="contact-form" method="POST" role="form" action="/students/store">
                                @csrf
             <div class="controls">
                <div class="row">
                    <!-- <div class="col-md-6">
                        <div class ="form-group mb-3" >
                            <label class for="form_name"><strong> Laptop Lending</strong></label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="New data*"  data-error="Firstname is required.">
                         </div>
                    </div> -->

                
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="form_Name">Nama *</label>
                            <input id="form_Name" type="Nama" name="nama" class="form-control" placeholder="Please enter your nama*"  data-error="Valid email is required.">
                         </div>
                    </div>

                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_rayon">Rayon *</label>
                            <select id="form_rayon" name="rayon" class="form-control"  data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Rayon--</option>
                                <option >Cibedug 1</option>
                                <option >Cibedug 2</option>
                                <option >Cibedug 3</option>
                                <option >Ciawi 1</option>
                                <option >Ciawi 2</option>
                                <option >Ciawi 3</option>
                                <option >Ciawi 4</option>
                                <option >Ciawi 5</option>
                                <option >Cisarua 1</option>
                                <option >Cisarua 2</option>
                                <option >Cisarua 3</option>
                                <option >Cisarua 4</option>
                                <option >Cisarua 5</option>
                                <option >Cisarua 6</option>
                                <option >Cicurug 1</option>
                                <option >Cicurug 2</option>
                                <option >Cicurug 3</option>
                                <option >Cicurug 4</option>
                                <option >Cicurug 5</option>
                                <option >Cicurug 6</option>
                                <option >Cicurug 7</option>
                                <option >Tajur 1</option>
                                <option >Tajur 2</option>
                                <option >Tajur 3</option>
                                <option >Tajur 4</option>
                                <option >Tajur 5</option>
                                <option >Wikrama 1</option>
                                <option >Wikrama 2</option>
                                <option >Wikrama 3</option>
                                <option >Wikrama 4</option>
                                <option >Sukasari 1</option>
                                <option >Sukasari 2</option>
                            </select>
                          </div>
                    </div>
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class ="form-group mb-3" >
                            <label class for="form_name"><strong> Please fill all the input with the right value</strong></label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Form*"  data-error="Firstname is required.">
                         </div>
                    </div>
                </div> -->

<div class="row">
                <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="form_nis">Nis*</label>
                            <input id="form_nis" type="nis" name="nis" class="form-control" placeholder="Please enter your nis *"  data-error="Valid email is required.">
                        </div>
                    </div>
                <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="form_teacher">Teacher *</label>
                            <input id="form_teacher" type="teacher" name="teacher" class="form-control" placeholder="Select Your *"  data-error="Valid email is required.">
                        </div>
                    </div>
                    </div>

 <!--
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="form_nis">Nis*</label>
                            <input id="form_nis" type="nis" name="nis" class="form-control" placeholder="Please enter your nis *"  data-error="Valid email is required.">
                        </div>
                    </div> -->

                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Region *</label>
                            <select id="form_need" name="need" class="form-control"  data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Region--</option>
                                <option >Cibedug 1</option>
                                <option >Cibedug 2</option>
                                <option >Cibedug 3</option>
                                <option >Ciawi 1</option>
                                <option >Ciawi 2</option>
                                <option >Ciawi 3</option>
                                <option >Ciawi 4</option>
                                <option >Ciawi 5</option>
                                <option >Cisarua 1</option>
                                <option >Cisarua 2</option>
                                <option >Cisarua 3</option>
                                <option >Cisarua 4</option>
                                <option >Cisarua 5</option>
                                <option >Cisarua 6</option>
                                <option >Cicurug 1</option>
                                <option >Cicurug 2</option>
                                <option >Cicurug 3</option>
                                <option >Cicurug 4</option>
                                <option >Cicurug 5</option>
                                <option >Cicurug 6</option>
                                <option >Cicurug 7</option>
                                <option >Tajur 1</option>
                                <option >Tajur 2</option>
                                <option >Tajur 3</option>
                                <option >Tajur 4</option>
                                <option >Tajur 5</option>
                                <option >Wikrama 1</option>
                                <option >Wikrama 2</option>
                                <option >Wikrama 3</option>
                                <option >Wikrama 4</option>
                                <option >Sukasari 1</option>
                                <option >Sukasari 2</option>
                            </select>
                          </div>
                    </div>
                </div> -->

          <fieldset>
           <label for="">Date</label>
              <input class='mb-3' name="date" placeholder="Target Date" type="date" class="form-control">
              </fieldset>
             
              <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="form_Teacher Name">Teacher Name *</label>
                            <input id="form_Teacher Name" type="Teacher Name" name="Teacher Name" class="form-control" placeholder="Select Your *"  data-error="Valid email is required.">
                        </div>
                    </div> -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="form_purposes">Purposes *</label>
                            <textarea id="form_purposes" name="purposes" class="form-control" placeholder="Write your purposes here." rows="4"  data-error="Please, leave us a purposes."></textarea>
                            </div>
                        </div>
                     
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="form_ket">Ket *</label>
                            <textarea id="form_ket" name="ket" class="form-control" placeholder="Write your ket here." rows="4"  data-error="Please, leave us a purposes."></textarea>
                            </div>
                        </div>

                  

                    <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block"value="Send Message" >
                    
                </div>
                </div>
           </div>
         </form>
        </div>
            </div>
    
    
    </div>
        <!-- /.8 -->
    
    </div>
    <!-- /.row-->
    
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>