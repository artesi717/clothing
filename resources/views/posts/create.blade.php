@extends('layouts.app')
@section('content')

<div class="container">
  <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
      <div class="col-8 offset-2">
        <div class="row">
          <h1 class="emri11">Add New Post</h1>
        </div>
        <div class="inputat1">
          <label for="name">Name</label>
          <input id="name" type="text" class="input1 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        

       


        <div class="inputat1">
          <label for="category">Location : </label><br>
          <select  id="category" type="text" class="form-select input1 @error('name') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="name" autofocus style="width: 100%;" aria-label="Default select example">
         
            <option selected>Open this select menu</option>
            <option value="Prishtina">Hoodie</option>
            <option value="Ferizaj">Tshirt</option>
            <option value="Vushtri">shorts</option>
          </select>
          @error('category')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>


        <div class="inputat1">
          <label for="location">Location : </label><br>
          <select  id="location" type="text" class="form-select input1 @error('name') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="name" autofocus style="width: 100%;" aria-label="Default select example">
         
            <option selected>Open this select menu</option>
            <option value="Prishtina">Prishtine</option>
            <option value="Ferizaj">Ferizaj</option>
            <option value="Vushtri">Vushtri</option>
          </select>
          @error('location')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
       
        
      
        <div class="inputat1">
          <label for="size">Size (sqm-size)</label>
          <input id="size" type="number" class="input1 form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}" required autocomplete="size" autofocus>
          @error('size')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputat1">
          <label for="quantity">Size (sqm-quantity)</label>
          <input id="quantity" type="number" class="input1 form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>
          @error('quantity')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputat1">
          <label for="price">Price</label>
          <input id="price" type="number" class="input1 form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
          @error('price')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      
        <div class="inputat1">

          Description
        </label>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <textarea id="description" class="input1 form-control  @error('description') is-invalid @enderror" style="height:150px" name="description" placeholder="Description" required autocomplete="description" autofocus></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>


        <div class="row">
          <label for="image" class="col-md-4 col-form-label text-md-left">
            <h4>Post Image :</h4>
          </label>
          <!--   <input type="file" class="form-control-file" id="image" name="image" multiple>-->
          <div class="file-upload">
            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

            <div class="image-upload-wrap">
              <input id="image" name="image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
              <div class="drag-text">
                <h3>Drag and drop a file or select add Image</h3>
              </div>
            </div>
            <div class="file-upload-content">
              <img class="file-upload-image" src="#" alt="your image" />
              <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
              </div>
            </div>
          </div>
          @error('image')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="row pt-5">
          <button class="myButton1">Add New Post </button>
        </div>
      </div>
    </div>
</div>

</div>
</form>


